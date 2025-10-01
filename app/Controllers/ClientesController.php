<?php

namespace App\Controllers;
use App\Models\ClientesModel;

class ClientesController extends BaseController
{
    public function index()
    {
        $cliente = new ClientesModel();
        $datos['clientes'] = $cliente->findAll();
        return view('vista_gestion_clientes', $datos);
    }

    public function agregar()
    {
        $cliente = new ClientesModel();
        $datos = [
            'cliente_id' => $this->request->getPost('id_cliente'),
            'email' => $this->request->getPost('txt_email'),
            'contrasenia' => $this->request->getPost('pwd_cliente'),
            'nombre' => $this->request->getPost('txt_nombre'),
            'apellido' => $this->request->getPost('txt_apellido'),
            'fecha_nac' => $this->request->getPost('dt_nacimiento'),
        ];
        $cliente->insert($datos);
        return redirect()->route('clientes');
    }

    public function eliminar($id) 
    {
        $cliente = new ClientesModel();
        $cliente->delete($id);
        //dos formas de redireccionar 
        return redirect()->route('clientes');
        //return $this->index();
    }

    public function buscar($id)
    {
        $cliente = new ClientesModel();
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
        $cliente= new ClientesModel();
        $cliente->update($datos['cliente_id'], $datos);
        return redirect()->route('clientes');
    }
}