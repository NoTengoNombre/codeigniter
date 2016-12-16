<h2><?php echo $view->label ?></h2>
<form name ="client" id="client" method="POST" action="index.php">
    <input type="hidden" name="id" id="id" value="<?php //print $view->client->getId() ?>">
    <div>
        <label>Usuario</label>
        <input type="text" name="nombre" id="nombre" required="" value = "<?php //print $view->client->getNombre() ?>">
    </div>
    <div>
        <label>Contraseña</label>
        <input type="password" name="password" id="password" maxlength="10" required="" value = "<?php //print $view->client->getApellido() ?>">
    </div><br>
    <div class="buttonsBar">
        <input id="cancel" type="button" value ="Cancelar" />
        <input id="submit" type="submit" name="submit" value ="Enviar" />
    </div>
</form>
