<?php

namespace App\Controllers;

use App\Models\ProductoModel;

class HomeController extends BaseController
{
    public function index()
    {
        $productoModel = new ProductoModel();
        $productos = $productoModel->findAll();

        $session = session();
        $cliente_id = $session->get('cliente_id');

        return view('index', [
            'productos' => $productos,
            'cliente_id' => $cliente_id
        ]);
    }
}


