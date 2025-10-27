<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Pedido confirmado</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body class="bg-dark text-light">

  <div class="container my-5">
    <h2 class="text-center">✅ Pedido confirmado</h2>
    <p>Gracias por tu compra, <strong><?= esc($nombre) ?></strong>.</p>
    <p>Teléfono: <?= esc($telefono) ?></p>
    <p>Dirección: <?= esc($direccion) ?></p>
    <p>Método de pago: <strong><?= esc($metodo_pago) ?></strong></p>
    <p>Observaciones: <?= esc($observaciones) ?: 'Ninguna' ?></p>
    <p>ID del pedido: <strong><?= esc($pedido_id) ?></strong></p>

    <h4 class="mt-4">🧾 Productos comprados</h4>
    <table class="table table-dark table-bordered">
      <thead>
        <tr>
          <th>Producto</th>
          <th>Cantidad</th>
          <th>Precio unitario</th>
          <th>Subtotal</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($carrito as $item): ?>
          <?php $subtotal = $item['precio'] * $item['cantidad']; ?>
          <tr>
            <td><?= esc($item['nombre']) ?></td>
            <td><?= esc($item['cantidad']) ?></td>
            <td>Q<?= number_format($item['precio'], 2) ?></td>
            <td>Q<?= number_format($subtotal, 2) ?></td>
          </tr>
        <?php endforeach; ?>
      </tbody>
      <tfoot>
        <tr>
          <th colspan="3" class="text-end">Total:</th>
          <th>Q<?= number_format($total_pedido, 2) ?></th>
        </tr>
      </tfoot>
    </table>

    <a href="<?= base_url('productos') ?>" class="btn btn-outline-light mt-3">🛍️ Volver a la tienda</a>
  </div>

  <script>
    Swal.fire({
      icon: 'success',
      title: '¡Pedido enviado con éxito!',
      text: 'Nos comunicaremos contigo pronto para coordinar la entrega.',
      confirmButtonText: 'Aceptar'
    });
  </script>
</body>
</html>
