<?php
namespace App\Models\admin;
    use CodeIgniter\Model;
    class AdminProductosModel extends Model
    {
        protected $table         = 'productos';
        protected $primaryKey    = 'producto_id';
        protected $allowedFields = [
            'producto_id','nombre','marca_id','descripcion','categoria','precio', 'cantidad_peso'
        ];
        //protected $returnType    = \App\Entities.User::class;
        //protected $useTimestamps = true;
    }   