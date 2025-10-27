<?php

namespace App\Models;
use CodeIgniter\Model;

class CategoriaModel extends Model
{
    protected $table = 'cat_productos';
    protected $primaryKey = 'categoria_id';
    protected $allowedFields = ['categoria'];
}
