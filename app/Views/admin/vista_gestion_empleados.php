<!DOCTYPE html>
<html lang="es" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=base_url('styles/style.css') ?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>Empleados | Prime Suplements</title>
</head>

<body>
    <!-- Header con barra de navegación y redes sociales -->
    <header>
        <nav>
            <img src="<?=base_url('images/logo.png')?>" alt="Logo de la empresa" class="logo">
            Prime Supplements
            <div class="link-container">
                <a href="<?=base_url('admin/categorias')?>" class="header-links">Categorias</a>
                <a href="<?=base_url('admin/marcas')?>" class="header-links">Marcas</a>
                <a href="<?=base_url('admin/productos')?>" class="header-links">Productos</a>
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
    <!-- Main con contenido principal -->
    <main>
        <div class="container mt-4">
            <h1 class="mb-4">Gestión de Empleados</h1>
            <div class="mb-3">

                <!-- Button trigger modal -->
                <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Agregar Empleado
                </button>
                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Nuevo Empleado</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <!-- Formulario para agregar empleados -->
                                <form action="<?= base_url('agregar_empleado') ?>" method="post" id="formEmpleado">
                                    <label for="dpi_empleado" class="form-label">DPI Empleado</label>
                                    <input type="number" name="dpi_empleado" id="dpi_empleado" class="form-control">

                                    <label for="pwd_empleado" class="form-label">Contraseña</label>
                                    <input type="password" name="pwd_empleado" id="pwd_empleado" class="form-control">

                                    <label for="txt_email" class="form-label">Correo Electrónico</label>
                                    <input type="email" name="txt_email" id="txt_email" class="form-control">

                                    <label for="txt_nombre" class="form-label">Nombre</label>
                                    <input type="text" name="txt_nombre" id="txt_nombre" class="form-control">

                                    <label for="txt_apellido" class="form-label">Apellido</label>
                                    <input type="text" name="txt_apellido" id="txt_apellido" class="form-control">

                                    <label for="rol_id" class="form-label">Rol ID</label>
                                    <input type="number" name="rol_id" id="rol_id" class="form-control">

                                    <button type="submit"
                                        class="form-control btn btn-dark mt-3" id="btnGuardar">Guardar</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <!-- tabla donde muestra los datos de los empleados -->
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>DPI Empleado</th>
                            <th>Contraseña</th>
                            <th>Correo Electrónico</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Rol ID</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <!-- Tabla dinámica con datos de empleados -->
                    <tbody>
                        <?php foreach ($empleados as $empleado){?>
                        <tr>
                            <td><?= $empleado['dpi_empleado'] ?></td>
                            <!-- Mostrar solo los primeros 10 caracteres del hash de la contraseña -->
                            <td><?= substr(hash('sha256', $empleado['contrasenia']), 0, 10) ?></td>
                            <td><?= $empleado['email'] ?></td>
                            <td><?= $empleado['nombre'] ?></td>
                            <td><?= $empleado['apellido'] ?></td>
                            <td><?= $empleado['rol_id'] ?></td>
                            
                            <!-- Botones de acción para eliminar y modificar -->
                            <td>
                                <button data-url="<?= base_url('eliminar_empleado/') . $empleado['dpi_empleado'] ?>"
                                    class="btn btn-danger btn-eliminar"><i class="bi bi-trash-fill "></i></button>
                                <button data-url="<?= base_url('buscar_empleado/') . $empleado['dpi_empleado'] ?>"
                                    class="btn btn-secondary btn-modificar"><i class="bi bi-pencil-square"></i></button>
                            </td>
                        </tr>
                        <?php }; ?>
                    </tbody>
                </table>
            </div>
        </div>

    </main>
    <!-- Scripts Bootstrap y SweetAlert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.min.js"
        integrity="sha384-G/EV+4j2dNv+tEPo3++6LCgdCROaejBqfUeNjuKAiuXbjrxilcCdDz6ZAVfHWe1Y" crossorigin="anonymous">
    </script>
    <!-- Script para manejo de eventos -->
    <script>
    // Botón Eliminar
    document.addEventListener("DOMContentLoaded", function() {
        document.querySelectorAll(".btn-eliminar").forEach(btn => {
            btn.addEventListener("click", function() {
                const url = this.getAttribute("data-url");
                Swal.fire({
                    title: "¿Estás seguro?",
                    text: "No podrás revertir esta acción.",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#d33",
                    cancelButtonColor: "#3085d6",
                    confirmButtonText: "Sí, eliminar",
                    cancelButtonText: "Cancelar"
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = url; // Redirige al eliminar
                    }
                });
            });
        });

        // Botón Modificar
        document.querySelectorAll(".btn-modificar").forEach(btn => {
            btn.addEventListener("click", function() {
                const url = this.getAttribute("data-url");
                Swal.fire({
                    title: "¿Deseas modificar este registro?",
                    text: "Serás redirigido al formulario de edición.",
                    icon: "question",
                    showCancelButton: true,
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#aaa",
                    confirmButtonText: "Sí, continuar",
                    cancelButtonText: "Cancelar"
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = url; // Redirige al modificar
                    }
                });
            });
        });
    });
    </script>
</body>

</html>