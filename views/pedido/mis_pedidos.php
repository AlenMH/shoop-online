<div class="bg-dark text-white text-center">
<?php if (isset($gestion)): ?>
<h3 class="my-0">Gestionar Pedidos</h3>    
<?php else: ?>
<h3 class='my-0'>Mis Pedidos</h3>    
<?php endif; ?>
</div>
<div class="table-responsive">
<table class="table text-center table-hover table-bordered">
    <tr class="thead-dark">
        <th>No. Pedido</th>
        <th>Total</th>
        <th>fecha</th>
        <th>Estado</th>
    </tr>
    <?php while ($ped = $pedidos->fetch_object()): ?>
        <tr>
            <td><a href="<?= base_url ?>pedido/detalle/<?= $ped->id ?>"><?= $ped->id ?></a></td>
            <td>$ <?= $ped->coste ?></td>
            <td><?= $ped->fecha ?></td>
            <td><?= Utils::showStatus($ped->estado)?></td>
        </tr>
    <?php endwhile; ?>
</table>
</div>