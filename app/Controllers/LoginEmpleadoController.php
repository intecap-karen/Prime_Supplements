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
$password= $this->request->getPost('password');

$empleadoModel = new EmpleadoModel();
$empleado = $empleadoModel->where('email', $email)
->where('contrasenia', $password)->first();
    
try {
    $session = session();
    $session->set('dpi_empleado', $empleado['dpi_empleado']);
    $session->set('email', $empleado['email']);                                                 
    $session->set('nombre', $empleado['nombre']);
    $session->set('apellido', $empleado['apellido']);   
    if ($empleado['rol_id'] == 1) {
        // Si el rol es 1 (administrador), redirigir a la página de administración
        return redirect()->to('/administrador'); //'administrador' es el nombre de la ruta que asignamos en routes.php
    } elseif ($empleado['rol_id'] == 2) {
        // Si el rol es 2 (usuario), redirigir a la página de usuario
        return redirect()->to('/empleados'); //'empleados' es el nombre de la ruta que asignamos en routes.php
    } else {
        // Si el rol no es válido, redirigir al login con un mensaje de error
        return redirect()->back()->with('error', 'Rol de usuario no válido.');
    }
   

} catch (\Exception $e) {
    echo "Error al iniciar sesión: " . $e->getMessage();


}}

public function logout() {
        // Cerrar la sesión del cliente
        $session = session();
        $session->destroy();
        return redirect()->to('/login_empleado');    
}

}