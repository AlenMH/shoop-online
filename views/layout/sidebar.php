<aside id="sidebar" class='bg-light text-dark shadow'>
    <div class="sidebar-header text-center bg-info text-white">
        <?php if (isset($_SESSION['identity'])): ?>
        <strong> 
            <h3><?= $_SESSION['identity']->nombre ?> <?= $_SESSION['identity']->apellidos ?></h3>
        </strong>
        <?php else: ?>
        <strong>Bienvenido</strong>
        <?php endif; ?>
    </div>
    <div id="carrito" class="shadow-sm">
        <div class='d-flex justify-content-around align-items-center my-1 py-1'>
            <h4>Mis compras</h4>
            <i class="material-icons">shopping_cart</i>
        </div>
        <ul class='list-unstyled components rounded'>
            <?php $stats = Utils::statsCarrito(); ?>
            <li class='d-flex align-items-center justify-content-center'>
                <i class="material-icons">shopping_basket</i>
                <a href="<?= base_url ?>carrito/index">Productos (<span
                        class='text-danger'><?= $stats['count'] ?></span>)</a>
            </li>
            <li class='d-flex align-items-center justify-content-center'><i class="material-icons">attach_money</i>
                <a href="<?= base_url ?>carrito/index">Total: <span class='text-success'>$<?= $stats['total'] ?></span>
                    pesos.</a>
            </li>
            <li class='d-flex align-items-center justify-content-center'><i class="material-icons">shopping_cart</i>
                <a href="<?= base_url ?>carrito/index">Ver el carrito</a>
            </li>
        </ul>
    </div>
    <div class="block_aside">
        <div class='d-flex justify-content-around align-items-center my-1 py-1'>
            <h4>OPCIONES</h4>
            <i class="material-icons">apps</i>
        </div>
        <ul class="list-unstyled components">
            <?php if (isset($_SESSION['admin'])): ?>
            <li class='d-flex align-items-center justify-content-center'>
                <a href="<?= base_url ?>categoria/index">Gestionar Categorias</a>
                <i class="material-icons">store</i>
            </li>
            <li class='d-flex align-items-center justify-content-center'>
                <a href="<?= base_url ?>producto/gestion">Gestionar Productos</a>
                <i class="material-icons">shopping_basket</i>
            </li>
            <li class='d-flex align-items-center justify-content-center'>
                <a href="<?= base_url ?>pedido/gestion">Gestionar Pedidos</a>
                <i class="material-icons">location_on</i>
            </li>
            <?php endif; ?>
            <?php if (isset($_SESSION['identity'])): ?>
            <li class='d-flex align-items-center justify-content-center'>
                <a href="<?= base_url ?>pedido/mis_pedidos">Mis pedidos</a>
                <i class="material-icons">assignment</i>
            </li>
            <?php else: ?>
            <li class="text-center">Sin opciones...</li>
            <?php endif; ?>
        </ul>
    </div>
</aside>
<div id="content">
    <div class="f-menu-icon">
        <button type="button" id="sidebarCollapse" class="btn btn-info shadow-sm d-flex justify-content-center">
            <i class="material-icons">menu</i>
        </button>
    </div>
