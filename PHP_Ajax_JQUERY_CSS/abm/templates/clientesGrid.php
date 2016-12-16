<div class="bar">
    <a id="new" class="button" href="javascript:void(0);">Nuevo Usuario</a>
    <a id="login" class="button" href="javascript:void(0);">Log In</a>
</div>
<table>
    <thead>
        <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Fecha de Inicio</th>
            <th>Peso Inicial</th>
            <th>Editar</th>
            <th>Borrar</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($view->clientes as $cliente):  // uso la otra sintaxis de php para templates ?>
            <tr>
                <td><?php echo $cliente['id'];?></td>
                <td><?php echo $cliente['nombre'];?></td>
                <td><?php echo $cliente['apellido'];?></td>
                <td><?php echo $cliente['fecha_nac'];?></td>
                <td><?php echo $cliente['peso'];?></td>
                <td><a class="edit" href="javascript:void(0);" data-id="<?php echo $cliente['id'];?>">Editar</a></td>
                <td><a class="delete" href="javascript:void(0);" data-id="<?php echo $cliente['id'];?>">Borrar</a></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
