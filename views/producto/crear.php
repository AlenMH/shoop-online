<div class="bg-dark text-white text-center">
<?php if (isset($edit) && isset($pro) && is_object($pro)): ?>
<h3>Editar Producto <?= $pro->nombre ?></h3>
    <?php $url_action = base_url . "producto/save/" . $pro->id ?>
<?php else: ?>
    <h3>Crear Nuevo Producto</h3>
    <?php $url_action = base_url . "producto/save" ?>
<?php endif ?>
</div>
<div class='text-center body-form'>
    <form class="form-gestion" action="<?= $url_action ?>" method="POST" enctype="multipart/form-data">
        <label for="nombre" class="sr-only" >Nombre</label>
        <input type="text" name="nombre" class="form-control form-control-lg my-2" value="<?= isset($pro) && is_object($pro) ? $pro->nombre : ''; ?>" placeholder="Nombre" />

        <label for="descripcion" class="sr-only">Descripcion</label>
        <textarea type="text" name="descripcion" class="form-control form-control-lg my-2" placeholder="Descripcion"><?= isset($pro) && is_object($pro) ? $pro->descripcion : ''; ?></textarea>

        <label for="precio" class="sr-only">Precio</label>
        <input type="text" name="precio" class="form-control form-control-lg my-2" placeholder="Precio" value="<?= isset($pro) && is_object($pro) ? $pro->precio : ''; ?>" />

        <label for="stock" class="sr-only">Stock</label>
        <input type="number" name="stock" class="form-control form-control-lg my-2" placeholder="Cantidad" value="<?= isset($pro) && is_object($pro) ? $pro->stock : ''; ?>" />

        <label for="categoria" class="sr-only">Categoria</label>
        <?php $categorias = Utils::showCategorias(); ?>
        <select name="categoria" class="form-control form-control-lg my-2">
            <?php while ($cat = $categorias->fetch_object()): ?>
                <option value="<?= $cat->id ?>" <?= isset($pro) && is_object($pro) && $cat->id == $pro->categoria_id ? 'selected' : ''; ?>>
                    <?= $cat->nombre ?>
                </option>
            <?php endwhile; ?>
        </select>

        <div class="bg-dark my-2 text-white" >Imagen</div>
        <?php if (isset($pro) && is_object($pro) && !empty($pro->imagen)): ?>
        <img src="<?=base_url?>uploads/images/<?=$pro->imagen?>" class="my-2">
        <?php endif; ?>
        <input type="file" name="imagen" class="form-control-file"/>
        <input class="btn btn-info btn-block my-2" type="submit" value="Guardar"/>
    </form>
</div>