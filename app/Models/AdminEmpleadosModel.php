<?php

namespace App\Models;
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