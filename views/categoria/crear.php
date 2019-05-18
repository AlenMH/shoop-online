
<div class="bg-dark text-white text-center">
<h3>Crear nueva Categoria</h3>
</div>
<div class='text-center body-form' style='background-color:white'>
<form class="form-gestion my-5" action="<?=base_url?>categoria/save" method="POST">
<label for="nombre" class="sr-only" >Nombre</label>
        <input type="text" name="nombre" class="form-control form-control-lg my-2" value="<?= isset($pro) && is_object($pro) ? $pro->nombre : ''; ?>" placeholder="Nombre"  required/>
    <input type="submit" class="btn btn-info btn-block" value="Guardar"/>
</form>
</div>
