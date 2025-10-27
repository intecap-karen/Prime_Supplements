<?php

namespace App\Controllers\admin;

use App\Models\admin\MarcasModel;

class MarcaController extends BaseController
{
    public function verMarcas()
    {
        $marcas = new MarcasModel();
        $datos['marcas'] = $marcas->findAll();
        return view('admin/vista_marcas', $datos);
    }

    public function index()
    {
        $marcas = new MarcasModel();
        $datos['datos'] = $marcas->findAll();
        return view('admin/vista_marcas_administrador', $datos);
    }

    public function agregar()
    {
        $marcas = new MarcasModel();
        $datos = [
            'marca_id' => $this->request->getVar('marca_id'),
            'marca_nombre' => $this->request->getVar('marca_nombre'),
            'descripcion' => $this->request->getVar('descripcion')
        ];
        $marcas->insert($datos);
        return redirect()->to(base_url('marcas'));
    }

    public function eliminar($marca_id)
    {
        $marcas = new MarcasModel();
        $marcas->delete($marca_id);
        return redirect()->to('marcas');
    }


    public function modificar()
    {
        $marcas = new MarcasModel();
        $marca_id = $this->request->getPost('marca_id'); // correcto, viene del input hidden

        $datos = [
            'marca_nombre' => $this->request->getPost('marca_nombre'),
            'descripcion'  => $this->request->getPost('descripcion')
        ];

        $marcas->update($marca_id, $datos); // aquí usamos $marca_id directamente

        return redirect()->to(base_url('marcas')); // coincide con la ruta de listado de marcas
    }
    public function buscar($marca_id)
    {
        $marcas = new MarcasModel();
        $datos['datos'] = $marcas->where('marca_id', $marca_id)->first();
        return view('admin/vistaModificarMarca', $datos);
    }
}

