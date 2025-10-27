<!DOCTYPE html>
<html lang="es" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('styles/style.css') ?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>Prime Suplements</title>
</head>

<body>
    <header>
        <nav>
            <img src="<?= base_url('images/logo.png') ?>" alt="Logo de la empresa" class="logo">
            Prime Supplements
            <div class="link-container">
                <a href="<?=base_url('admin/categorias')?>" class="header-links">Categorias</a>
                <a href="<?=base_url('admin/marcas')?>" class="header-links">Marcas</a>
                <a href="<?=base_url('admin/productos')?>" class="header-links">Productos</a>
                <a href="<?=base_url('admin/clientes')?>" class="header-links">Clientes</a>
                <a href="<?=base_url('admin/empleados')?>" class="header-links">Empleados</a>
            </div>
            <form method="get" action="" class="search-bar">
                <input type="text" class="form-control" placeholder="Buscar">
                <i class="bi bi-search"></i>
            </form>

            <div class="btn-group" role="group" aria-label="Default button group">
                <a type="button" class="btn btn-outline-primary" href="<?= base_url('carrito') ?>">
                    <i class="bi bi-basket3-fill"></i>
                </a>
                <a type="button" class="btn btn-outline-primary" href="<?= base_url('login') ?>">
                    <i class="bi bi-person-fill"></i>
                </a>
            </div>
        </nav>
        <div class="social-network-bar">
            Siguenos en nuestras redes sociales y forma parte de nuestra comunidad
            <div class="social-icon-container">
                <i class="bi bi-facebook"></i>
                <i class="bi bi-instagram"></i>
                <i class="bi bi-twitter-x"></i>
            </div>
        </div>
    </header>
    <main>
        <div class="text-center">
            <button type="button" class="btn btn-outline-light" data-bs-toggle="modal"
                data-bs-target="#agregar_marca">
                Agregar Marcas
            </button>
        </div>
        
        <div class="modal fade" id="agregar_marca" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Marca nueva</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="<?= base_url('admin/agregar_marca') ?>" method="post">
                            <label for="marca_id" class="for-label">Marca_id</label>
                            <input type="number" name="marca_id" id="marca_id" class="form-control" required>

                            <label for="marca_nombre" class="for-label">Nombre</label>
                            <input type="text" name="marca_nombre" id="marca_nombre" class="form-control" required>

                            <label for="descripcion" class="for-label">Descripción</label>
                            <input type="text" name="descripcion" id="descripcion" class="form-control" required>

                            <button type="submit" class="form-control btn btn-primary mt-2">Guardar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <br>
        <h1 class="text-center">Marcas</h1>
        <hr>

        <?php foreach ($datos as $marca): ?>
            <div class="container">
                <table class="table">
                    <thead>
                        <tr>
                            <th class="table-active"><?= esc($marca['marca_nombre']) ?></th>
                            <th class="table-active text-end">
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <a href="<?= base_url('admin/eliminar_marca/' . $marca['marca_id']) ?>"
                                        class="btn btn-outline-info">Eliminar</a>

                                    <a href="<?= base_url('admin/buscar_marca/' . $marca['marca_id']) ?>"
                                        class="btn btn-outline-info">Modificar</a>
                                </div>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><?= esc($marca['descripcion']) ?></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        <?php endforeach; ?>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.min.js"
        integrity="sha384-G/EV+4j2dNv+tEPo3++6LCgdCROaejBqfUeNjuKAiuXbjrxilcCdDz6ZAVfHWe1Y"
        crossorigin="anonymous"></script>
</body>

</html>
