<?php

namespace App\Controllers;
use App\Models\ClienteModel;
class LoginClienteController extends BaseController
{
    // mostrara solo el incio de sesion del cliente
    public function index()
    {
        return view('login_cliente');
    }

    public function login()
    {

        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');
        $clienteModel = new ClienteModel();
        $cliente = $clienteModel->where('email', $email)
            ->where('contrasenia', $password)->first();


        try {
            $session = session();
            $session->set('cliente_id', $cliente['cliente_id']);
            $session->set('email', $cliente['email']);
            $session->set('nombre', $cliente['nombre']);
            $session->set('apellido', $cliente['apellido']);
            return redirect()->to('/');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Datos incorrectos.');
        }

    }


    
}