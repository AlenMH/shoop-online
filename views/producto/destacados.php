
<div class="bg-dark text-white text-center">
    <h3>Productos Destacados</h3>
</div>
<div class="column-view">
<?php while ($product = $productos->fetch_object()): ?>
<div class="card m-2 rounded-lg d-flex" style="width: 40%;">
    <div class="card-body">
        <h5 class="card-title text-center"><span><?= $product->nombre ?></span></h5>
        <?php if ($product->imagen != null): ?>
        <a href="<?=base_url?>producto/ver/<?=$product->id?>" class="d-flex justify-content-center">
            <img class="" src="<?= base_url . "uploads/images/" . $product->imagen ?>" height="150px" width="150px">
            <?php else: ?>
            <img src="<?= base_url ?>assets/img/camiseta.png">
            <?php endif; ?>
        </a>
        <p class="card-text mt-1 text-lowercase text-justify"><?= $product->descripcion ?></p>
        <p class="card-text text-center">Por solo: <span><strong>$ <?= $product->precio ?> MXN</strong> </span> </p>
        <div class="d-flex justify-content-center align-items-center">
            <a class="btn btn-success btn-block" href="<?=base_url?>carrito/add/<?=$product->id?>"> <strong>Comprar</strong></a>
        </div>
    </div>
</div>
<?php endwhile; ?>
</div>
