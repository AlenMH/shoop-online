<?php if (isset($_SESSION['pedido']) && $_SESSION['pedido'] == "complete") : ?>
<div class="bg-dark text-white text-center" style="width:100%">
    <h2 class="">Pedido Confirmado</h2>
    <h4 class="bg-white text-danger">Tu pedido ha sido guardado con exito, una vez que realices la transferencia sera procesado</h4>
</div>
    
    <?php if (isset($pedido)): ?>
    
    <div class="table-responsive">
<table class="table text-center table-hover">
    <tr class="thead-dark">
        <th>Num. Pedido</th>
        <th>Total</th>
    </tr>
    <tr>
        <td><?= $pedido->id ?></td>
        <td><strong class="text-danger">$<?= $pedido->coste ?></strong></td>
    </tr>
</table>
</div>
<div class="table-responsive">
<table class="table text-center table-hover table-bordered">
        <tr class="thead-dark">
            <th>Imagen</th>
            <th>Nombre</th>
            <th>Precio</th>
            <th>Unidades</th>
        </tr>
        <?php while ($producto = $productos->fetch_object()): ?>
        <tr>
            <td>
                <?php if ($producto->imagen != null): ?>
                <img src="<?= base_url . "uploads/images/" . $producto->imagen ?>" height="120px">
                <?php else: ?>
                <img src="<?= base_url ?>assets/img/camiseta.png" height="120px">
                <?php endif; ?>
            </td>
            <td>
                <a href="<?= base_url ?>producto/ver/<?= $producto->id ?>"><?= $producto->nombre ?></a>
            </td>
            <td><?= $producto->precio ?></td>
            <td><?= $producto->unidades ?></td>
        </tr>
        <?php endwhile; ?>
    </table>
    <div class="d-flex justify-content-center">
    <a class="btn btn-success btn-lg btn-block w-50 text-white" href="<?=base_url?>pedido/pagarPedido">Pagar Pedido</a>
    </div>
</div>
    <?php endif; ?>
<?php elseif (isset($_SESSION['pedido']) && $_SESSION['pedido'] != "confirm") : ?>
    <h1>TU PEDIDO NO HA SIDO CONFIRMADO</h1>
<?php endif; ?>
