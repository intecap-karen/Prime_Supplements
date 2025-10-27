<?php

namespace App\Controllers\admin;

use App\Models\admin\AdminProductosModel;
class AdminProductosController extends BaseController
{
    public function verProductos()
    {
        $producto = new AdminProductosModel();
        $datos['productos'] = $producto->findAll();
        return view('admin/vista_productos', $datos);
        
    }

    public function index(): string 
    {
        $producto = new AdminProductosModel();

        $datos['datos'] = $producto->findAll();
        return view('admin/vista_producto_administrador', $datos);
    }
    public function eliminar($producto_id)
    {
        $producto = new AdminProductosModel();
        $producto->delete($producto_id);
        return redirect()->to('admin/productos');
    }
    public function agregar()
    {
        $producto = new AdminProductosModel();
        $datos = [
            'nombre' => $this->request->getVar('nombre'),
            'marca_id' => $this->request->getVar('marca_id'),
            'descripcion' => $this->request->getVar('descripcion'),
            'precio' => $this->request->getVar('precio'),
            'cantidad_peso' => $this->request->getVar('cantidad_peso'),
            'categoria_id' => $this->request->getVar('categoria_id'),
        ];
        $producto->insert($datos);
        return redirect()->to('admin/productos');
    }
    public function buscar($producto_id)
    {
        $producto = new AdminProductosModel();
        $datos['datos'] = $producto->where('producto_id', $producto_id)->first();
        return view('admin/vistaModificarProducto', $datos);
    }
    
    public function modificar()
    {
        $producto = new AdminProductosModel();
        $datos = [
            'producto_id' => $this->request->getPost('producto_id'),
            'nombre' => $this->request->getPost('nombre'),
            'marca_id' => $this->request->getPost('marca_id'),
            'descripcion' => $this->request->getPost('descripcion'),
            'precio' => $this->request->getPost('precio'),
            'categoria_id' => $this->request->getPost('categoria_id'),
        ];
        $producto->update($datos['producto_id'], $datos);
        return redirect()->to('admin/productos');
    }
}