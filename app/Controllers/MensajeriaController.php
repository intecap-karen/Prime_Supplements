<?php

namespace App\Controllers;

use App\Models\PedidosModel;
use App\Models\DetallePedidoModel;


class MensajeriaController extends BaseController
{
public function index()
{
    $pedidosModel = new PedidosModel();

    // Obtener el DPI del mensajero logueado
    $dpi_empleado = session()->get('dpi_empleado');

    // Total de pedidos en estado 3 (En camino)
    $totalEnCamino = $pedidosModel
        ->where('estado_id', 3)
        ->where('dpi_empleado', $dpi_empleado)
        ->countAllResults();

    //  CAMBIO: Total de pedidos en estado 5 (Entregado al cliente)
    $totalFinalizado = $pedidosModel
        ->where('estado_id', 5)
        ->where('dpi_empleado', $dpi_empleado)
        ->countAllResults();

    // Pedidos asignados (estado 3)
    $pedidosAsignados = $pedidosModel
        ->where('estado_id', 3)
        ->where('dpi_empleado', $dpi_empleado)
        ->findAll();

    // Pedidos finalizados (estado 5 = entregado al cliente)
    $pedidosFinalizados = $pedidosModel
        ->where('estado_id', 5)
        ->where('dpi_empleado', $dpi_empleado)
        ->findAll();

    $data = [
        'totalEnCamino'      => $totalEnCamino,
        'totalFinalizado'    => $totalFinalizado,
        'pedidosAsignados'   => $pedidosAsignados,
        'pedidosFinalizados' => $pedidosFinalizados,
        'id_empleado'        => $dpi_empleado
    ];

    return view('mensajero_panel', $data);
}

   public function enviosAsignados()
{
    $pedidosModel = new PedidosModel();
    $detalleModel = new DetallePedidoModel();

    // Obtener pedidos en estado 3
 $pedidosAsignados = $pedidosModel
    ->select('pedido.*, clientes.nombre')
    ->join('clientes', 'clientes.cliente_id = pedido.cliente_id')
    ->where('pedido.estado_id', 3)
    ->findAll();

    // Calcular total por pedido
    foreach ($pedidosAsignados as &$pedido) {
        $pedido['total_calculado'] = $detalleModel->obtenerTotalPorPedido($pedido['pedido_id']);
    }

    return view('envios_asignados', [
        'pedidosAsignados' => $pedidosAsignados
    ]);
}


// finalizar 

    public function marcarEntregado()
{
    $pedido_id = $this->request->getPost('pedido_id');

    $pedidoModel = new PedidosModel();

    // Actualizar estado a 5 (Entregado con éxito al cliente)
    $pedidoModel->update($pedido_id, ['estado_id' => 5]);

    return redirect()->to('/pedidos_completados');
}

public function pedidosCompletados()
{
    $pedidosModel = new PedidosModel();
    $detalleModel = new DetallePedidoModel(); // Instanciar el modelo
    $dpi_empleado = session()->get('dpi_empleado');

    // Buscar pedidos con estado 5 (Entregado con éxito al cliente)
    $pedidosFinalizados = $pedidosModel
        ->where('estado_id', 5)
        ->where('dpi_empleado', $dpi_empleado)
        ->findAll();

    // Calcular total por pedido
    foreach ($pedidosFinalizados as &$pedido) {
        $pedido['total_calculado'] = $detalleModel->obtenerTotalPorPedido($pedido['pedido_id']);
    }

    return view('pedidos_completados', [
        'pedidosFinalizados' => $pedidosFinalizados
    ]);
}


}
