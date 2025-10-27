<?php

namespace App\Controllers;
use App\Models\PedidosModel;
use App\Models\ClienteModel;
use App\Models\DetallePedidoModel;

class PedidoController extends BaseController
{
    public function crear()
    {
        // Capturar datos del formulario
        $nombre        = $this->request->getPost('nombre');
        $telefono      = $this->request->getPost('telefono');
        $direccion     = $this->request->getPost('direccion');
        $metodo_pago   = $this->request->getPost('metodo_pago');
        $observaciones = $this->request->getPost('observaciones');
        $carrito       = session()->get('carrito') ?? [];

        // Validar carrito
        if (empty($carrito)) {
            return redirect()->to(base_url('carrito'))->with('error', 'Tu carrito está vacío');
        }

        // Obtener cliente_id desde sesión o crear uno nuevo
        $cliente_id = session()->get('cliente_id');

        if (!$cliente_id) {
            $clienteModel = new ClienteModel();
            $cliente_id = $clienteModel->insert([
                'nombre'      => $nombre,
                'apellido'    => '',
                'email'       => '',
                'contrasenia' => '',
                'fecha_nac'   => null
            ]);
        }

        // Calcular total del pedido
        $total_pedido = 0;
        foreach ($carrito as $item) {
            $precio = floatval($item['precio']);
            $cantidad = intval($item['cantidad']);
            $total_pedido += $precio * $cantidad;
        }

        // Crear pedido
        $pedidoModel = new PedidosModel();
        $pedido_id = $pedidoModel->insert([
            'cliente_id'        => $cliente_id,
            'dpi_empleado'      => 1002, // Asignación fija
            'direccion_entrega' => $direccion,
            'telefono'          => $telefono,
            'estado_id'         => 1,
            'total_pedido'      => $total_pedido,
            'observaciones'     => $observaciones,
            'fecha'             => date('Y-m-d H:i:s')
        ]);

        // Guardar detalle del pedido
        $detalleModel = new DetallePedidoModel();
        foreach ($carrito as $item) {
            $detalleModel->insert([
                'pedido_id'   => $pedido_id,
                'producto_id' => $item['producto_id'],
                'nombre'      => $item['nombre'],
                'cantidad'    => $item['cantidad'],
                'precio'      => $item['precio']
            ]);
        }

        // Mostrar vista de confirmación antes de limpiar el carrito
        $confirmacion = view('pedido_confirmado', [
            'pedido_id'     => $pedido_id,
            'nombre'        => $nombre,
            'telefono'      => $telefono,
            'direccion'     => $direccion,
            'metodo_pago'   => $metodo_pago,
            'observaciones' => $observaciones,
            'carrito'       => $carrito,
            'total_pedido'  => $total_pedido
        ]);

        session()->remove('carrito');

        return $confirmacion;
    }
}
