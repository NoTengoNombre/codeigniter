<?php

$data = array(
    'name' => 'username',
    'id' => 'username',
    'value' => 'johndoe',
    'maxlengt' => '100',
    'size' => '50',
    'style' => 'width:50%');


echo form_open("action");
//echo form_input("nombre-input-text");
echo form_input($data);
echo form_submit("id", "etiqueta");
echo form_close();
?>
