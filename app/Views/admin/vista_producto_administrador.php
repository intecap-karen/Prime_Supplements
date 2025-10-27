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
                <a href="<?=base_url('admin/categorias')?>" class="header-links">Categorias</a>
                <a href="<?=base_url('admin/marcas')?>" class="header-links">Marcas</a>
                <a href="<?=base_url('admin/productos')?>" class="header-links">Productos</a>
                <a href="<?=base_url('admin/clientes')?>" class="header-links">Clientes</a>
                <a href="<?=base_url('admin/empleados')?>" class="header-links">Empleados</a>
            </div>
            <form method="get" action="<?= base_url('buscar_producto') ?>" class="search-bar">
                <input type="text" class="form-control" placeholder="Buscar">
                <i class="bi bi-search"></i>
                </form>
                <div class="btn-group" role="group" aria-label="Default button group">
                    <a type="button" class="btn btn-outline-primary">
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


            </div>
        </div>
    </header>
    <hr>
    <main>
        <div class="text-center">
            <button type="button" class="btn btn-outline-light" data-bs-toggle="modal"
                data-bs-target="#agregar_producto">
                Agregar producto
            </button>
        </div>
        </div>
        <div class="container">
            <h1 class="main-title">Productos</h1>
        </div>

        <div class="product-container d-flex flex-wrap gap-3">
            <?php foreach ($datos as $producto): ?>
                <div class="card product-card" style="width: 18rem;">
                    <img src="<?= $producto['imagen_producto'] ?>" class="card-img-top product-image"
                        alt="Imagen del producto">

                    <div class="card-body">
                        <h5 class="card-title product-name"><?= $producto['nombre'] ?></h5>
                        <p class="card-text product-description"><?= $producto['descripcion'] ?></p>
                        <p class="product-price">$<?= $producto['precio'] ?></p>
                        <div class="container">
                            <div class="modal fade" id="agregar_producto" tabindex="-1" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Producto nuevo</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="<?= base_url('admin/agregar_producto') ?>" method="post">
                                                <label for="producto_id" class="for-label">Producto_id</label>
                                                <input type="text" name="producto_id" id="producto_id" class="form-control">
                                                <label for="nombre" class="for-label">nombre</label>
                                                <input type="text" name="nombre" id="nombre" class="form-control">
                                                <label for="marca_id" class="for-label">marca_id</label>
                                                <input type="number" name="marca_id" id="marca_id" class="form-control">
                                                <label for="descripcion" class="for-label">descripcion</label>
                                                <input type="text" name="descripcion" id="descripcion" class="form-control">
                                                <label for="precio" class="for-label">precio</label>
                                                <input type="number" name="precio" id="precio" class="form-control">
                                                <label for="categoria_id" class="for-label">categoria_id</label>
                                                <input type="number" name="categoria_id" id="categoria_id"
                                                    class="form-control">
                                                <button type="submit" class="form-control btn btn-primary">Guardar</button>
                                            </form>
                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <a href="<?= base_url('admin/eliminar_producto/' . $producto['producto_id']) ?>"
                                class="btn btn-outline-info">Eliminar</a>

                            <a href="<?= base_url('admin/buscar_producto/' . $producto['producto_id']) ?>"
                                class="btn btn-outline-info">Modificar</a>
                        </div>

                    </div>
                </div>
            <?php endforeach; ?>


        </div>
    </main>
</body>

</html>