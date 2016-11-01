
<!--Este ejemplo funciona como estaba previsto, porque cuando PHP intercepta las etiquetas de cierre ?>, simplemente comienza a imprimir cualquier cosa que encuentre (a excepción de un una nueva línea inmediatamente después; véase la separación de instrucciones) haste que dé con otra etiqueta de apertura a menos que se encuentre en mitad de una sentencia condicional, en cuyo caso el intérprete determinará el resultado de la condición antes de tomar una decisión de qué es lo que tiene que saltar. Vea el siguiente ejemplo.-->

  <?php if (true == true): ?>
  Esto se mostrara si la expresion es verdadera
<?php else: ?>
  En caso contrario mostrara esto
<?php endif; ?>



