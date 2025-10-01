<?php

namespace App\Models;
use CodeIgniter\Model;
class ClientesModel extends Model
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
     //protected $returnType =\App\Entities\User::class;
    //protected $useTimestamps = true;
}