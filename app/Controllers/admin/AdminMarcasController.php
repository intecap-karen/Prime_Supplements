<?php

namespace App\Controllers\admin;

use App\Models\admin\AdminMarcasModel;

class AdminMarcasController extends BaseController
{
    public function verMarcas()
    {
        $marcas = new AdminMarcasModel();
        $datos['admin/marcas'] = $marcas->findAll();
        return view('admin/vista_marcas', $datos);
    }

    public function index()
    {
        $marcas = new AdminMarcasModel();
        $datos['datos'] = $marcas->findAll();
        return view('admin/vista_marcas_administrador', $datos);
    }

    public function agregar()
    {
        $marcas = new AdminMarcasModel();
        $datos = [
            'marca_id' => $this->request->getVar('marca_id'),
            'marca_nombre' => $this->request->getVar('marca_nombre'),
            'descripcion' => $this->request->getVar('descripcion')
        ];
        $marcas->insert($datos);
        return redirect()->to(base_url('admin/marcas'));
    }

    public function eliminar($marca_id)
    {
        $marcas = new AdminMarcasModel();
        $marcas->delete($marca_id);
        return redirect()->to('admin/marcas');
    }


    public function modificar()
    {
        $marcas = new AdminMarcasModel();
        $marca_id = $this->request->getPost('marca_id'); // correcto, viene del input hidden

        $datos = [
            'marca_nombre' => $this->request->getPost('marca_nombre'),
            'descripcion'  => $this->request->getPost('descripcion')
        ];

        $marcas->update($marca_id, $datos); // aquí usamos $marca_id directamente

        return redirect()->to(base_url('admin/marcas')); // coincide con la ruta de listado de marcas
    }
    public function buscar($marca_id)
    {
        $marcas = new AdminMarcasModel();
        $datos['datos'] = $marcas->where('marca_id', $marca_id)->first();
        return view('admin/vistaModificarMarca', $datos);
    }
}

