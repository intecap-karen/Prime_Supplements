<?php

namespace App\Controllers;
use App\Models\CategoriaModel;

class CategoriaController extends BaseController
{
    public function index()
    {
        $categoriaModel = new CategoriaModel();
        $categorias = $categoriaModel->findAll();

        return view('categorias', ['categorias' => $categorias]);
    }
}
