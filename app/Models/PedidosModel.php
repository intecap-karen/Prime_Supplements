<?php
namespace App\Models;
use CodeIgniter\Model;              

class PedidosModel extends Model
{
    protected $table = 'pedido';
    protected $primaryKey = 'pedido_id';
    protected $allowedFields = ['cliente_id', 'dpi_empleado', 'direccion_entrega', 'telefono', 'estado_id', 'total_pedido', 'observaciones'];             


    // metodo para unir tablas y mostrar datos de varias tablas en la vista pedidos
public function obtenerDatos()
{ return $this-> select ('pedido.*, clientes.nombre as nombre_cliente, estado.estado as estado_actual')
-> join ('clientes', 'clientes.cliente_id = pedido.cliente_id')
-> join ('estado', 'estado.estado_id = pedido.estado_id')
-> where('pedido.estado_id', 1)->findAll();
}


  public function obtenerPedidosAsignados($dpiEmpleado)
    {
        return $this->select('pedido.*, clientes.nombre AS nombre_cliente, estado.estado AS estado_actual')
            ->join('clientes', 'clientes.cliente_id = pedido.cliente_id')
            ->join('estado', 'estado.estado_id = pedido.estado_id')
            ->where('pedido.estado_id', 2)
            ->where('pedido.dpi_empleado', $dpiEmpleado)
            ->findAll();
    }
}