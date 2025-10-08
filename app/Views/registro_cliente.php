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
    <title>Registro</title>

    <style>
    header {
        background: black;
        padding: 10px 20px;
        display: flex;
        align-items: center;
    }

    .logo {
        height: 50px;
    }


    .formulario-cuerpo {
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: calc(100vh - 60px);
    }

    form {
        background: #121111ff;
        padding: 20px;
        border-radius: 8px;
        width: 100%;
        max-width: 450px;
    }

    h2 {
        text-align: center;
        margin-bottom: 15px;
    }

    label {
        display: block;
        margin-top: 10px;
    }

    input,
    button {
        width: 100%;
        padding: 8px;
        margin-top: 5px;
        border: none;
        border-radius: 4px;
    }

    input {
        background: #333;
        color: white;
    }

    button {
        background: #007bff;
        color: white;
        margin-top: 15px;
    }
    </style>
</head>

<body>
    <header>
        <img src="<?= base_url('images/logo.png') ?>" alt="Logo de la empresa" class="logo">
        <h5>Prime Supplements</h5>
    </header>

    <?php if (session()->getFlashdata('error')): ?>
    <div class="alert alert-danger">
        <?= session()->getFlashdata('error') ?>
    </div>
    <?php endif; ?>

    <div class="formulario-cuerpo">
        <form method="post" action="<?=('registrar_cliente') ?>">
            <h2>Regístrate</h2>



            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" id="nombre" required />

            <label for="apellido">Apellido</label>
            <input type="text" name="apellido" id="apellido" required />

            <label for="fecha_nac">Fecha de Nacimiento</label>
            <input type="date" name="fecha_nac" id="fecha_nac" required />

            <label for="email_cliente">Email</label>
            <input type="email" name="email_cliente" id="email_cliente" required />

            <label for="contrasenia">Contraseña</label>
            <input type="password" name="contrasenia" id="contrasenia" required />

            <button type="submit">Registrarse</button>
        </form>
    </div>
</body>

</html>