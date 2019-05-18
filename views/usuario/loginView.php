<div class='text-center body-form h-100'>
    <form class="form-signin" action="<?= base_url ?>usuario/login" method="post">
        <img class="mb-4" src="<?=base_url?>/assets/img/logo.svg" alt="" width="100" height="100">
        <h1 class="h3 mb-3">Iniciar Sesion</h1>
        <label for="email" class="sr-only">Correo Electronico</label>
        <input type="email" id="email" name="email" class="form-control form-control-lg my-2" placeholder="Email address" required autofocus>
        <label for="password" class="sr-only">Contraseña</label>
        <input type="password" id="password" name="password" class="form-control form-control-lg my-2" placeholder="Password" required>
        <button class="btn btn-lg btn-info btn-block" type="submit">Entrar</button>
        <?php if (isset($_SESSION['error_login']) && $_SESSION['error_login'] = 'failed'): ?>
        <div class="d-flex bg-danger text-white text-center justify-content-center my-1">
            <h3 style="margin-bottom:0px !important;">Falló! al iniciar sesion</h3>
        </div>
        <?php endif;?>
    </form>
</div>