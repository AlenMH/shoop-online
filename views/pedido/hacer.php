<?php if (isset($_SESSION['identity'])): ?>
<div class="bg-dark text-white text-center" style="width:100%">
    <h2 class="my-0">Solicitar Pedido</h2>
</div>
<div class="d-flex justify-content-center my-3">
    <a class="btn btn-info" href="<?= base_url ?>carrito/index">Ver los productos en el carrito</a>
</div>
<div class='text-center body-form bg-white' >
    <form class="form-gestion" action="<?= base_url ?>pedido/add" method="POST">
        <h1 class="h3 mb-3">Direccion de Envio</h1>
        <label for="provincia" class="sr-only">Estado</label>
        <input type="text" name="provincia" required class="form-control form-control-lg my-2" placeholder="Estado" />
        <label for="localidad" class="sr-only">Ciudad</label>
        <input type="text" name="localidad" required class="form-control form-control-lg my-2" placeholder="Ciudad" />
        <label for="direccion" class="sr-only">Direccion</label>
        <input type="text" name="direccion" required class="form-control form-control-lg my-2" placeholder="Direccion" />
        <button class="btn btn-lg btn-success btn-block" type="submit">Confirmar Pedido</button>
    </form>
</div>
<?php else: ?>
<div class="bg-dark text-white text-center" style="width:100%">
    <h1>Necesitas Iniciar Session para realizar el pedido</h1>
</div>
<?php endif; ?>