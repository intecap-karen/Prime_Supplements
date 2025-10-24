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

    <title> Suplements Prime Empleados Panel </title>
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
        .profile-container {
            display: flex;
            flex-direction: row;
            margin-top: 40px;
            gap: 30px;
        }
        .profile-sidebar {
            width: 250px;
            text-align: center;
        }
        .profile-pic {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            object-fit: cover;
            border: 3px solid #0d6efd;
        }
        .profile-name {
            margin-top: 15px;
            font-weight: bold;
            font-size: 1.2rem;
        }
        .profile-form input {
            background-color: #f8f9fa;
            border: none;
        }
        .profile-form input:disabled {
            color: #495057;
        }
    </style>
</head>
<body class="container">

    <h2 class="mt-4">Mi Perfil</h2>

    <div class="profile-container">
        <!-- Barra lateral con foto y nombre -->
        <div class="profile-sidebar">
            <img src="<?= base_url('images/perfil.png') ?>" alt="Foto de perfil" class="profile-pic">
            <div class="profile-name"><?= session('nombre') . ' ' . session('apellido') ?></div>
        </div>

        <!-- Formulario de datos -->
        <div class="flex-grow-1">
            <form class="profile-form">
                <div class="mb-3">
                    <label class="form-label">Nombre completo</label>
                    <input type="text" class="form-control" value="<?= session('nombre') . ' ' . session('apellido') ?>" disabled>
                </div>
                <div class="mb-3">
                    <label class="form-label">DPI</label>
                    <input type="text" class="form-control" value="<?= session('dpi_empleado') ?>" disabled>
                </div>
                <div class="mb-3">
                    <label class="form-label">Correo electrónico</label>
                    <input type="email" class="form-control" value="<?= session('email') ?>" disabled>
                </div>
                <div class="mb-3">
                    <a href="<?= base_url('ver-cambio-empleado') ?>" class="btn btn-outline-primary">Cambiar contraseña</a>
                </div>
            </form>
        </div>
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
</body>
</html>
