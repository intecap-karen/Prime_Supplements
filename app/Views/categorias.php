<!DOCTYPE html>
<html lang="es" data-bs-theme="dark">
<head>
  <meta charset="UTF-8">
  <title>Categorías</title>
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
    <h2 class="mb-4 text-center">📂 Categorías de Suplementos</h2>

    <?php if (empty($categorias)): ?>
      <div class="alert alert-warning text-center">No hay categorías registradas.</div>
    <?php else: ?>
      <div class="row row-cols-1 row-cols-md-3 g-4">
        <?php foreach ($categorias as $cat): ?>
          <div class="col">
            <div class="card h-100 shadow-sm">
              <div class="card-body text-center">
                <h5 class="card-title"><?= htmlspecialchars($cat['categoria']) ?></h5>
                <a href="<?= base_url('productos?categoria_id=' . $cat['categoria_id']) ?>" class="btn btn-primary">🔍 Ver productos</a>
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
