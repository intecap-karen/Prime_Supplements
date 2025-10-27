<?php

namespace App\Controllers;
use App\Models\ProductoModel;

class CarritoController extends BaseController
{
    public function agregar()
    {
        $producto_id = $this->request->getPost('producto_id');
        $cantidad = $this->request->getPost('cantidad');

        $productoModel = new ProductoModel();
        $producto = $productoModel->find($producto_id);

        if (!$producto) {
            return redirect()->back()->with('error', 'Producto no encontrado');
        }

        $carrito = session()->get('carrito') ?? [];

        if (isset($carrito[$producto_id])) {
            $carrito[$producto_id]['cantidad'] += $cantidad;
        } else {
            $carrito[$producto_id] = [
                'producto_id' => $producto_id,
                'nombre' => $producto['nombre'],
                'precio' => $producto['precio'],
                'cantidad' => $cantidad
            ];
        }

        session()->set('carrito', $carrito);
        return redirect()->to(base_url('carrito'));
    }

    public function ver()
    {
        $carrito = session()->get('carrito') ?? [];
        return view('carrito', ['carrito' => $carrito]);
    }

    public function completar()
    {
        $carrito = session()->get('carrito') ?? [];
        return view('completar_pedido', ['carrito' => $carrito]);
    }
}
