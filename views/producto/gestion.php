<div class="bg-dark text-white text-center">
    <h3>Gestion de Productos</h3>
<a class="btn btn-info btn-lg my-1" href="<?= base_url ?>producto/crear">Crear Producto</a>   
</div>

<?php if (isset($_SESSION['producto']) && $_SESSION['producto'] == 'complete'): ?>
<strong class="alert_green">El producto se ha creado correctamente</strong>
<?php elseif (isset($_SESSION['producto']) && $_SESSION['producto'] != 'complete'): ?>
<strong class="alert_red">El producto no se ha creado</strong>
<?php endif; ?>
<?php Utils::deleteSession('producto') ?>
<?php if (isset($_SESSION['delete']) && $_SESSION['delete'] == 'complete'): ?>
<strong class="alert_green">El producto se ha creado correctamente</strong>
<?php elseif (isset($_SESSION['delete']) && $_SESSION['delete'] != 'complete'): ?>
<strong class="alert_red">El producto no se ha creado</strong>
<?php endif; ?>
<?php Utils::deleteSession('delete') ?>
<div class="table-responsive">
<table class="table text-center table-hover">
    <tr class="thead-dark">
        <th>Id</th>
        <th>Nombre</th>
        <th>Precio</th>
        <th>Stock</th>
        <th>Opciones</th>
    </tr>
    <?php while ($pro = $productos->fetch_object()): ?>
    <tr>
        <td><?= $pro->id; ?></td>
        <td ><?= $pro->nombre; ?></td>
        <td><?= $pro->precio; ?></td>
        <td><?= $pro->stock; ?></td>
        <td>
            <a href="<?= base_url ?>producto/editar/<?=$pro->id?>" class="btn btn-success btn-sm">Editar</a>
            <a href="<?= base_url ?>producto/eliminar/<?=$pro->id?>" class="btn btn-danger btn-sm">Eliminar</a>
        </td>
    </tr>
    <?php endwhile; ?>
</table>
</div>