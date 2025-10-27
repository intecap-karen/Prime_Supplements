<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');


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
$routes->get('ver_productos', 'admin\ProductoController::verProductos');
$routes->get('productos', 'admin\ProductoController::index');
$routes->post('agregar_producto', 'admin\ProductoController::agregar');
$routes->get('eliminar_producto/(:num)', 'admin\ProductoController::eliminar/$1');
$routes->get('buscar_producto/(:num)', 'admin\ProductoController::buscar/$1');
$routes->post('modificar_producto', 'admin\ProductoController::modificar');

/*marcas Admin*/
$routes->get('ver_marcas', 'admin\MarcaController::verMarcas');
$routes->get('marcas', 'admin\MarcaController::index');
$routes->post('agregar_marca', 'admin\MarcaController::agregar');
$routes->get('eliminar_marca/(:num)', 'admin\MarcaController::eliminar/$1');
$routes->get('buscar_marca/(:num)', 'admin\MarcaController::buscar/$1');
$routes->post('modificar_marca', 'admin\MarcaController::modificar');

/*categorias Admin*/
$routes->get('ver_categorias', 'admin\CategoriasController::verCategorias'); 
$routes->get('categorias', 'admin\CategoriasController::index');
$routes->post('agregar_categoria', 'admin\CategoriasController::agregar');
$routes->get('eliminar_categoria/(:num)', 'admin\CategoriasController::eliminar/$1');
$routes->get('buscar_categoria/(:num)', 'admin\CategoriasController::buscar/$1');
$routes->post('modificar_categoria', 'admin\CategoriasController::modificar');

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


