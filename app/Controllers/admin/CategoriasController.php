<?php
namespace App\Controllers\admin;

use App\Models\admin\CategoriasModel;

class CategoriasController extends BaseController
{
    public function verCategorias()
    {
        $categoria = new CategoriasModel();
        $datos['categorias'] = $categoria->findAll();
        return view('admin/vista_categoria_administrador', $datos);
    }

    public function buscar($id)
    {
        $categoria = new CategoriasModel();
        $datos['categorias'] = $categoria->where('categoria_id', $id)->first();
        return view('admin/vista_categoria_administrador', $datos);
    }

    public function index()
    {
        $categoria = new CategoriasModel();
        $datos['categorias'] = $categoria->findAll();
        return view('admin/vista_categoria_administrador', $datos);
    }

    public function agregar()
    {
        $categoria = new CategoriasModel();
        $datos = [
            'categoria_id' => $this->request->getPost('categoria_id'),
            'categoria' => $this->request->getPost('categoria'),
        ];
        $categoria->insert($datos);
        return redirect()->to(base_url('categorias'));
    }

    public function eliminar($id)
    {
        $categoria = new CategoriasModel();
        $categoria->where(['categoria_id' => $id])->delete();
        return redirect()->to(base_url('categorias'));
    }
}
