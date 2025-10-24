<?php namespace App\Models;
use CodeIgniter\Model;      
    
class DetallePedidoModel extends Model
{
    protected $table = 'detalle_pedido';
    protected $primaryKey = 'detalle_id';        
    protected $allowedFields = ['pedido_id', 'producto_id', 'cantidad', 'precio'];
    
// metodo para unir tablas y mostrar datos de varias tablas en la vista detalle pedido

public function obtenerDetalleConProducto($pedidoId)
{
    return $this->db->table('detalle_pedido')
        ->select('detalle_pedido.*, productos.nombre AS nombre_producto, productos.precio')
        ->join('productos', 'productos.producto_id = detalle_pedido.producto_id')
        ->where('detalle_pedido.pedido_id', $pedidoId)
        ->get()
        ->getResultArray();
}



public function obtenerTotalPorPedido($pedidoId)
{
    $resultado = $this->db->table('detalle_pedido')
        ->select('SUM(productos.precio * detalle_pedido.cantidad) AS total')
        ->join('productos', 'productos.producto_id = detalle_pedido.producto_id')
        ->where('detalle_pedido.pedido_id', $pedidoId)
        ->get()
        ->getRow();

    return $resultado && $resultado->total ? floatval($resultado->total) : 0;
}






}