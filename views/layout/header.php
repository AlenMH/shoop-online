<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="<?=base_url?>assets/css/bootstrap.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url ?>assets/css/styles.css">
    <title>Tienda Virtual</title>
</head>

<body class="grey">
    <div id="main">
        <div class="navbar navbar-expand-lg navbar-light bg-light shadow-sm" style="margin-bottom: 0px">
            <!--MENU!-->
            <a href="<?=base_url?>" class="navbar-brand">
                <img src="<?=base_url?>assets/img/logo.svg" class="rounded mx-auto">
                <strong>Maxiumm Store</strong>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <?php $categorias = Utils::showCategorias(); ?>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mr-auto d-flex justify-content-center align-items-center text-center"
                    id='menu-nav'>
                    <?php while ($cat = $categorias->fetch_object()): ?>
                    <li class="nav-item"><a class="nav-link text-dark"
                            href="<?= base_url ?>categoria/ver/<?= $cat->id ?>"><?= $cat->nombre ?> </a></li>
                    <?php endwhile; ?>
                </ul>
                <form class="form-inline my-2 my-lg-0 d-flex justify-content-center align-items-center" action="<?=base_url?>producto/serch" method="POST">
                    <input class="form-control mr-sm-2 col-sm-8" placeholder="Nombre del producto" name="name" id="name">
                    <button class="btn btn-dark my-2 my-sm-0 mx-1 text-white" type="submit" >Buscar</button>
                </form>
                <div class="d-flex justify-content-center align-items-center text-center">
                <?php if (!isset($_SESSION['identity'])): ?>
                    <a class="btn btn-info my-2 my-sm-0 mx-1" href="<?= base_url ?>usuario/loginView">Login</a>
                    <a class="btn btn-success my-2 my-sm-0 mx-1" href="<?= base_url ?>usuario/registro">Registrar</a>
                    <?php else: ?>
                    <a class="btn btn-danger my-2 my-sm-0 mx-1" href="<?= base_url ?>usuario/logout">Salir</a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="wrapper bg-white">