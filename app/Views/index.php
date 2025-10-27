<!DOCTYPE html>
<html lang="es" data-bs-theme="dark">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?= base_url('assets/style.css') ?>">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  <title>Prime Supplements | Suplementos Deportivos</title>
  <style>
    .bg-social-red {
      background-color: #dc3545;
      color: white;
    }
    .bg-social-red a {
      text-decoration: none;
      color: white;
    }
    .bg-social-red a:hover {
      color: #ffc107;
    }
  </style>
</head>

<body>
  <header class="bg-dark text-light py-3 shadow-sm">
    <div class="container-fluid d-flex justify-content-between align-items-center">
      <div class="d-flex align-items-center">
        <a href="<?= base_url('/') ?>" class="me-3">
          <img src="<?= base_url('images/logo.png') ?>" alt="Logo Prime Supplements" style="height: 50px;">
        </a>
        <h1 class="h4 mb-0 fw-bold">Prime Supplements</h1>
      </div>

      <nav class="d-none d-md-flex gap-4">
        <a href="<?= base_url('categorias') ?>" class="text-light text-decoration-none">Categorías</a>
        <a href="<?= base_url('productos') ?>" class="text-light text-decoration-none">Productos</a>
        <a href="<?= base_url('nosotros') ?>" class="text-light text-decoration-none">Nosotros</a>
      </nav>

      <div class="d-flex align-items-center gap-3">
        <form class="d-flex" action="<?= base_url('buscar') ?>" method="GET">
          <input type="text" name="q" class="form-control form-control-sm me-2" placeholder="Buscar...">
          <button type="submit" class="btn btn-outline-light btn-sm">
            <i class="bi bi-search"></i>
          </button>
        </form>

        <a href="<?= base_url('carrito') ?>" class="btn btn-outline-primary btn-sm">
          <i class="bi bi-basket3-fill"></i>
        </a>
        


<?php if (session()->get('cliente_id')): ?>
  <div class="dropdown">
    <button class="btn btn-outline-light btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
      <i class="bi bi-person-fill"></i>
    </button>
    <ul class="dropdown-menu dropdown-menu-end">
      <li class="dropdown-header">👤 <?= esc(session()->get('nombre')) ?></li>
      <li><hr class="dropdown-divider"></li>
      <li><a class="dropdown-item text-danger" href="<?= base_url('logout_cliente') ?>">Cerrar sesión</a></li>
    </ul>
  </div>
<?php else: ?>
  <a href="<?= base_url('login_cliente') ?>" class="btn btn-outline-light btn-sm" title="Iniciar sesión">
    <i class="bi bi-person-fill"></i>
  </a>
<?php endif; ?>






      </div>
    </div>

    <div class="bg-social-red text-center py-2 small">
      Síguenos en nuestras redes sociales y forma parte de nuestra comunidad
      <span class="ms-3">
        <a href="https://www.facebook.com/tuperfil" target="_blank" class="text-white me-2">
          <i class="bi bi-facebook"></i>
        </a>
        <a href="https://www.instagram.com/tuperfil" target="_blank" class="text-white me-2">
          <i class="bi bi-instagram"></i>
        </a>
        <a href="https://twitter.com/tuperfil" target="_blank" class="text-white">
          <i class="bi bi-twitter-x"></i>
        </a>
      </span>
    </div>
  </header>

  <main class="container-fluid">
    <div id="carouselExampleRide" class="carousel slide" data-bs-ride="true">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="<?= base_url('images/promocionlogo.jpeg') ?>" class="d-block w-100" alt="Promoción 1"
               style="width: 200px; height: 600px; object-fit: cover; position: center;">
        </div>
        <div class="carousel-item">
          <img src="<?= base_url('images/promocion2.jpeg') ?>" class="d-block w-100" alt="Promoción 2"
               style="width: 200px; height: 600px; object-fit: cover; position: center;">
        </div>
        <div class="carousel-item">
          <img src="<?= base_url('images/promocion3.jpeg') ?>" class="d-block w-100" alt="Promoción 3"
               style="width: 200px; height: 600px; object-fit: cover; position: center;">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Anterior</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Siguiente</span>
      </button>
    </div>

    <hr>
    <h2 class="text-center my-4">🔥 Nuestros Productos Destacados 🔥</h2>

<div class="row row-cols-1 row-cols-md-3 g-4" id="products-container">
  <?php foreach ($productos as $producto): ?>
    <div class="col">
      <div class="card h-100">
        <img src="<?= htmlspecialchars($producto['imagen_producto']) ?>" class="card-img-top" alt="<?= htmlspecialchars($producto['nombre']) ?>">
        <div class="card-body">
          <h5 class="card-title"><?= htmlspecialchars($producto['nombre']) ?></h5>
          <p class="card-text"><?= htmlspecialchars($producto['descripcion']) ?></p>
          <p><strong>Precio:</strong> Q<?= number_format($producto['precio'], 2) ?></p>
          <p><strong>Contenido:</strong> <?= htmlspecialchars($producto['cantidad_peso']) ?></p>

          <form method="POST" action="<?= base_url('carrito/agregar') ?>">
            <input type="hidden" name="producto_id" value="<?= $producto['producto_id'] ?>">
            <input type="number" name="cantidad" value="1" min="1" class="form-control mb-2">
            <button type="submit" class="btn btn-success w-100">🛒 Agregar al carrito</button>
          </form>

          <a href="<?= base_url('producto/' . $producto['producto_id']) ?>" class="btn btn-outline-light btn-sm mt-2">🔍 Ver más</a>
        </div>
      </div>
    </div>
  <?php endforeach; ?>
</div>
</main>


  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
          integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.min.js"
          integrity="sha384-G/EV+4j2dNv+tEPo3++6LCgdCROaejBqfUeNjuKAiuXbjrxilcCdDz6ZAVfHWe1Y" crossorigin="anonymous"></script>
</body>
</html>
