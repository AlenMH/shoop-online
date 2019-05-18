<?php if (isset($_SESSION['register']) && $_SESSION['register'] = 'complete'): ?>
<strong class="text-center bg-success">Registro completado correctamente</strong>
<?php elseif(isset($_SESSION['register']) && $_SESSION['register'] = 'failed'): ?>
<strong class="text-center bg-danger">Registro fallido, introduce bien los datos</strong>
<?php endif; ?>
<?php Utils::deleteSession('register');?>

<div class='text-center body-form'>
    <form class="form-signin" action="<?= base_url ?>usuario/save" method="POST">
        <img class="mb-4" src="<?=base_url?>/assets/img/logo.svg" alt="" width="100" height="100">
        <h1 class="h3 mb-3">Registrar Nuevo Usuario</h1>
        <label for="name" class="sr-only">Nombre</label>
        <input type="text" name="nombre" class="form-control mb-1" placeholder="Nombre" required>
        <label for="apellidos" class="sr-only">Apellidos</label>
        <input type="text" name="apellidos" class="form-control mb-1" placeholder="Apellidos" required>
        <label for="email" class="sr-only">Correo Electronico</label>
        <input type="email" id="email" name="email" class="form-control mb-1" placeholder="Correo Electronico" required autofocus>
        <label for="password" class="sr-only">Contraseña</label>
        <input type="password" id="password" name="password" class="form-control mb-1" placeholder="Password" required>
        <div class="checkbox mb-3">
        </div>
        <button class="btn btn-lg btn-success btn-block" type="submit">Registrarse</button>
    </form>
</div>