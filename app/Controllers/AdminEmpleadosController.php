<?php

namespace App\Controllers;
use App\Models\AdminEmpleadosModel;

class AdminEmpleadosController extends BaseController
{
    public function index()
    {
        $empleado = new AdminEmpleadosModel();
        $datos['empleados'] = $empleado->findAll();
        return view('vista_gestion_empleados', $datos);
    }

    public function agregar()
    {
        $empleado = new AdminEmpleadosModel();
        $datos = [
            'dpi_empleado' => $this->request->getPost('dpi_empleado'),
            'contrasenia' => $this->request->getPost('pwd_empleado'),
            'email' => $this->request->getPost('txt_email'),
            'nombre' => $this->request->getPost('txt_nombre'),
            'apellido' => $this->request->getPost('txt_apellido'),
            'rol_id' => $this->request->getPost('rol_id'),
        ];
        $empleado->insert($datos);

        return redirect()->route('empleados');
    }

    public function eliminar($id) 
    {
        $empleado = new AdminEmpleadosModel();
        $empleado->delete($id);
        //dos formas de redireccionar 
        return redirect()->route('empleados');
        //return $this->index();
    }

    public function buscar($id)
    {
        $empleado = new AdminEmpleadosModel();
        $datos['datos']=$empleado->where(['dpi_empleado'=>$id])->first();
        return view ('form_modificar_empleados', $datos);
    }

    public function modificar()
    {
        $datos = [
            'dpi_empleado' => $this->request->getPost('dpi_empleado'),
            'contrasenia' => $this->request->getPost('pwd_empleado'),
            'email' => $this->request->getPost('txt_email'),
            'nombre' => $this->request->getPost('txt_nombre'),
            'apellido' => $this->request->getPost('txt_apellido'),
            'rol_id' => $this->request->getPost('rol_id'),
        ];
        $empleado= new AdminEmpleadosModel();
        $empleado->update($datos['dpi_empleado'], $datos);
        return redirect()->route('empleados');
    }
}