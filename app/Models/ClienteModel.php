<?php

namespace App\Models;
use CodeIgniter\Model;


class ClienteModel extends Model
{
    protected $table = 'clientes';
    protected $primaryKey = 'cliente_id';
    protected $allowedFields = [ 'email', 'contrasenia', 'nombre', 'apellido', 'fecha_nac'];
    
}