<!DOCTYPE html>
<html lang="es" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('styles/style.css') ?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>Categorias | Prime Suplements</title>
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
            <div class="search-bar">
                <input type="text" class="form-control" placeholder="Buscar">
                <i class="bi bi-search"></i>
            </div>
            <div class="btn-group" role="group" aria-label="Default button group">
                <button type="button" class="btn btn-outline-primary">
                    <i class="bi bi-basket3-fill"></i>
                </button>
                <button type="button" class="btn btn-outline-primary">
                    <i class="bi bi-person-fill"></i></i>
                </button>
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
        <div class="container mt-5">
            <div class="row">
                <div class="col-4 offset-4">
                    <h1>Modificar Categoria</h1>
                    <form action="<?= base_url('modificar_categoria') ?>" method="post">
                        <input type="hidden" name="categoria" value="<?= esc($datos['cat_productos']) ?>">
                        <label for="numbre" name="marca_id" class="form-label">Marca</label>

                        <label for="categoria_id" class="form-label">categoria_id</label>
                        <input type="numbre" name="categoria_id" id="categoria_id" class="form-control" value="<?= esc($datos['categoria_id']) ?>" required>

                        <label for="descripcion" class="form-label">categoria</label>
                        <input type="text" name="categoria" id="categoria" class="form-control" value="<?= esc($datos['categoria_id']) ?>" required>

                        <button type="submit" class="form-control btn btn-secondary mt-3">Modificar Categoria</button>
                    </form>
            </div>
        </div>
    </main>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.min.js"
        integrity="sha384-G/EV+4j2dNv+tEPo3++6LCgdCROaejBqfUeNjuKAiuXbjrxilcCdDz6ZAVfHWe1Y" crossorigin="anonymous">
    </script>
</body>

</html>