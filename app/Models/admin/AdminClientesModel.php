<?php

namespace App\Models\admin;
use CodeIgniter\Model;
class AdminClientesModel extends Model
{
    protected $table = 'clientes';
    protected $primaryKey = 'cliente_id';
    protected $allowedFields = [
        'cliente_id', 
        'email', 
        'contrasenia',
        'nombre', 
        'apellido', 
        'fecha_nac'
    ];
}