<!DOCTYPE html>
<html lang="es" data-bs-theme="dark">
<!--Esta parte del proyecto fue creada por Dante Sánchez-->
<!--El motivo de esto es concientizar al resto del grupo a ser mas colaborativo-->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.min.js"
    integrity="sha384-G/EV+4j2dNv+tEPo3++6LCgdCROaejBqfUeNjuKAiuXbjrxilcCdDz6ZAVfHWe1Y" crossorigin="anonymous">
</script>

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
                <a href="<?=base_url('categorias')?>" class="header-links">Categorias</a>
                <a href="<?=base_url('marcas')?>" class="header-links">Marcas</a>
                <a href="<?=base_url('productos')?>" class="header-links">Productos</a>
                <a href="<?=base_url('admin/clientes')?>" class="header-links">Clientes</a>
                <a href="<?=base_url('admin/empleados')?>" class="header-links">Empleados</a>
            </div>
            <<form method="get" action="<?= base_url('buscar_producto') ?>" class="search-bar">
                <input type="text" class="form-control" placeholder="Buscar">
                <i class="bi bi-search"></i>
                </form>
                <div class="btn-group" role="group" aria-label="Default button group">
                    <a type="button" class="btn btn-outline-primary">
                        <i class="bi bi-basket3-fill"></i>
                    </a>
                    <a type="button" class="btn btn-outline-primary" href="<?= base_url('login') ?>">
                        <i class="bi bi-person-fill"></i></i>
                    </a>
                </div>
        </nav>
        <div class="social-network-bar">
            Siguenos en nuestras redes sociales y forma parte de nuestra comunidad
            <div class="social-icon-container">


            </div>
        </div>
    </header>
    <hr>
    <main>
        <div class="text-center">
            <button type="button" class="btn btn-outline-light" data-bs-toggle="modal"
                data-bs-target="#agregar_categoria">
                agregar categoria
            </button>
        </div>
        </div>
        <div class="container">
            <h1 class="main-title">Categoria</h1>
        </div>

        <div class="product-container d-flex flex-wrap gap-3">
            <?php foreach ($categorias as $datos): ?>
                <div class="card product-card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title product-name"><?= $datos['categoria_id'] ?></h5>
                        <p class="card-text product-description"><?= $datos['categoria'] ?></p>
                        <div class="container">
                            <div class="modal fade" id="agregar_categoria" tabindex="-1" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Categoria Nueva</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="<?= base_url('agregar_categoria') ?>" method="post">
                                                <label for="categoria_id" class="for-label">categoria_id</label>
                                                <input type="text" name="categoria_id" id="categoria_id" class="form-control">
                                                <label for="nombre" class="for-label">categoria</label>
                                                <input type="text" name="categoria" id="categoria" class="form-control">
                                                <button type="submit" class="form-control btn btn-primary">Guardar</button>
                                            </form>
                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <a href="<?= base_url('eliminar_categoria/' . $datos['categoria_id']) ?>"
                                class="btn btn-outline-info">Eliminar</a>

                            <a href="<?= base_url('buscar_categoria/' . $datos['categoria_id']) ?>"
                                class="btn btn-outline-info">Modificar</a>
                        </div>

                    </div>
                </div>
            <?php endforeach; ?>


        </div>
    </main>
</body>

</html>