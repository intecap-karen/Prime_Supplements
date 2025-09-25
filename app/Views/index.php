<!DOCTYPE html>
<html lang="es" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=base_url('styles/style.css') ?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>Prime Suplements</title>
</head>

<body>
    <header>
        <nav>
            <div class="link-container">
                <a href="<?=base_url('/')?>" class="header-links">Inicio</a>
                <a href="<?=base_url('productos')?>" class="header-links">Productos</a>
                <a href="<?=base_url('nosotros')?>" class="header-links">Nosotros</a>
                <a href="<?=base_url('contactos')?>" class="header-links">Contacto</a>
            </div>
            <div class="search-bar">
                <div class="btn-group" role="group" aria-label="Default button group">
                    <button type="button" class="btn btn-outline-primary">
                        <i class="bi bi-basket3-fill"></i>
                    </button>
                    <button type="button" class="btn btn-outline-primary">
                        <i class="bi bi-box-arrow-in-right"></i>
                    </button>
                </div>
                <input type="text" class="form-control" placeholder="Buscar">
                <i class="bi bi-search"></i>

            </div>
        </nav>
    </header>
    <main>
        <div id="carouselExampleRide" class="carousel slide" data-bs-ride="true">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="<?=base_url('images/prueba.jpg')?>" class="d-block w-100" alt="..."
                        style="width: 200px; height: 600px; object-fit: cover; position: center;">
                </div>
                <div class="carousel-item">
                    <img src="<?=base_url('images/prueba0000.png')?>" class="d-block w-100" alt="..."
                        style="width: 200px; height: 600px; object-fit: cover; position: center;">
                </div>
                <div class="carousel-item">
                    <img src="<?=base_url('images/prueba0001.jpg')?>" class="d-block w-100" alt="..."
                        style="width: 200px; height: 600px; object-fit: cover; position: center;">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleRide"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleRide"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <hr>

    </main>
    <div class="card" style="width: 18rem;">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card’s
                content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.min.js"
        integrity="sha384-G/EV+4j2dNv+tEPo3++6LCgdCROaejBqfUeNjuKAiuXbjrxilcCdDz6ZAVfHWe1Y" crossorigin="anonymous">
    </script>
</body>

</html>