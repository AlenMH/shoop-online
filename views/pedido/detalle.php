<div class="bg-dark text-white text-center">
    <h3 style="margin-bottom:0px !important;">Detalle del pedido</h3>
</div>
<?php if (isset($pedido)): ?>
<?php if (isset($_SESSION['admin'])): ?>

<div class="table-responsive">
<table class="table text-center table-hover">
    <tr class="thead-dark">
        <th>Num. Pedido</th>
        <th>Estado</th>
        <th>Total</th>
    </tr>
    <tr>
        <td><?= $pedido->id ?></td>
        <td><strong class="text-success"><?= Utils::showStatus($pedido->estado)?></strong> </td>
        <td><strong class="text-danger">$<?= $pedido->coste ?></strong></td>
    </tr>
</table>
</div>

<div class="text-dark text-center">
    <h3>Cambiar estado del pedido</h3>
</div>
<form action="<?= base_url ?>pedido/estado" method="POST">
<div class="form-group px-4 text-center">
<input type="hidden" value="<?=$pedido->id?>" name="pedido_id">
    <select name="estado" class="form-control form-control-lg">
        <option value="confirm" <?=$pedido->estado=="confirm" ?'selected':'';?>>Pendiente</option>
        <option value="preparation" <?=$pedido->estado=="preparation" ?'selected':'';?>>En preparacion</option>
        <option value="ready" <?=$pedido->estado=="ready" ?'selected':'';?>>Preparado para enviar</option>
        <option value="sended" <?=$pedido->estado=="sended" ?'selected':'';?>>Enviado</option>
    </select>
    <input type="submit" value="Cambiar estado" class="my-2 btn btn-success btn-lg">
</div>
</form>
<?php endif; ?>

<div class="text-dark text-center">
    <h3>Direccion de envio</h3>
</div>
<strong class="text-center">
    <h5><?= $pedido->provincia ?>, <?= $pedido->localidad ?>, <?= $pedido->direccion ?></h5>
</strong>


<div class="bg-dark text-white text-center">
    <h3 style="margin-bottom:0px !important;">Productos</h3>
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
</div>
<?php endif; ?>