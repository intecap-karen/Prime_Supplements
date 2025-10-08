<?php
namespace App\Models;
use CodeIgniter\Model;              
class EmpleadoModel extends Model
{
    protected $table = 'empleado';
    protected $primaryKey = 'dpi_empleado';
    protected $allowedFields = ['contrasenia', 'email', 'nombre','apellido', 'rol_id'];             
} 