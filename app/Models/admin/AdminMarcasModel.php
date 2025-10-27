<?php
namespace App\Models\admin;
    use CodeIgniter\Model;
    class AdminMarcasModel extends Model
    {
        protected $table         = 'marcas';
        protected $primaryKey    = 'marca_id';
        protected $allowedFields = [
            'marca_id','marca_nombre','descripcion'
        ];
        //protected $returnType    = \App\Entities.User::class;
        //protected $useTimestamps = true;
    }   