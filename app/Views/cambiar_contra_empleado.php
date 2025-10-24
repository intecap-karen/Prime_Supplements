


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

    <title> Suplements Prime</title>
</head>

<body>
    <header>
        <nav>
            <img src="<?= base_url('images/logo.png') ?>" alt="Logo de la empresa" class="logo">
            <H5> Supplements Prime</H5>
        </nav>

    <div class="d-flex justify-content-end mt-3">
        <a href="<?= base_url('empleados') ?>" class="btn btn-danger fw-bold px-4 py-2 shadow-sm"
            onmousedown="this.style.boxShadow='0 0 10px rgba(255,255,255,0.3)'" onmouseup="this.style.boxShadow='none'">
            ← Volver
        </a>
    </div>
        <div>

<div class="container mt-5">
    <h2 class="text-center mb-4">Cambiar contraseña (Empleado)</h2>

    <form action="<?= base_url('empleados/actualizar-contrasena') ?>" method="post" class="mx-auto" style="max-width: 500px;">
        <div class="mb-3">
            <label for="actual" class="form-label">Contraseña actual</label>
            <input type="password" name="actual" id="actual" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="nueva" class="form-label">Nueva contraseña</label>
            <input type="password" name="nueva" id="nueva" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="confirmar" class="form-label">Confirmar nueva contraseña</label>
            <input type="password" name="confirmar" id="confirmar" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-success w-100 fw-bold">Actualizar contraseña</button>
    </form>
</div>



                <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
                    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
                    crossorigin="anonymous">
                </script>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.min.js"
                    integrity="sha384-G/EV+4j2dNv+tEPo3++6LCgdCROaejBqfUeNjuKAiuXbjrxilcCdDz6ZAVfHWe1Y"
                    crossorigin="anonymous">
                </script>
</body>

</html>