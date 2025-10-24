<!DOCTYPE html>
<html lang="es" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('styles/style.css') ?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <title> Pedidos</title>
</head>

<?php // Leer datos
$id_empleado = session()->get('dpi_empleado');


// Verificar si existe
if (!session()->has('dpi_empleado')) {
    // hacer algo
    header('Location:' . base_url("/login_empleado"));
    exit;
} else {
    $email = session()->get('email');
    $nombre = session()->get('nombre');
    $apellido = session()->get('apellido');
    ?>


<body>

    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-black">
            <div class="w-100 d-flex justify-content-between align-items-center px-0">

                <div class="d-flex align-items-center ms-0">
                    <img src="<?= base_url('images/logo.png') ?>" alt="Logo de la empresa" class="logo me-2"
                        style="height:50px;">
                    <h5 class="mb-0">Supplements Prime</h5>
                </div>

                <div class="me-3">
                    <span class="fw-bold">
                        Hola, <?= esc($nombre) . ' ' . esc($apellido) ?>
                    </span>
                </div>
            </div>
        </nav>
    </header>





    <!--tabla de pedidos-->
    <table class="table table-bordered">
        <thead>
            <tr>

                <th>Cliente</th>
                <th>Direccion</th>
                <th>Telefono</th>
                <th>Observaciones</th>
                <th>Total</th>
                <th>Acciones</th>


            </tr>
        </thead>



        <tbody>
            <?php foreach ($pedidos as $pedido): ?>
            <tr>
                <td><?= esc($pedido['nombre_cliente']) ?></td>
                <td><?= esc($pedido['direccion_entrega']) ?></td>
                <td><?= esc($pedido['telefono']) ?></td>
                <td><?= esc($pedido['observaciones']) ?></td>
<td>
    Q <?= number_format($pedido['total_calculado'], 2) ?>
</td>


<td>
    <a href="<?= base_url('empleado/detallePedido/' . $pedido['pedido_id']) ?>" class="btn btn-info">
        Ver detalle
    </a>


<form action="<?= base_url('asignar_a_mensajero') ?>" method="post" style="display:inline;">
    <input type="hidden" name="pedido_id" value="<?= $pedido['pedido_id'] ?>">
    <button type="submit" class="btn btn-success">
        Completar y enviar pedido
    </button>
</form>

</td>


            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <!--boton de volver -->
    <div class="d-flex justify-content-end mt-3">
        <a href="<?= base_url('empleados') ?>" class="btn btn-outline-light fw-bold px-4 py-2 shadow-sm"
            onmousedown="this.style.boxShadow='0 0 10px rgba(255,255,255,0.3)'" onmouseup="this.style.boxShadow='none'">
            ← Volver
        </a>
    </div>


    <?php
} // Cierre del else de la verificacion de session
?>
    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js">
    </script>
</body>


</html>