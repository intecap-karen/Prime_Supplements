<?php

namespace App\Models\admin;
use CodeIgniter\Model;
class AdminEmpleadosModel extends Model
{
    protected $table = 'empleado';
    protected $primaryKey = 'dpi_empleado';
    protected $allowedFields = [
        'dpi_empleado', 
        'contrasenia',
        'email',
        'nombre',
        'apellido',
        'rol_id'
    ];
}