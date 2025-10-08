<?php   
namespace App\Controllers;
use App\Models\ClienteModel;     

class RegistroController extends BaseController
{
    public function index(){
    
        return view('registro_cliente');
    }

    public function registrarCliente(){
        
         $nombre     = $this->request->getPost('nombre');
    $apellido   = $this->request->getPost('apellido');
    $direccion  = $this->request->getPost('direccion');
    $fechanac = $this->request->getPost('fecha_nac');
    $email      = $this->request->getPost('email_cliente');
    $password   = $this->request->getPost('contrasenia');
    
    $cliente= new ClienteModel();


//verificar si el email ya existe
$existe= $cliente->where ('email', $email)->first();
if($existe){
    return redirect()->back()->with('error', 'El email ya está registrado.');}



    
    $cliente->insert ([
        'nombre'        => $nombre,
        'apellido'      => $apellido,
        'direccion'     => $direccion,
        'fecha_nac'     => $fechanac,
        'email'         => $email,
        'contrasenia'   => $password
    ]);

    $correo = \Config\Services::email();
    $correo->setTo($email);
    $correo->setSubject('Bienvenido(a) a  Supplements Prime');
   $urlLogin = base_url('login_cliente');//se debe crear el url antes de usarlo
    $correo->setMessage("
        <h2>Hola $nombre,</h2>
        <p>Gracias por registrarte. Ya puedes iniciar sesión.
        </p>
        <p><a href='$urlLogin'>Iniciar sesión</a></p>
");
$correo->send();
return redirect()->to(('login_cliente'))->with('mensaje', 'Registro exitoso. Por favor, inicia sesión.');


}}