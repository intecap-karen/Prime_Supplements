<!DOCTYPE html>
<html lang="es" data-bs-theme="dark">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Prime Supplements | Nosotros</title>
  <link rel="stylesheet" href="<?= base_url('assets/style.css') ?>">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
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
    <ul class="list-group">
      <li class="list-group-item list-group-item-success">
        <h1 class="text-center">Nosotros</h1>
      </li>
      <li class="list-group-item list-group-item-secondary">
        <p>En Prime Supplements creemos que cada persona puede alcanzar su mejor versión con disciplina, constancia y el apoyo de los suplementos adecuados.</p>
        <p>Somos una tienda dedicada a ofrecer productos 100% originales y de alta calidad, seleccionados especialmente para ayudarte a mejorar tu rendimiento, lograr tus objetivos deportivos y mantener un estilo de vida saludable.</p>
      </li>
      <li class="list-group-item list-group-item-success">
        <h3 class="text-center">Misión</h3>
      </li>
      <li class="list-group-item list-group-item-secondary">
        <p>Brindar a nuestros clientes suplementos confiables, efectivos y seguros, acompañados de un servicio cercano y personalizado.</p>
      </li>
      <li class="list-group-item list-group-item-success">
        <h3 class="text-center">Visión</h3>
      </li>
      <li class="list-group-item list-group-item-secondary">
        <p>Convertirnos en la tienda de suplementos deportivos líder en Guatemala, reconocida por la confianza, la innovación y la pasión por el deporte.</p>
      </li>
      <li class="list-group-item list-group-item-success">
        <h3 class="text-center">Valores</h3>
      </li>
      <li class="list-group-item list-group-item-secondary">
        <ul>
          <li>Calidad garantizada en cada producto.</li>
          <li>Transparencia y confianza con nuestros clientes.</li>
          <li>Pasión por el deporte y la vida saludable.</li>
          <li>Compromiso con tu bienestar y resultados.</li>
        </ul>
      </li>
      <li class="list-group-item list-group-item-success">
        <h3 class="text-center">¿Por qué elegirnos?</h3>
      </li>
      <li class="list-group-item list-group-item-secondary">
        <ul>
          <li>Productos auténticos y certificados.</li>
          <li>Asesoría personalizada según tus objetivos (ganar masa, definición o bienestar).</li>
          <li>Envíos rápidos y seguros a todo el país.</li>
          <li>Comunidad activa que comparte motivación y resultados.</li>
        </ul>
      </li>
    </ul>
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
