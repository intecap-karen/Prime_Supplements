<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('inicio', 'Home::categorias');
$routes->get('inicio', 'Home::marcas');
$routes->get('inicio', 'Home::productos');
$routes->get('inicio', 'Home::nosotros');
$routes->get('inicio', 'Home::carrito');
$routes->get('inicio', 'Productos::descripcion/$1');
$routes->get('inicio', 'Home::reseñas');
$routes->get('inicio', 'Home::facturacion');
$routes->get('inicio', 'Home::pedidos');
$routes->get('inicio', 'Home::login');
$routes->get('inicio', 'Home::usuario');
$routes->get('inicio', 'Home::mensajeria');
$routes->get('inicio', 'administrador::inicio/$1');
$routes->get('inicio', 'control::inicio/$1');
$routes->get('inicio', 'Home::pedido_realizado');
$routes->get('inicio', 'Home::mensajero');
$routes->get('inicio', 'Home::envios');
$routes->get('inicio', 'Home::especificacion');
$routes->get('inicio', 'Home::estado_envio');
$routes->get('inicio', 'Home::confirmacion');