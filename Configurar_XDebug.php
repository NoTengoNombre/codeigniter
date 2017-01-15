<!--
    @Created on : 24-nov-2016, 13:29:35
    @Author     : RVS - N.F.N.D - Home
    @Pag        :
    @version    :
    @TODO       :
-->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title></title>
    <style>
      span{
        background-color: #00ffff;
        font-size:  20px;
      }
    </style>
  </head>
  <body>
    <p>
      Dentro del Archivo 
      <span>php.ini</span> <br><br>
      Poner los siguientes parametros</p>
    <pre>
[XDebug]
zend_extension = C:\xampp\php\ext\php_xdebug-2.4.1-7.0-vc14.dll
xdebug.remote_enable = on
xdebug.profiler_enable = off
xdebug.profiler_enable_trigger = off
xdebug.profiler_output_name = cachegrind.out.%t.%p
xdebug.profiler_output_dir = "c:/wamp/tmp"
xdebug.show_local_vars=0
    </pre>
  </body>
</html>

  
