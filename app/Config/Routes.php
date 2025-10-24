<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('categorias', 'Home::categorias');

/*estado*/
$routes->get('estados', 'EstadoController::index');
$routes->post('agregar_estado', 'EstadoController::agregar');
$routes->get('eliminar_estado', 'EstadoController::eliminar');
$routes->get('buscar_estado', 'EstadoController::buscar');
$routes->post('modificar_estado', 'EstadoController::modificar');

/*Clientes*/
$routes->get('clientes', 'AdminClientesController::index');
$routes->post('agregar_cliente', 'AdminClientesController::agregar');
$routes->get('eliminar_cliente/(:num)', 'AdminClientesController::eliminar/$1');
$routes->get('buscar_cliente/(:num)', 'AdminClientesController::buscar/$1');
$routes->post('modificar_cliente', 'AdminClientesController::modificar');


/*metodo_pago*/
$routes->get('metodos_pago', 'MetodoPagoController::index');
$routes->post('agregar_metodo_pago', 'MetodoPagoController::agregar');
$routes->get('eliminar_metodo_pago', 'MetodoPagoController::eliminar');
$routes->get('buscar_metodo_pago', 'MetodoPagoController::buscar');
$routes->post('modificar_metodo_pago', 'MetodoPagoController::modificar');

/*pagos*/
$routes->get('pagos', 'PagoController::index');
$routes->post('agregar_pago', 'PagoController::agregar');
$routes->get('eliminar_pago', 'PagoController::eliminar');
$routes->get('buscar_pago', 'PagoController::buscar');
$routes->post('modificar_pago', 'PagoController::modificar');

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

/*productos*/
$routes->get('productos', 'ProductoController::index');
$routes->post('agregar_producto', 'ProductoController::agregar');
$routes->get('eliminar_producto', 'ProductoController::eliminar');
$routes->get('buscar_producto', 'ProductoController::buscar');
$routes->post('modificar_producto', 'ProductoController::modificar');

/*empleado*/
$routes->get('empleados', 'AdminEmpleadosController::index');
$routes->post('agregar_empleado', 'AdminEmpleadosController::agregar');
$routes->get('eliminar_empleado', 'AdminEmpleadosController::eliminar/$1');
$routes->get('buscar_empleado', 'AdminEmpleadosController::buscar');
$routes->post('modificar_empleado', 'AdminEmpleadosController::modificar');

$routes->get('empleado/verPedidos', 'EmpleadoController::verPedidos');
$routes->get('empleado/detallePedido/(:num)', 'EmpleadoController::detallePedido/$1');
$routes->get('pedidos_asignados', 'EmpleadoController::verAsignados');
$routes->post('asignar_a_mensajero', 'EmpleadoController::asignarAMensajero');
$routes->get('historial', 'EmpleadoController::historial');

$routes->post('asignar_pedido', 'EmpleadoController::asignar');
$routes->get('perfil', 'EmpleadoController::perfil');

//mensajeria 

$routes->get('mensajero_panel', 'MensajeriaController::index');
$routes->get('mensajeria/envios-asignados', 'MensajeriaController::enviosAsignados');
$routes->post('marcar_entregado', 'MensajeriaController::marcarEntregado');
$routes->get('pedidos_completados', 'MensajeriaController::pedidosCompletados');











/*marcas*/
$routes->get('marcas', 'MarcaController::index');
$routes->post('agregar_marca', 'MarcaController::agregar');
$routes->get('eliminar_marca', 'MarcaController::eliminar');
$routes->get('buscar_marca', 'MarcaController::buscar');
$routes->post('modificar_marca', 'MarcaController::modificar');

/*categorias*/
$routes->get('categorias', 'CategoriaController::index');
$routes->post('agregar_categoria', 'CategoriaController::agregar');
$routes->get('eliminar_categoria', 'CategoriaController::eliminar');
$routes->get('buscar_categoria', 'CategoriaController::buscar');
$routes->post('modificar_categoria', 'CategoriaController::modificar');

/*roles*/
$routes->get('roles', 'RolController::index');
$routes->post('agregar_rol', 'RolController::agregar');
$routes->get('eliminar_rol', 'RolController::eliminar');
$routes->get('buscar_rol', 'RolController::buscar');
$routes->post('modificar_rol', 'RolController::modificar');


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
