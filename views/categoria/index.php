<div class="bg-dark text-white text-center">
    <h3>Gestionar Categorias</h3>
<a class="btn btn-info btn-lg my-1" href="<?=base_url?>categoria/crear">Crear Categoria</a>
</div>
<div class="table-responsive">
<table class="table text-center table-hover">
    <tr class="thead-dark">
        <th>Id</th>
        <th>Nombre</th>
    </tr>
    <?php while ($cat = $categorias->fetch_object()): ?>
        <tr>
            <td><?= $cat->id; ?></td>
            <td><?= $cat->nombre; ?></td>
        </tr>
    <?php endwhile; ?>
</table>
</div>
