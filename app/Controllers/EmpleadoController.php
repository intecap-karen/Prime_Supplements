<?php
namespace App\Controllers;
use App\Models\DetallePedidoModel;
use App\Models\EmpleadoModel;
use App\Models\PedidosModel;
class EmpleadoController extends BaseController
{

public function index()
{
    $pedidosModel = new PedidosModel();
    $dpi_empleado = session()->get('dpi_empleado');

    $totalPedidos = $pedidosModel->where('estado_id', 1)->findAll();
    $Asignados = count($pedidosModel->obtenerAsignados());

    //  Mostrar todos los entregados, sin filtrar por empleado
    $totalFinalizado = $pedidosModel
        ->where('estado_id', 5)
        ->countAllResults();

    return view('panel_empleado', [
        'Pedidos'         => count($totalPedidos),
        'Asignados'       => $Asignados,
        'totalFinalizado' => $totalFinalizado,
        'id_empleado'     => $dpi_empleado
    ]);
}





public function verPedidos()
{
    $pedidosModel = new PedidosModel();
    $detalleModel = new DetallePedidoModel();

    $pedidos = $pedidosModel->obtenerDatos();

    foreach ($pedidos as &$pedido) {
        $pedido['total_calculado'] = $detalleModel->obtenerTotalPorPedido($pedido['pedido_id']);
    }

    return view('pedidos', [
        'pedidos' => $pedidos
    ]);
}



public function verAsignadosEmpleado()
{
    $pedidosModel = new PedidosModel();
    $Asignados = count($pedidosModel->obtenerAsignados());

    return view('panel_empleado', [
        'Asignados' => $Asignados,
        'id_empleado' => session()->get('dpi_empleado') // si lo necesitas en la vista
    ]);
}
    

public function asignar()
{
    $pedidoId = $this->request->getPost('pedido_id');
    $dpiEmpleado = $this->request->getPost('dpi_empleado');

    $pedidosModel = new PedidosModel();
    $pedidosModel->update($pedidoId, [
        'dpi_empleado' => $dpiEmpleado,
        'estado_id' => 2
    ]);

    session()->setFlashdata('mensaje', 'Pedido asignado correctamente');

   return redirect()->to(base_url('pedidos_asignados?dpi_empleado=' . $dpiEmpleado));

}



   


public function verAsignados()
{
    $dpiEmpleado = $this->request->getGet('dpi_empleado');

    $pedidosModel = new PedidosModel();
    $detalleModel = new DetallePedidoModel();

    $pedidosAsignados = $pedidosModel->obtenerPedidosAsignados($dpiEmpleado);

    foreach ($pedidosAsignados as &$pedido) {
        $pedido['total_calculado'] = $detalleModel->obtenerTotalPorPedido($pedido['pedido_id']);
    }

    return view('pedidos_empleado', ['pedidos' => $pedidosAsignados]);
}



//detalle del pedido

public function detallePedido($pedidoId)
{
    $pedidosModel = new PedidosModel();
    $detalleModel = new DetallePedidoModel();

    $pedido = $pedidosModel
        ->select('pedido.*, clientes.nombre AS nombre_cliente')
        ->join('clientes', 'clientes.cliente_id = pedido.cliente_id')
        ->where('pedido.pedido_id', $pedidoId)
        ->first();

    //  Usar el método con JOIN para traer nombre y precio
    $detalles = $detalleModel->obtenerDetalleConProducto($pedidoId);

    // Calcular total
    $total = 0;
    foreach ($detalles as &$detalle) {
        $detalle['subtotal'] = $detalle['precio'] * $detalle['cantidad'];
        $total += $detalle['subtotal'];
    }

    return view('vista_detalle', [
        'pedido' => $pedido,
        'detalles' => $detalles,
        'total' => $total
    ]);

    



}
public function asignarAMensajero()
{
    $pedidoId = $this->request->getPost('pedido_id');
    $dpiMensajero = '1003'; // fijo por ahora

    $pedidosModel = new PedidosModel();
    $pedidosModel->update($pedidoId, [
        'dpi_empleado' => $dpiMensajero,
        'estado_id' => 3 // estado entregado o asignado a mensajería
    ]);

    // Mensaje flash para mostrar alerta
    session()->setFlashdata('mensaje', 'Pedido asignado a mensajería con éxito/ podra ver este pedido en el historial cuando mensajero lo haya marcado como entregado');

    return redirect()->to(base_url('empleados'));
}
public function historial()
{
    $pedidosModel = new PedidosModel();
    $detalleModel = new DetallePedidoModel(); // Instanciar el modelo

    // Obtener pedidos en estado 5 (entregados), con nombre del cliente
    $pedidosFinalizados = $pedidosModel
        ->select('pedido.*, clientes.nombre')
        ->join('clientes', 'clientes.cliente_id = pedido.cliente_id')
        ->where('pedido.estado_id', 5)
        ->findAll();

    // Calcular total por pedido
    foreach ($pedidosFinalizados as &$pedido) {
        $pedido['total_calculado'] = $detalleModel->obtenerTotalPorPedido($pedido['pedido_id']);
    }

    // Calcular total acumulado para la card
    $totalFinalizado = array_sum(array_column($pedidosFinalizados, 'total_calculado'));

    return view('historial', [
        'totalFinalizado'    => $totalFinalizado,
        'pedidosFinalizados' => $pedidosFinalizados
    ]);
}



public function perfil()
{
    return view('perfil_empleado');
}

}