<?php

namespace App\Controllers;
use App\Models\EmpleadoModel;
class LoginEmpleadoController extends BaseController
{
    // mostrara solo el incio de sesion del empleado
    public function index()
    {
        return view('login_empleado');
    }

 public function loginempleado()
    {
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        $empleadoModel = new EmpleadoModel();
        $empleado = $empleadoModel->where('email', $email)
                                  ->where('contrasenia', $password)
                                  ->first();

        if (!$empleado) {
            return redirect()->back()->with('error', 'Correo o contraseña incorrectos.');
        }

        try {
    $session = session();
    $session->set('dpi_empleado', $empleado['dpi_empleado']);
    $session->set('email', $empleado['email']);                                                 
    $session->set('nombre', $empleado['nombre']);
    $session->set('apellido', $empleado['apellido']);   

    if ($empleado['rol_id'] == 1) {
        return redirect()->to('admin/empleados');
    } elseif ($empleado['rol_id'] == 2) {
        return redirect()->to('/empleados');
    } elseif ($empleado['rol_id'] == 3) {
        return redirect()->to('/mensajero_panel');
    } else {
        return redirect()->back()->with('error', 'Rol de usuario no válido.');
    }

} catch (\Exception $e) {
    return redirect()->back()->with('error', 'Error al iniciar sesión: ' . $e->getMessage());
}
  

           if ($empleado['rol_id'] == 1) {
    return redirect()->to('/administrador');
} elseif ($empleado['rol_id'] == 2) {
    return redirect()->to('/empleados');
} elseif ($empleado['rol_id'] == 3) {
    return redirect()->to('/mensajero_panel');
} else {
    return redirect()->back()->with('error', 'Rol de usuario no válido.');
}
    }

    // Cerrar sesión
    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/login_empleado');
    }
}