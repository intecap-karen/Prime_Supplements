<!DOCTYPE html>
<html lang="es" data-bs-theme="dark">
<head>
  <meta charset="UTF-8">
  <title>Productos</title>
  <link rel="stylesheet" href="<?= base_url('assets/style.css') ?>">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
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
        <a href="<?= base_url('dashboard') ?>" class="btn btn-outline-primary btn-sm">
          <i class="bi bi-person-fill"></i>
        </a>
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

  <main class="container my-5">
    <h2 class="mb-4 text-center">🧪 Productos <?= $categoria_id ? 'de la categoría seleccionada' : 'disponibles' ?></h2>

    <?php if (empty($productos)): ?>
      <div class="alert alert-warning text-center">No hay productos disponibles en esta categoría.</div>
    <?php else: ?>
      <div class="row row-cols-1 row-cols-md-3 g-4">
        <?php foreach ($productos as $prod): ?>
          <div class="col">
            <div class="card h-100 shadow-sm">
              <img src="<?= htmlspecialchars($prod['imagen_producto']) ?>" class="card-img-top" alt="Imagen del producto">
              <div class="card-body text-center">
                <h5 class="card-title"><?= htmlspecialchars($prod['nombre']) ?></h5>
                <p class="card-text">💲 <?= number_format($prod['precio'], 2) ?> GTQ</p>
                <p class="card-text">🧬 <?= htmlspecialchars($prod['descripcion']) ?></p>
                <form method="POST" action="<?= base_url('carrito/agregar') ?>">
                  <input type="hidden" name="producto_id" value="<?= $prod['producto_id'] ?>">
                  <input type="number" name="cantidad" value="1" min="1" class="form-control mb-2">
                  <button type="submit" class="btn btn-success w-100">🛒 Agregar al carrito</button>
                </form>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    <?php endif; ?>
  </main>

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

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.min.js"></script>
</body>
</html>
