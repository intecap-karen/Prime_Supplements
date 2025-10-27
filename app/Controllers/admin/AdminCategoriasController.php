<?php
namespace App\Controllers\admin;

use App\Models\admin\AdminCategoriasModel;

class AdminCategoriasController extends BaseController
{
    public function verCategorias()
    {
        $categoria = new AdminCategoriasModel();
        $datos['admin/categorias'] = $categoria->findAll();
        return view('admin/vista_categoria_administrador', $datos);
    }

    public function buscar($id)
    {
        $categoria = new AdminCategoriasModel();
        $datos['categorias'] = $categoria->where('categoria_id', $id)->first();
        return view('admin/vista_categoria_administrador', $datos);
    }

    public function index()
    {
        $categoria = new AdminCategoriasModel();
        $datos['categorias'] = $categoria->findAll();
        return view('admin/vista_categoria_administrador', $datos);
    }

    public function agregar()
    {
        $categoria = new AdminCategoriasModel();
        $datos = [
            'categoria_id' => $this->request->getPost('categoria_id'),
            'categoria' => $this->request->getPost('categoria'),
        ];
        $categoria->insert($datos);
        return redirect()->to(base_url('admin/categorias'));
    }

    public function modificar()
    {
        $categoria = new AdminCategoriasModel();
        $categoria_id = $this->request->getPost('categoria_id');

        $datos = [
            'categoria' => $this->request->getPost('categoria'),
        ];

        $categoria->update($categoria_id, $datos);

        return redirect()->to(base_url('admin/categorias'));
    }

    public function eliminar($id)
    {
        $categoria = new AdminCategoriasModel();
        $categoria->where(['categoria_id' => $id])->delete();
        return redirect()->to(base_url('admin/categorias'));
    }
}
