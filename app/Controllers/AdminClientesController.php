<?php

namespace App\Controllers;
use App\Models\AdminClientesModel;

class AdminClientesController extends BaseController
{
    public function index()
    {
        $cliente = new AdminClientesModel();
        $datos['clientes'] = $cliente->findAll();
        return view('vista_gestion_clientes', $datos);
    }

    public function agregar()
    {
        $cliente = new AdminClientesModel();
        $datos = [
            'cliente_id' => $this->request->getPost('id_cliente'),
            'email' => $this->request->getPost('txt_email'),
            'contrasenia' => $this->request->getPost('pwd_cliente'),
            'nombre' => $this->request->getPost('txt_nombre'),
            'apellido' => $this->request->getPost('txt_apellido'),
            'fecha_nac' => $this->request->getPost('dt_nacimiento'),
        ];
        $cliente->insert($datos);
        return redirect()->route('admin/clientes');
    }

    public function eliminar($id) 
    {
        $cliente = new AdminClientesModel();
        $cliente->delete($id);
        //dos formas de redireccionar 
        return redirect()->route('admin/clientes');
        //return $this->index();
    }

    public function buscar($id)
    {
        $cliente = new AdminClientesModel();
        $datos['datos']=$cliente->where(['cliente_id'=>$id])->first();
        return view ('form_modificar_clientes', $datos);
    }

    public function modificar()
    {
        $datos = [
            'cliente_id' => $this->request->getPost('id_cliente'),
            'email' => $this->request->getPost('txt_email'),
            'contrasenia' => $this->request->getPost('pwd_cliente'),
            'nombre' => $this->request->getPost('txt_nombre'),
            'apellido' => $this->request->getPost('txt_apellido'),
            'fecha_nac' => $this->request->getPost('dt_nacimiento'),
        ];
        $cliente= new AdminClientesModel();
        $cliente->update($datos['cliente_id'], $datos);
        return redirect()->route('admin/clientes');
    }
}