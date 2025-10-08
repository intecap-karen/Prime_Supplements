<!DOCTYPE html>
<html lang="es" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('styles/style.css') ?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <title>Prime Suplements Empleados</title>
</head>

<body>
    <header>
        <nav>
            <img src="<?= base_url('images/logo.png') ?>" alt="Logo de la empresa" class="logo">
            <H5> Supplements Prime</H5>
        </nav>


        <div>



            <div class="container mt-5">
                <div class="row justify-content-center">
                    <div class="col-md-4 text-center">


                        <img src="<?= base_url('images/empleado.jpeg') ?>" alt="Logo empleado" class="img-fluid mb-3"
                            style="max-height: 300px;">

                        <h3 class="mb-4">Iniciar Sesión</h3>

                        <form method="post" action="login_empleado">
                            <!--log in del controlador / aca  se coloca la funcion del controlador para el login-->


                            <div class="mb-3 text-start">
                                <label>Email</label>
                                <br>
                                <input type="email" name="email" class="form-control">
                            </div>
                            <div class="mb-3 text-start">
                                <label>Contraseña</label>
                                <input type="password" name="password" class="form-control">
                            </div>
                            <button type="submit" class="btn btn-danger w-100 rounded-pill">Ingresar</button>



                        </form>

                    </div>
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