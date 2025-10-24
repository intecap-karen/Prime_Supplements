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

      
<div class="container mt-5">
    <h3 class="mb-4 text-center">Envíos Finalizados</h3>

    <div class="table-responsive">
        <table class="table table-bordered text-center align-middle">
            <thead class="table-success">
                <tr>
                    <th>Cliente</th>
                    <th>Dirección</th>
                    <th>Teléfono</th>
                    <th>Total</th>
                    <th>Observaciones</th>
                    <th>Estado</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($pedidosFinalizados)): ?>
                    <?php foreach ($pedidosFinalizados as $pedido): ?>
                        <tr>
                            <td><?= esc($pedido['nombre']) ?></td>
                            <td><?= esc($pedido['direccion_entrega']) ?></td>
                            <td><?= esc($pedido['telefono']) ?></td>
                            <td> Q <?= number_format($pedido['total_calculado'], 2) ?></td>
                            <td><?= esc($pedido['observaciones']) ?></td>
                            <td><span class="badge bg-success">Entregado con éxito al cliente</span></td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="6">No hay envíos finalizados aún.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>





    <div class="d-flex justify-content-end mt-3">
        <a href="<?= base_url('empleados') ?>" class="btn btn-outline-light fw-bold px-4 py-2 shadow-sm"
            onmousedown="this.style.boxShadow='0 0 10px rgba(255,255,255,0.3)'" onmouseup="this.style.boxShadow='none'">
            ← Volver
        </a>
    </div>













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