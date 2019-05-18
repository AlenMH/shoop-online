<div class="bg-dark text-white text-center" style="width:100%">
    <h3 class="my-0">Carrito de Compra</h3>
</div>
<?php if (isset($_SESSION['carrito']) && count($_SESSION['carrito']) >= 1): ?>
    <table class="table text-center table-hover table-bordered">
        <tr class="thead-dark">
            <th>Imagen</th>
            <th>Nombre</th>
            <th>Precio</th>
            <th>Unidades</th>
            <th>Eliminar</th>
        </tr>
        <?php foreach ($carrito as $indice => $elemento):$producto = $elemento['producto'];?>
        <tr class="text-center">
            <td>
                <?php if ($producto->imagen != null): ?>
                    <img  src="<?= base_url . "uploads/images/" . $producto->imagen ?>" height="120px">
                <?php else: ?>
                    <img  src="<?= base_url ?>assets/img/camiseta.png" height="120px">
                <?php endif; ?>
            </td>
            <td><a href="<?= base_url ?>producto/ver/<?= $producto->id ?>"><?= $producto->nombre ?></a></td>
            <td><?= $producto->precio ?></td>
            <td>
                <a href="<?=base_url?>carrito/up/<?=$indice?>" class="btn btn-success">+</a>
                <?= $elemento['unidades'] ?>
                <a href="<?=base_url?>carrito/down/<?=$indice?>" class="btn btn-danger">-</a>
            </td>
            <td>
                <a href="<?= base_url ?>carrito/delete/<?= $indice ?>" class="btn btn-danger">Quitar</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
    <div class="d-flex justify-content-between px-3 align-items-center justify-content-center">
        <a href="<?= base_url ?>carrito/deleteAll" class="btn btn-danger btn-lg">Vaciar</a>
        <?php $stats = Utils::statsCarrito(); ?>
        <h3>Precio Total: $<?= $stats['total'] ?></h3>
        <a href="<?= base_url ?>pedido/hacer" class="btn btn-success btn-lg" style="margin-left: 200px">Confirmar</a>
    </div>
<?php else: ?>
    <div class="text-center">
        <h4>El carrito esta vacio añade productos a tu carrito</h4>
    </div>
<?php endif; ?>