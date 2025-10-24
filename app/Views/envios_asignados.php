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

    <style>
        .card-title {
            font-size: 1.2rem;
        }
        .card-text {
            font-size: 1.5rem;
            font-weight: bold;
        }
        th {
            background-color: #b0b0b0;
            color: #212529;
            text-align: center;
            vertical-align: middle;
            font-weight: 700;
            letter-spacing: 0.5px;
        }
    </style>
</head>
<body>
    
    <div class="container mt-5">
        <h2 class="text-center mb-4">Envíos asignados</h2>


        <!-- Tabla de pedidos asignados -->
        <div class="table-responsive mt-4">
            <table class="table table-bordered text-center align-middle">
                <thead>
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
                    <?php foreach ($pedidosAsignados as $pedido): ?>
                        <tr>
                           <td><?= esc($pedido['nombre']) ?></td>

                            <td><?= esc($pedido['direccion_entrega']) ?></td>
                            <td><?= esc($pedido['telefono']) ?></td>
                            <td> Q <?= number_format($pedido['total_calculado'], 2) ?></td>
                            <td><?= esc($pedido['observaciones']) ?></td>
                           <td>
                           <form action="<?= base_url('marcar_entregado') ?>" method="post">
                           <input type="hidden" name="pedido_id" value="<?= esc($pedido['pedido_id']) ?>">
                            <button type="submit" class="btn btn-success btn-sm">Marcar como Entregado</button>
                            </form>
</td>

                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            
        </div>



        </div>
        </div>
        </div>
       
                 <!-- Botón de volver -->
        <div class="d-flex justify-content-end mt-3">
            <a href="<?= base_url('mensajero_panel') ?>" class="btn btn-danger fw-bold px-4 py-2 shadow-sm">
                ← Volver
            </a>
        </div>
    </div>
        <?php
    } // Cierre del else de la verificacion de session
    ?>

    
 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
