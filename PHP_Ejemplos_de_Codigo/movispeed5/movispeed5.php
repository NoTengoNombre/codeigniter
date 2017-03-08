<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
    <title>Movispeed</title>
    <link rel="stylesheet" href="movispeed5.css">
    <script src="movispeed5.js"></script>
    <script>
      var perfil = "";
    </script>
  </head> 
  <body>
    <form name="form1">
      <table class="full-height"><tr><td align="center">
            <table class="esfera" border="0" cellspacing="0" cellpadding="5">
              <tr align="center"><td colspan="4">
                  <svg id="esferaMovispeed" width="100%" viewBox="0 0 662 405" xmlns:svg="http://www.w3.org/2000/svg">
                  <image x="0" y="0" width="662" height="405" xlink:href="movispeed5_1.png" />
                  <text id="tiempoPing" text-anchor="middle" x="331" y="288" font-family="Arial" font-size="12" font-weight="bold">Ping 0 ms</text>
                  <text id="textoCentro" text-anchor="middle" x="331" y="353" font-family="Arial" font-size="40">0</text>
                  <line id="agujaMovispeed" x1="311" y1="212" x2="197" y2="282" style="stroke: #ff0000; stroke-width: 5;"/>
                  <text id="textoIzquierda" text-anchor="middle" x="98" y="335" font-family="Arial" font-size="40">0</text>
                  <text id="unidadesIzquierda" text-anchor="middle" x="98" y="370" font-family="Arial" font-size="20" fill="white">bps</text>
                  <text id="textoDerecha" text-anchor="middle" x="561" y="335" font-family="Arial" font-size="40">0</text>
                  <text id="unidadesDerecha" text-anchor="middle" x="561" y="370" font-family="Arial" font-size="18" fill="white">bps</text>
                  <line id="progress_izq_2" x1="60" y1="288" x2="130" y2="288" style="stroke: #606060; stroke-width: 6;"/>
                  <line id="progress_izq_1" x1="60" y1="288" x2="60" y2="288" style="stroke: #00ff00; stroke-width:6;" />
                  <line id="progress_der_2" x1="530" y1="288" x2="600" y2="288" style="stroke: #606060; stroke-width: 6;"/>
                  <line id="progress_der_1" x1="530" y1="288" x2="530" y2="288" style="stroke: #00ff00; stroke-width: 6;"/>
                  </svg>
                </td></tr>
              <tr align="center"><th class="cabecera" id="estado_test" colspan="4">No iniciado</th></tr>
              <tr><td colspan="4" align="center">
                  <input type="button" class="botonMovispeed" id="iniciar_test" name="botonIniciar" value="Iniciar" onClick="iniciarTest();">
                  &nbsp;
                  <input type="button" class="botonMovispeed" name="botonHistorico" value="Histórico" onClick="verHistorico();">
                  &nbsp;<input type="button" class="botonMovispeed" name="botonCancelar" value="Cancelar" onClick="cancelarTodo();" disabled="true">
                </td></tr>
            </table>	
            <span id="consola"></span>
          </td></tr></table>
    </form>
    <script>
      if ((self.parent && !(self.parent === self)) && (self.parent.frames.length != 0)) {
        self.parent.location = document.location;
      }
      ponVelo(0);
    </script>
  </body>
</html>
