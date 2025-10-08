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
        //'Pedidos' es el nombre del array que contiene el total de pedidos hecho por el metodo Countall que muestra 
// el total de pedidos de la base de datos 
        $totalPedidos = $pedidosModel->where('estado_id', 1)->findAll();
        //print_r(count($totalPedidos));

        return view(
            'panel_empleado',
            [
                'Pedidos' => count($totalPedidos)
            ]


        );
    }



    public function verPedidos()
    {
        $pedidosModel = new PedidosModel();
        $pedidos = $pedidosModel->obtenerDatos();

        return view('pedidos', [
            'pedidos' => $pedidos
        ]);
    }

    public function asignar()
    {
        $pedidoId = $this->request->getPost('pedido_id');
        $dpiEmpleado = $this->request->getPost('dpi_empleado');

        $pedidosModel = new PedidosModel();
        $pedidosModel->update($pedidoId, ['dpi_empleado' => $dpiEmpleado, 'estado_id' => 2]);

       //  Agregamos esta línea para que la vista reciba la variable $pedidos
    $pedidos = $pedidosModel
    ->obtenerPedidosAsignados($dpiEmpleado);
return view('pedidos_empleado', ['pedidos' => $pedidos]);

   
}

public function verAsignados()
{
    $dpiEmpleado = $this->request->getGet('dpi_empleado');

    $pedidosModel = new PedidosModel();
    $detalleModel = new DetallePedidoModel();

    $pedidosAsignados = $pedidosModel->obtenerPedidosAsignados($dpiEmpleado);

    // Enriquecer cada pedido con su total real
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
}}