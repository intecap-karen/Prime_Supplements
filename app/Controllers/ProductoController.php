<?php

namespace App\Controllers;
use App\Models\ProductoModel;

class ProductoController extends BaseController
{
    public function index()
    {
        $categoria_id = $this->request->getGet('categoria_id');
        $productoModel = new ProductoModel();

        $productos = $categoria_id
            ? $productoModel->where('categoria_id', $categoria_id)->findAll()
            : $productoModel->findAll();

        return view('productos', [
            'productos' => $productos,
            'categoria_id' => $categoria_id
        ]);
    }
}
