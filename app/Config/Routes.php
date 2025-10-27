<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'HomeController::index'); // Página principal
$routes->get('nosotros', function () {
    return view('nosotros');
});

/* Carrito y pedidos del cliente */
$routes->get('carrito', 'CarritoController::ver');
$routes->post('carrito/agregar', 'CarritoController::agregar');
$routes->get('carrito/completar', 'CarritoController::completar');
$routes->post('pedido/crear', 'PedidoController::crear');

/* Métodos de pago */
$routes->get('metodos_pago', 'MetodoPagoController::index');
$routes->post('agregar_metodo_pago', 'MetodoPagoController::agregar');
$routes->get('eliminar_metodo_pago', 'MetodoPagoController::eliminar');
$routes->get('buscar_metodo_pago', 'MetodoPagoController::buscar');
$routes->post('modificar_metodo_pago', 'MetodoPagoController::modificar');

/* Pagos */
$routes->get('pagos', 'PagoController::index');
$routes->post('agregar_pago', 'PagoController::agregar');
$routes->get('eliminar_pago', 'PagoController::eliminar');
$routes->get('buscar_pago', 'PagoController::buscar');
$routes->post('modificar_pago', 'PagoController::modificar');

/* Productos*/
$routes->get('productos', 'ProductoController::index');
$routes->post('agregar_producto', 'ProductoController::agregar');
$routes->get('eliminar_producto', 'ProductoController::eliminar');
$routes->get('buscar_producto', 'ProductoController::buscar');
$routes->post('modificar_producto', 'ProductoController::modificar');

/* Categorías */
$routes->get('categorias', 'CategoriaController::index');
$routes->post('agregar_categoria', 'CategoriaController::agregar');
$routes->get('eliminar_categoria', 'CategoriaController::eliminar');
$routes->get('buscar_categoria', 'CategoriaController::buscar');
$routes->post('modificar_categoria', 'CategoriaController::modificar');

/* Marcas*/
$routes->get('marcas', 'MarcaController::index');
$routes->post('agregar_marca', 'MarcaController::agregar');
$routes->get('eliminar_marca', 'MarcaController::eliminar');
$routes->get('buscar_marca', 'MarcaController::buscar');
$routes->post('modificar_marca', 'MarcaController::modificar');

/*Clientes Admin*/
$routes->get('admin/clientes', 'admin\AdminClientesController::index');
$routes->post('agregar_cliente', 'admin\AdminClientesController::agregar');
$routes->get('eliminar_cliente/(:num)', 'admin\AdminClientesController::eliminar/$1');
$routes->get('buscar_cliente/(:num)', 'admin\AdminClientesController::buscar/$1');
$routes->post('modificar_cliente', 'admin\AdminClientesController::modificar');

/*empleado Admin*/
$routes->get('admin/empleados', 'admin\AdminEmpleadosController::index');
$routes->post('agregar_empleado', 'admin\AdminEmpleadosController::agregar');
$routes->get('eliminar_empleado/(:num)', 'admin\AdminEmpleadosController::eliminar/$1');
$routes->get('buscar_empleado/(:num)', 'admin\AdminEmpleadosController::buscar/$1');
$routes->post('modificar_empleado', 'admin\AdminEmpleadosController::modificar');

/*productos Admin*/
$routes->get('ver_productos', 'admin\AdminProductosController::verProductos');
$routes->get('admin/productos', 'admin\AdminProductosController::index');
$routes->post('admin/agregar_producto', 'admin\AdminProductosController::agregar');
$routes->get('admin/eliminar_producto/(:num)', 'admin\AdminProductosController::eliminar/$1');
$routes->get('admin/buscar_producto/(:num)', 'admin\AdminProductosController::buscar/$1');
$routes->post('admin/modificar_producto', 'admin\AdminProductosController::modificar');

/*marcas Admin*/
$routes->get('ver_marcas', 'admin\AdminMarcasController::verMarcas');
$routes->get('admin/marcas', 'admin\AdminMarcasController::index');
$routes->post('admin/agregar_marca', 'admin\AdminMarcasController::agregar');
$routes->get('admin/eliminar_marca/(:num)', 'admin\AdminMarcasController::eliminar/$1');
$routes->get('admin/buscar_marca/(:num)', 'admin\AdminMarcasController::buscar/$1');
$routes->post('admin/modificar_marca', 'admin\AdminMarcasController::modificar');

/*categorias Admin*/
$routes->get('ver_categorias', 'admin\AdminCategoriasController::verCategorias'); 
$routes->get('admin/categorias', 'admin\AdminCategoriasController::index');
$routes->post('admin/agregar_categoria', 'admin\AdminCategoriasController::agregar');
$routes->get('admin/eliminar_categoria/(:num)', 'admin\AdminCategoriasController::eliminar/$1');
$routes->get('admin/buscar_categoria/(:num)', 'admin\AdminCategoriasController::buscar/$1');
$routes->post('admin/modificar_categoria', 'admin\AdminCategoriasController::modificar');

/*empleado panel*/
$routes->get('empleados', 'EmpleadoController::index');
$routes->get('empleado/verPedidos', 'EmpleadoController::verPedidos');
$routes->get('empleado/detallePedido/(:num)', 'EmpleadoController::detallePedido/$1');
$routes->get('pedidos_asignados', 'EmpleadoController::verAsignados');
$routes->post('asignar_a_mensajero', 'EmpleadoController::asignarAMensajero');
$routes->get('historial', 'EmpleadoController::historial');

$routes->post('asignar_pedido', 'EmpleadoController::asignar');
$routes->get('perfil', 'EmpleadoController::perfil');

/*estado*/
$routes->get('estados', 'EstadoController::index');
$routes->post('agregar_estado', 'EstadoController::agregar');
$routes->get('eliminar_estado', 'EstadoController::eliminar');
$routes->get('buscar_estado', 'EstadoController::buscar');
$routes->post('modificar_estado', 'EstadoController::modificar');

/*Pedidos*/
$routes->get('pedidos', 'PedidoController::index');
$routes->post('agregar_pedido', 'PedidoController::agregar');
$routes->get('eliminar_pedido', 'PedidoController::eliminar');
$routes->get('buscar_pedido', 'PedidoController::buscar');
$routes->post('modificar_pedido', 'PedidoController::modificar');

/*detalle pedidos*/
$routes->get('detalle_pedidos', 'DetallePedidoController::index');
$routes->post('agregar_detalle_pedido', 'DetallePedidoController::agregar');
$routes->get('eliminar_detalle_pedido', 'DetallePedidoController::eliminar');
$routes->get('buscar_detalle_pedido', 'DetallePedidoController::buscar');
$routes->post('modificar_detalle_pedido', 'DetallePedidoController::modificar');

//mensajeria 
$routes->get('mensajero_panel', 'MensajeriaController::index');
$routes->get('mensajeria/envios-asignados', 'MensajeriaController::enviosAsignados');
$routes->post('marcar_entregado', 'MensajeriaController::marcarEntregado');
$routes->get('pedidos_completados', 'MensajeriaController::pedidosCompletados');

/*Login*/
$routes->get('login_cliente', 'LoginClienteController::index');
$routes->post('login_cliente', 'LoginClienteController::login');
$routes->get('login_empleado', 'LoginEmpleadoController::index');
$routes->post('login_empleado', 'LoginEmpleadoController::loginempleado');
$routes->get('logout', 'LoginEmpleadoController::logout');

/*registro*/
$routes->get('registrar_cliente', 'RegistroController::index');
$routes->post('registrar_cliente', 'RegistroController::registrarCliente');

/*cambiar contraseña*/

$routes->get('ver-cambio-cliente', function () {
    return view('cambiar_contra_cliente');
});
$routes->get('ver-cambio-empleado', function () {
    return view('Cambiar_contra_empleado');
});


