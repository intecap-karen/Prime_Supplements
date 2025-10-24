<!DOCTYPE html>
<html lang="es" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('styles/style.css') ?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <title> Suplements Prime Mensajeria Panel </title>
</head>

<body>

    <?php // Leer datos
    $id_empleado = session()->get('dpi_empleado');


    // Verificar si existe
    if (!session()->has('dpi_empleado')) {
        // hacer algo
        header('Location:' . base_url("/login_empleado"));
        exit;
    } else {
        $email = session()->get('email');
        $nombre = session()->get('nombre');
        $apellido = session()->get('apellido');


        ?>

    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-black">
            <div class="w-100 d-flex justify-content-between align-items-center px-0">

                <div class="d-flex align-items-center ms-0">
                    <img src="<?= base_url('images/logo.png') ?>" alt="Logo de la empresa" class="logo me-2"
                        style="height:50px;">
                    <h5 class="mb-0">Supplements Prime</h5>
                </div>

                <!-- Derecha: Saludo -->
                <div class="me-3">
                    <span class="fw-bold">
                        Hola, <?= esc($nombre) . ' ' . esc($apellido) ?>
                    </span>
                </div>
            </div>
        </nav>
    </header>


    <style>
    body {
        overflow-x: hidden;
    }

    .sidebar {
        height: 100vh;
        background-color: #334252ff;
        color: white;
    }

    .sidebar a {
        color: white;
        text-decoration: none;
        display: block;
        padding: 10px 20px;
    }

    .sidebar a:hover {
        background-color: #55708bff;
    }

    .card-box {
        min-height: 100px;
    }
    </style>
    </head>

    <body>

        <div class="container-fluid">
            <div class="row">
                <!-- Barra lateral -->
                <div class="col-md-3 col-lg-2 sidebar d-flex flex-column">
                    <h4 class="text-center py-3">Menú</h4>
                
                   <a href="<?= base_url('pedidos_completados') ?>">Mi Historial</a>
                       <a href="<?= base_url('perfil') ?>">Mi perfil</a>
                    <a href="<?= base_url('logout') ?>">Cerrar sesión</a>
                </div>


                <div class="col-md-9 col-lg-10 p-4">
                    <h2>Panel de Control</h2>

                    <!-- Cuadros del panel con sus opciones -->
                 


         <body>
    <div class="container mt-5">
        <h2 class="text-center mb-4">Resumen de Envíos</h2>

      <div class="row justify-content-center">
    <!-- Card: Envíos asignados (estado 3) -->
    <div class="col-md-5 mb-4">
        <a href="<?= base_url('mensajeria/envios-asignados') ?>" style="text-decoration: none;">
            <div class="card text-white bg-primary shadow">
                <div class="card-header fw-bold">Envíos asignados</div>
                <div class="card-body text-center">
                    <h5 class="card-title">Total en camino</h5>
                    <p class="card-text display-6"><?= esc($totalEnCamino) ?></p>
                </div>
            </div>
        </a>
    </div>

    <!-- Card: Envíos finalizados (estado 5) -->
    <div class="col-md-5 mb-4">
        <a href="<?= base_url('pedidos_completados') ?>" style="text-decoration: none;">
            <div class="card text-white bg-success shadow">
                <div class="card-header fw-bold">Envíos finalizados</div>
                <div class="card-body text-center">
                    <h5 class="card-title">Total entregado</h5>
                    <p class="card-text display-6"><?= esc($totalFinalizado) ?></p>
                </div>
            </div>
        </a>
    </div>
</div>





        <div class="d-flex justify-content-end">
            <a href="<?= base_url('empleados') ?>" class="btn btn-outline-dark fw-bold px-4 py-2 shadow-sm">
                ← Volver
            </a>
        </div>
    </div>

            <!-- Contenido del panel  -->





























        </div>
        </div>
        </div>
        <?php
    } // Cierre del else de la verificacion de session
    ?>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js">
        </script>
    </body>

</html>