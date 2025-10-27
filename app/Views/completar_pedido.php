<!DOCTYPE html>
<html lang="es" data-bs-theme="dark">
<head>
  <meta charset="UTF-8">
  <title>Finalizar pedido | Prime Supplements</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?= base_url('assets/style.css') ?>">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
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
        <a href="<?= base_url('login_cliente') ?>" class="btn btn-outline-primary btn-sm">
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
    <h2 class="text-center mb-4">📦 Finalizar pedido</h2>

    <div class="row">
      <div class="col-md-6">
        <form method="POST" action="<?= base_url('pedido/crear') ?>">
          <div class="mb-3">
            <label for="nombre" class="form-label">Nombre completo</label>
            <input type="text" name="nombre" id="nombre" class="form-control" required>
          </div>

          <div class="mb-3">
            <label for="telefono" class="form-label">Teléfono</label>
            <input type="text" name="telefono" id="telefono" class="form-control" required placeholder="Ej. 5555-1234">
          </div>

          <div class="mb-3">
            <label for="direccion" class="form-label">Dirección de entrega</label>
            <input type="text" name="direccion" id="direccion" class="form-control" required>
          </div>

          <div class="mb-3">
            <label for="metodo_pago" class="form-label">Método de pago</label>
            <select name="metodo_pago" id="metodo_pago" class="form-select" required>
              <option value="efectivo">Pago contra entrega (Efectivo)</option>
              <option value="transferencia">Transferencia bancaria</option>
            </select>
          </div>

          <div class="mb-3">
            <label for="observaciones" class="form-label">Observaciones (opcional)</label>
            <textarea name="observaciones" id="observaciones" rows="3" class="form-control" placeholder="Ej. Instrucciones especiales, referencias, etc."></textarea>
          </div>

          <button type="submit" class="btn btn-primary w-100">🧾 Crear pedido</button>
        </form>
      </div>

      <div class="col-md-6">
        <div class="card bg-dark text-light shadow-sm">
          <div class="card-header bg-secondary text-dark fw-bold">
            🧮 Resumen del pedido
          </div>
          <div class="card-body">
            <?php $total = 0; ?>
            <?php foreach ($carrito as $item): ?>
              <?php $subtotal = $item['precio'] * $item['cantidad']; ?>
              <?php $total += $subtotal; ?>
              <div class="d-flex justify-content-between mb-2">
                <span><?= esc($item['nombre']) ?> x<?= esc($item['cantidad']) ?></span>
                <span>Q<?= number_format($subtotal, 2) ?></span>
              </div>
            <?php endforeach; ?>
            <hr>
            <div class="d-flex justify-content-between fw-bold">
              <span>Total:</span>
              <span>Q<?= number_format($total, 2) ?></span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.min.js"></script>
</body>
</html>
