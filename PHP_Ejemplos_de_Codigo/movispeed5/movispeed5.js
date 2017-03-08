var r0 = 0;
var r1 = 0;
var t0 = 0;
var t1 = 0;
var u0 = 0;
var u1 = 0;
var tw = 0;
var uw = 0;
var width = 664;
var height = 405;
var gradosIndicados = 59;
var contadorPing = 0;
var erroresPing = 0;
var intentosPing = 10;
var tiempo_ping = 0;
var jitter = 0;
var bytesBajada1 = 0;
var bytesSubida1 = 0;
var bytesBajada = 0;
var bytesSubida = 0;
var bytesBajada0 = 0;
var tiempoBajada = 0;
var tiempoBajada0 = 0;
var tiempoSubida = 0;
var bajadas = {};
var subidas = {};
var finD = false;
var finU = false;
var cancelado = false;
var tamanoMaximo = 50 * 1000000;
var timeoutPing = 3000;
var temporizadorPing = null;
var estabilizandoBajada = 2 * 1000;
var duracionBajada = 12 * 1000;
var duracionSubida = 8 * 1000;
var tiempoFinalizandoBajada = 0 * 1000;
var tiempoFinalizandoSubida = 10 * 1000;
var TEXTO_SUBIDA = null;
//var longitudBloque = 5000;
var longitudBloque = 10000;
var refrescoBajada = 100;
var refrescoSubida = 100;
var skipPings = false;
var skipBajadas = false;
var skipSubidas = false;
var estado;
var nsa = "";

var urlsPing = [];
var urlsBajada = [];
var urlsSubida = [];

var aTiempoPing = [];
var aTextoSubida;

// -------------------------

function iniciarTest() {
  document.form1.botonIniciar.disabled = true;
  document.form1.botonHistorico.disabled = true;
  document.form1.botonCancelar.disabled = false;
  //clearAll();
  aTextoSubida = {};
  aTiempoPing = [];
  clearTable();
  ponVelo(0);
  sentido = "Bajada";
  estado = "Configurando";
  document.getElementById("estado_test").innerHTML = estado;
  consultarDirecciones();
}

// -------------------------

function consultarDirecciones() {
  var oXML = null;
  if (window.XMLHttpRequest) {
    oXML = new XMLHttpRequest();
  } else if (window.ActiveXObject) {
    oXML = new ActiveXObject("Msxml2.XMLHTTP");
  } else {
    alert("Su navegador no soporta esta opción");
    return false;
  }
  var url = "movispeed5urls.php";
  url += "?id=" + Date.now();
  var regExpNsa = /nsa=([0-9\/]+)/g;
  var res = regExpNsa.exec(window.location.href);
  if (res != null && res[1] != "") {
    nsa = res[1];
  }
  var regExpPerfil = /perfil=(\w+)/g;
  res = regExpPerfil.exec(window.location.href);
  if (res != null && res[1] != "") {
    url += "&perfil=" + res[1];
  }
  var regExpBajadas = /nbajadas=(\d+)/g;
  res = regExpBajadas.exec(window.location.href);
  if (res != null && res[1] != "") {
    url += "&nbajadas=" + res[1];
  }
  var regExpSubidas = /nsubidas=(\d+)/g;
  res = regExpSubidas.exec(window.location.href);
  if (res != null && res[1] != "") {
    url += "&nsubidas=" + res[1];
  }
  var regExpSkipPings = /nopings=1/g;
  res = regExpSkipPings.exec(window.location.href);
  if (res != null && res[1] != "") {
    skipPings = true;
  }
  var regExpSkipBajadas = /nobajadas=1/g;
  res = regExpSkipBajadas.exec(window.location.href);
  if (res != null && res[1] != "") {
    skipBajadas = true;
  }
  var regExpSkipSubidas = /nosubidas=1/g;
  res = regExpSkipSubidas.exec(window.location.href);
  if (res != null && res[1] != "") {
    skipSubidas = true;
  }

  oXML.open('get', url, true);
  oXML.onreadystatechange = function () {
    recibirDirecciones(oXML);
  }
  oXML.send(null);
}

// -------------------------

function recibirDirecciones(oXML) {
  if (oXML.readyState == 4) {
    //var consola = document.getElementById("consola");
    //if (consola != null) {
    //	consola.innerHTML = '';
    //}
    if (oXML.responseXML != null) {
      var xml = oXML.responseXML.documentElement;
      //consola.innerHTML = xml + "<br>";
      var urls = xml.getElementsByTagName('ping');
      urlsBajada = [];
      for (var i = 0; i < urls.length; i++) {
        urlsPing.push(urls[i].firstChild.data);
      }
      var urls = xml.getElementsByTagName('bajada');
      urlsBajada = [];
      for (var i = 0; i < urls.length; i++) {
        urlsBajada.push(urls[i].firstChild.data);
      }
      var urls = xml.getElementsByTagName('subida');
      urlsSubida = [];
      for (var i = 0; i < urls.length; i++) {
        urlsSubida.push(urls[i].firstChild.data);
      }
    }
    if (urlsPing.length >= 1 && urlsBajada.length >= 1 && urlsSubida.length >= 1) {
      setTimeout(ping_start, 100);
    } else {
      var msg = "Error al obtener las direcciones";
      errorConfiguracion(msg)
    }
  }
}

// -------------------------

function ping_start() {
  finD = false;
  finU = false;
  cancelado = false;
  tiempo_ping = 0;
  contadorPing = 0;
  erroresPing = 0;
  if (skipPings) {
    download_start();
    return;
  }
  document.getElementById('tiempoPing').textContent = "Ping " + tiempo_ping + " ms";
  peticionPing();
}

// -------------------------

function peticionPing() {
  if (finD)
    return;
  ++contadorPing;
  estado = "Realizando Ping " + contadorPing + " / " + intentosPing;
  document.getElementById("estado_test").innerHTML = estado;
  var oXML = null;
  if (window.XMLHttpRequest) {
    oXML = new XMLHttpRequest();
  } else if (window.ActiveXObject) {
    oXML = new ActiveXObject("Msxml2.XMLHTTP");
  } else {
    alert("Su navegador no soporta esta opción");
    return false;
  }

  var url = urlsPing[0];
  url += "?id=" + Date.now();

  oXML.open('get', url, true);
  oXML.setRequestHeader("Accept-Encoding", "deflate");
  oXML.timeout = timeoutPing; // Set timeout to 3 seconds (3000 milliseconds)
  //oXML.ontimeout = function() {
  //	recibirResultadoPing(null);
  //}
  oXML.onreadystatechange = function () {
    recibirResultadoPing(oXML);
  }
  temporizadorPing = setTimeout(function () {
    interrumpirPing(oXML)
  }, timeoutPing + 1000);	// Por si el timeout no funciona bien
  r0 = Date.now();
  oXML.send(null);
}

// -------------------------

function recibirResultadoPing(oXML) {
  if (!finD) {
    if (oXML == null) {
      siguientePing();
    } else if (oXML.readyState == 4) {
      if (temporizadorPing != null) {
        clearTimeout(temporizadorPing);
        temporizadorPing = null;
      }
      if (oXML.status == 200) {
        r1 = Date.now();
        var tiempo = r1 - r0;
        updateTiempoPing(tiempo);
        aTiempoPing.push(tiempo);
        document.getElementById('tiempoPing').textContent = "Ping " + tiempo_ping + " ms";
        siguientePing();
      } else {
        ++erroresPing;
        siguientePing();
      }
    }
  } else {
    try {
      oXML.abort();
    } catch (e) {
    }
  }
}

// -------------------------

function interrumpirPing(oXML) {
  temporizadorPing = null;
  try {
    oXML.abort();
  } catch (e) {
  }
}

// -------------------------

function siguientePing() {
  if (contadorPing > 2 && contadorPing == erroresPing) {
    errorConfiguracion("Falla la conexión o el servidor no responde");
  } else if (contadorPing >= intentosPing) {
    var t = calculoJitter(aTiempoPing);
    //document.getElementById('jitter').textContent = "Jitter " + t + " ms";
    setTimeout(download_start, 500);
  } else {
    setTimeout(peticionPing, 350);
  }
}

// -------------------------

function calculoJitter(aPing) {
  var i;
  var min = aPing[3];
  var max = aPing[3];
  for (i = 4; i < aPing.length; i++) {
    if (aPing[i] > max) {
      max = aPing[i];
    }
    if (aPing[i] < min) {
      min = aPing[i];
    }
  }
  jitter = max - min;
  return (jitter);
}

// -------------------------

function download_start() {
  t0 = Date.now();
  t1 = t0;
  u0 = 0;
  u1 = 0;
  tw = 0;
  uw = 0;
  bytesBajada0 = 0;
  tiempoBajada0 = 0;
  bytesBajada = 0;
  bytesSubida = 0;
  bajadas = {};
  subidas = {};
  if (skipBajadas) {
    iniciarSubidas_1();
    return;
  }
  setTimeout(refrescarBajadas, refrescoBajada);
  showEstadoBajada(true);
  showEstadoSubida(true);
  for (var i = 0; i < urlsBajada.length; i++) {
    bajadas[i] = {'total': 0, 'xhr': null, 'fin': false};
  }
  for (var i = 0; i < urlsBajada.length; i++) {
    peticionBajada(i);
  }
}

// -------------------------

function cancelarTodo() {
  finD = true;
  finU = true;
  cancelado = true;
  cancelarInicio();
  finalizarBajadas();
  finalizarSubidas();
  setTimeout(cancelarFin, 1000);
}

// -------------------------

function cancelarInicio() {
  document.form1.botonCancelar.disabled = true;
  estado = "Cancelado";
  document.getElementById("estado_test").innerHTML = estado;
  ponVelo(0);
}

// -------------------------

function cancelarFin() {
  estado = "Cancelado";
  document.getElementById("estado_test").innerHTML = estado;
  document.form1.botonIniciar.disabled = false;
  document.form1.botonHistorico.disabled = false;
  aTextoSubida = {};
}

// -------------------------

function errorConfiguracion(msg) {
  finD = true;
  finU = true;
  cancelado = true;
  document.form1.botonCancelar.disabled = true;
  estado = "Error";
  document.getElementById("estado_test").innerHTML = msg;
  setTimeout(errorFin, 1000);
}

// -------------------------

function errorFin() {
  document.form1.botonIniciar.disabled = false;
  document.form1.botonHistorico.disabled = false;
  aTextoSubida = {};
}

// -------------------------

function iniciarSubidas_1() {
  if (gradosIndicados > grados + 1) {
    setTimeout(iniciarSubidas_1, 100);
  } else {
    finU = false;
    u0 = 0;
    u1 = 0;
    bytesSubida = 0;
    setTimeout(iniciarSubidas, 2000);
  }
}

// -------------------------

function iniciarSubidas() {
  if (finU) {
    finalizarSubidas();
    return;
  }
  if (TEXTO_SUBIDA == null) {
    TEXTO_SUBIDA = getTextoSubida(longitudBloque);
  }
  //var lugar = document.getElementById("consola");
  //lugar.innerHTML = "";
  u0 = Date.now();
  u1 = u0;
  bytesSubida = 0;
  subidas = {};
  setTimeout(refrescarSubidas, refrescoSubida);
  showEstadoSubida();
  for (var i = 0; i < urlsSubida.length; i++) {
    subidas[i] = {'total': 0, 'tamano': longitudBloque, 'xhr': null, 'fin': true};
  }
  for (var i = 0; i < urlsSubida.length; i++) {
    peticionSubida(i);
  }
}

// -------------------------

function peticionBajada(idPeticion) {
  if (finD)
    return;
  var oXML;
  if (bajadas[idPeticion].xhr == null) {
    if (window.XMLHttpRequest) {
      oXML = new XMLHttpRequest();
    } else if (window.ActiveXObject) {
      oXML = new ActiveXObject("Msxml2.XMLHTTP");
    } else {
      alert("Su navegador no soporta esta opción");
      return false;
    }
    bajadas[idPeticion].xhr = oXML;
  } else {
    oXML = bajadas[idPeticion].xhr;
  }

  var url = urlsBajada[idPeticion % urlsBajada.length];
  url += "?id=" + Date.now() + idPeticion;

  oXML.open('get', url, true);
  oXML.responseType = "arraybuffer";
  //oXML.setRequestHeader("Accept-Encoding", "deflate");
  oXML.onprogress = function (evt) {
    progresoBajada(idPeticion, evt);
  }
  oXML.onreadystatechange = function () {
    recibirResultadoBajada(idPeticion, oXML);
  }
  oXML.send(null);
}

// -------------------------

function progresoBajada(idPeticion, evt) {
  //console.log("idPeticion=" + idPeticion + " evt=" + JSON.stringify(evt));
  if (evt.lengthComputable) {
    //console.log("idPeticion=" + idPeticion + " max=" + evt.total + " loaded=" + evt.loaded);
    bajadas[idPeticion].parcial = evt.loaded;
    //	alert("max=" + pe.total + " loaded=" + pe.loaded);
  }
}

// -------------------------

function recibirResultadoBajada(idPeticion, oXML) {
  if (!finD) {
    if (oXML.readyState == 4) {
      if (oXML.status == 200) {
        bajadas[idPeticion].fin = true;
        bajadas[idPeticion].total += bajadas[idPeticion].parcial;
        bajadas[idPeticion].parcial = 0;
        bajadas[idPeticion].xhr = null;		// Liberar espacio

        t1 = Date.now();
        if (t1 - t0 < duracionBajada) {
          setTimeout(function () {
            peticionBajada(idPeticion)
          }, 0);
        }
      }
    }
  } else {
    try {
      oXML.abort();
    } catch (e) {
    }
  }
}

// -------------------------

function peticionSubida(idPeticion) {
  if (finU)
    return;
  var oXML = null;
  if (window.XMLHttpRequest) {
    oXML = new XMLHttpRequest();
  } else if (window.ActiveXObject) {
    oXML = new ActiveXObject("Msxml2.XMLHTTP");
  } else {
    alert("Su navegador no soporta esta opción");
    return false;
  }

  var url = subidas[idPeticion].url;
  if (url == null) {
    url = urlsSubida[idPeticion % urlsSubida.length];
    subidas[idPeticion].url = url;
  }
  subidas[idPeticion].xhr = oXML;
  subidas[idPeticion].fin = false;
  var tamano = subidas[idPeticion].tamano;
  //oXML.send(TEXTO_SUBIDA);
  if (aTextoSubida[tamano] == null) {
    aTextoSubida[tamano] = repeat(TEXTO_SUBIDA, tamano / (TEXTO_SUBIDA.length));
  }
  subidas[idPeticion].total = aTextoSubida[tamano].length;
  subidas[idPeticion].t0 = Date.now();

  //oXML.open('post', url, true);
  oXML.open('post', url + "?a=" + idPeticion + "-" + tamano, true);
  oXML.onreadystatechange = function () {
    recibirResultadoSubida(idPeticion, oXML);
  }
  //oXML.setRequestHeader("Content-Type", "text/plain;charset=UTF-8");
  oXML.send(aTextoSubida[tamano]);
}

// -------------------------

function recibirResultadoSubida(idPeticion, oXML) {
  if (oXML.readyState == 4) {
    if (oXML.status == 200 || oXML.status == 0) {
      oXML = null;
      //if (subidas.idPeticion != undefined) {
      //subidas[idPeticion].total = tamano*TEXTO_SUBIDA.length;
      subidas[idPeticion].fin = true;
      //}
      if (!finU) {
        var cont = 0;
        for (var i in subidas) {
          ++cont;
        }
        var tamano = subidas[idPeticion].tamano;
        if (true || tamano < tamanoMaximo) {
          u1 = Date.now();
          var dt = u1 - u0;
          if (dt < duracionSubida / 20) {
            nuevoTamano = Math.min(tamano * 16, tamanoMaximo);
          } else if (dt < duracionSubida / 10) {
            nuevoTamano = Math.min(tamano * 8, tamanoMaximo);
          } else if (dt < duracionSubida / 4) {
            nuevoTamano = Math.min(3 * tamano, tamanoMaximo);
          } else {
            //nuevoTamano = tamano;
            var estimado = Math.max(longitudBloque, ((bytesSubida / tiempoSubida) / urlsSubida.length) * (duracionSubida - dt + 500));
            nuevoTamano = Math.min(Math.floor(estimado), tamanoMaximo);
            //console.log("estimado=" + estimado + " tiempoFalta=" + (duracionSubida-dt) + " veloSubida=" + (bytesSubida/tiempoSubida));
            //nuevoTamano = tamano;
          }
        }
        subidas[cont] = {'total': 0, 'tamano': nuevoTamano, 'xhr': null, 'fin': false, 'url': subidas[idPeticion].url};
        subidas[idPeticion].xhr = null;		// Liberar espacio
        //peticionSubida(cont);
        if (u1 - u0 < duracionSubida) {
          setTimeout(function () {
            peticionSubida(cont)
          }, 0);
        }
      }
    }
  }
}

// -------------------------

function nombreEstado(estado) {
  var nombre = "Desconocido";
  switch (estado) {
    case 0:
      nombre = "No iniciado";
      break;
    case 1:
      nombre = "Realizando petición";
      break;
    case 2:
      nombre = "Iniciando";
      break;
    case 3:
      nombre = "Descargando";
      break;
    case 4:
      nombre = "Terminado";
      break;
    default:
      break;
  }
  return nombre;
}

// -------------------------

function getTextoSubida(n) {
  // return (new Array(Math.round(n/10))).join("3157924680");
  return repeat("0299792458", Math.round(n / 10));
}

// -------------------------

function showEstadoBajada(izq) {
  var tiempo = (t1 - t0);
  var v;

  if (tiempo >= 0) {
    var progress_izq_1 = document.getElementById("progress_izq_1");
    progress_izq_1.setAttribute("x2", 60 + 70 * Math.min(tiempo, duracionBajada) / duracionBajada);
    var progress_izq_2 = document.getElementById("progress_izq_2");
    progress_izq_2.setAttribute("x1", 60 + 70 * Math.min(tiempo, duracionBajada) / duracionBajada);

    //v = getBitsPorSegundo(bytesBajada, tiempo);
    var c;
    if (tiempoBajada0 == 0 || tiempo <= tiempoBajada0) {
      v = getBitsPorSegundo(bytesBajada, tiempo);
      c = "Caso 1";
    } else if (tiempo < 2 * estabilizandoBajada) {
      //v = getBitsPorSegundo(bytesBajada - bytesBajada0*(tiempo-estabilizandoBajada)/estabilizandoBajada , estabilizandoBajada);
      v = getBitsPorSegundo(bytesBajada + bytesBajada0 * (1 - tiempo / tiempoBajada0), tiempoBajada0);
      c = "Caso 2";
    } else {
      v = getBitsPorSegundo(bytesBajada - bytesBajada0, tiempo - tiempoBajada0);
      c = "Caso 3";
    }
    //console.log("tiempo=" + tiempo + " tiempo0=" + tiempoBajada0 + " velo=" + v + " caso=" + c + "bytes=" + bytesBajada + " bytes0=" + bytesBajada0);
    ponVelo(v);
    if (izq) {
      if (v >= 1000000) {
        document.getElementById('unidadesIzquierda').textContent = "Mbps";
        document.getElementById('textoIzquierda').textContent = (v / 1000000).toString().slice(0, 5);
      } else if (v >= 1000) {
        document.getElementById('unidadesIzquierda').textContent = "kbps";
        document.getElementById('textoIzquierda').textContent = (v / 1000).toString().slice(0, 5);
      } else {
        document.getElementById('unidadesIzquierda').textContent = "bps";
        document.getElementById('textoIzquierda').textContent = v.toString().slice(0, 5);
      }
    }
  }
}

// -------------------------

function showEstadoSubida(der) {
  var tiempo = (u1 - u0);

  if (tiempo >= 0) {
    var progress_der_1 = document.getElementById("progress_der_1");
    progress_der_1.setAttribute("x2", 530 + 70 * Math.min(tiempo, duracionSubida) / duracionSubida);
    var progress_der_2 = document.getElementById("progress_der_2");
    progress_der_2.setAttribute("x1", 530 + 70 * Math.min(tiempo, duracionSubida) / duracionSubida);

    var v = getBitsPorSegundo(bytesSubida, tiempo);
    ponVelo(v);
    if (der) {
      if (v >= 1000000) {
        document.getElementById('unidadesDerecha').textContent = "Mbps";
        document.getElementById('textoDerecha').textContent = (v / 1000000).toString().slice(0, 5);
      } else if (v >= 1000) {
        document.getElementById('unidadesDerecha').textContent = "kbps";
        document.getElementById('textoDerecha').textContent = (v / 1000).toString().slice(0, 5);
      } else {
        document.getElementById('unidadesDerecha').textContent = "bps";
        document.getElementById('textoDerecha').textContent = v.toString().slice(0, 5);
      }
    }
  }
}

// -------------------------

function getBitsPorSegundo(tamano, tiempo) {
  return (tiempo > 0 ? 8000 * tamano / tiempo : 0);
}

// -------------------------
function calculaVelocidad(tamano, tiempo) {
  var cad = "";
  var vel = getBitsPorSegundo(tamano, tiempo);
  if (vel > 1000000) {
    cad = "" + (vel / 1000000).toFixed(2) + " M";
  } else if (vel > 1000) {
    cad = "" + (vel / 1000).toFixed(2) + " k";
  } else {
    cad = "" + vel.toFixed(2) + " ";
  }
  cad += "bps";
  return cad;
}

// -------------------------

function finalizarBajadas() {
  for (var i in bajadas) {
    if (!bajadas[i].fin && bajadas[i].xhr != null) {
      try {
        bajadas[i].xhr.abort();
      } catch (e) {
      }
    }
  }
}

// -------------------------

function finalizarSubidas() {
  for (var i in subidas) {
    if (!subidas[i].fin && subidas[i].xhr != null) {
      try {
        subidas[i].xhr.abort();
      } catch (e) {
      }
    }
  }
}

// -------------------------

function refrescarBajadas() {
  var ahora = Date.now();
  var dt = (ahora - t1);
  if (dt > tw) {
    tw = dt;
  }
  t1 = ahora;
  tiempoBajada = t1 - t0;
  var t = 0;
  for (var i in bajadas) {
    var suma = bajadas[i].total + bajadas[i].parcial;
    t += isNaN(suma) ? 0 : suma;
  }
  bytesBajada = t;
  if (tiempoBajada < estabilizandoBajada && !finD) {
    estado = "Estabilizando bajada";
    document.getElementById("estado_test").innerHTML = estado;
    setTimeout(refrescarBajadas, refrescoBajada);
  } else if (tiempoBajada <= duracionBajada && !finD) {
    if (estado.substring(0, 4) == "Esta") {
      bytesBajada0 = bytesBajada;
      tiempoBajada0 = tiempoBajada;
    }
    estado = "Midiendo bajada";
    document.getElementById("estado_test").innerHTML = estado;
    setTimeout(refrescarBajadas, refrescoBajada);
  } else if (hayDescargasActivas() && tiempoBajada <= (duracionBajada + tiempoFinalizandoBajada) && !finD) {
    estado = "Finalizando bajada";
    document.getElementById("estado_test").innerHTML = estado;
    setTimeout(refrescarBajadas, refrescoBajada);
  } else if (cancelado) {
    return;
  } else {
    finD = true;
    finalizarBajadas();
    estado = "Iniciando subida";
    document.getElementById("estado_test").innerHTML = estado;
    //estado = "Finalizado" + (tw < 1.5*refrescoBajada ? "." : "_");
    showEstadoBajada(true);
    ponVelo(0);
    iniciarSubidas_1();
    return;
  }
  showEstadoBajada();
  bytesBajada1 = bytesBajada;
}

// -------------------------

function refrescarSubidas() {
  var ahora = Date.now();
  var du = (ahora - u1);
  if (du > uw) {
    uw = du;
  }
  u1 = ahora;
  tiempoSubida = (u1 - u0);
  var t = 0;
  for (var i in subidas) {
    if (subidas[i].fin) {
      t += subidas[i].total;
    } else if (tiempoSubida > 0 && subidas[i].total > 0) {
      // t += subidas[i].total * Math.min(tiempoSubida, duracionSubida) / duracionSubida * 0.1;
      t += subidas[i].total * Math.min(tiempoSubida, duracionSubida) / duracionSubida;
    }
  }
  bytesSubida = t;
  if (cancelado) {
    estado = "Cancelado";
    document.getElementById("estado_test").innerHTML = estado;
    document.form1.botonIniciar.disabled = false;
    document.form1.botonHistorico.disabled = false;
    document.form1.botonCancelar.disabled = true;
  } else if (tiempoSubida <= duracionSubida && !finU) {
    setTimeout(refrescarSubidas, refrescoSubida);
    estado = "Midiendo subida";
    document.getElementById("estado_test").innerHTML = estado;
  } else {
    finU = true;
    if (haySubidasActivas()) {
      if (tiempoSubida > (duracionSubida + tiempoFinalizandoSubida)) {
        estado = "Finalizado.";
        finalizarSubidas();
        showEstadoSubida(true);
        grabarResultados();
        ponVelo(0);
        aTextoSubida = {};
        return;
      } else {
        estado = "Finalizando subida";
        document.getElementById("estado_test").innerHTML = estado;
        setTimeout(refrescarSubidas, refrescoSubida);
      }
    } else {
      showEstadoSubida(true);
      grabarResultados();
      ponVelo(0);
      return;
    }
  }
  showEstadoSubida();
  bytesSubida1 = bytesSubida;
}

// -------------------------

function grabarResultados() {
  var oXML = null;
  if (window.XMLHttpRequest) {
    oXML = new XMLHttpRequest();
  } else if (window.ActiveXObject) {
    oXML = new ActiveXObject("Msxml2.XMLHTTP");
  } else {
    alert("Su navegador no soporta esta opción");
    return false;
  }

  var bytesBajada_ = bytesBajada - bytesBajada0;
  var tiempoBajada_ = tiempoBajada - tiempoBajada0;
  // console.log("bytesBajada=" + bytesBajada + " bytesBajada0=" + bytesBajada0 + " -> bytesBajada_=" + bytesBajada_);
  // console.log("tiempoBajada=" + tiempoBajada + " tiempoBajada0=" + tiempoBajada0 + " -> tiempoBajada_=" + tiempoBajada_);
  var url = "movispeed_grabar.php?bytes_bajada=" + bytesBajada_ + "&tiempo_bajada=" + tiempoBajada_ + "&bytes_subida=" + bytesSubida + "&tiempo_subida=" + tiempoSubida + "&tiempo_ping=" + tiempo_ping + "&jitter=" + jitter + "&so=Movispeed5";
  if (nsa != "") {
    url += "&nsa=" + encodeURIComponent(nsa);
  }

  oXML.open('get', url, true);
  oXML.onreadystatechange = function () {
    recibirResultadoGrabar(oXML);
  }
  oXML.send(null);
}

// -------------------------

function recibirResultadoGrabar(oXML) {
  if (oXML.readyState == 4) {
    if (oXML.status == 200 || oXML.status == 0) {
      finTest();
    }
  }
}

// -------------------------

function finTest() {
  estado = "Finalizado";
  document.getElementById("estado_test").innerHTML = estado;
  document.form1.botonIniciar.disabled = false;
  document.form1.botonHistorico.disabled = false;
  document.form1.botonCancelar.disabled = true;
  aTextoSubida = {};
}

// -------------------------


function haySubidasActivas() {
  var t = false;
  for (var i in subidas) {
    if (!subidas[i].fin) {
      t = true;
      break;
    }
  }
  return t;
}

function hayDescargasActivas() {
  var t = false;
  for (var i in bajadas) {
    if (!bajadas[i].fin) {
      t = true;
      //console.log("Hay activo=" + i + " " + JSON.stringify(bajadas));
      break;
    }
  }
  return t;
}

// -------------------------

function updateTiempoPing(nuevoTiempoPing) {
  if (tiempo_ping <= 0) {
    tiempo_ping = nuevoTiempoPing;
  } else if (tiempo_ping > 0 && nuevoTiempoPing < tiempo_ping) {
    tiempo_ping = nuevoTiempoPing;
  }
}

// -------------------------

function repeat_1(pattern, count) {
  if (count < 1)
    return '';
  var result = '';
  while (count > 1) {
    if (count & 1)
      result += pattern;
    count >>= 1, pattern += pattern;
  }
  return result + pattern;
}

// -------------------------

function repeat(str, num) {
  var result = '';
  while (true) {
    if (num & 1) { // (1)
      result += str;
    }
    num >>>= 1; // (2)
    if (num <= 0)
      break;
    str += str;
  }
  return result;
}

// -------------------------

function addCommas(nStr) {
  nStr += '';
  x = nStr.split('.');
  x1 = x[0];
  x2 = x.length > 1 ? '.' + x[1] : '';
  var rgx = /(\d+)(\d{3})/;
  while (rgx.test(x1)) {
    x1 = x1.replace(rgx, '$1' + '.' + '$2');
  }
  return x1 + x2;
}

// -------------------------

function clearTable() {
  tiempoBajada = -1;
  tiempoSubida = -1;
  bytesBajada = -1;
  bytesSubida = -1;
  document.getElementById("estado_test").innerHTML = "No iniciado";
  //document.getElementById("tiempoBajada").innerHTML = "-";
  //document.getElementById("bytesBajada").innerHTML = "-";
  //document.getElementById("velBajada").innerHTML = "-";
  //document.getElementById("tiempoSubida").innerHTML = "-";
  //document.getElementById("bytesSubida").innerHTML = "-";
  //document.getElementById("velSubida").innerHTML = "-";

  var progress_izq_1 = document.getElementById("progress_izq_1");
  progress_izq_1.setAttribute("x2", 60);
  var progress_izq_2 = document.getElementById("progress_izq_2");
  progress_izq_2.setAttribute("x1", 60);
  var progress_der_1 = document.getElementById("progress_der_1");
  progress_der_1.setAttribute("x2", 530);
  var progress_der_2 = document.getElementById("progress_der_2");
  progress_der_2.setAttribute("x1", 530);
  document.getElementById('textoIzquierda').textContent = "0";
  document.getElementById('unidadesIzquierda').textContent = "bps";
  document.getElementById('textoDerecha').textContent = "0";
  document.getElementById('unidadesDerecha').textContent = "bps";
}

// -------------------------

function basename(url) {
  var t;
  var pos = url.lastIndexOf("/");
  if (pos > 0) {
    t = url.substring(0, pos);
  } else {
    t = url;
  }
  //alert("basename=" + t);
  return t;
}

// -------------------------

function getGrados(velo) {
  var t;
  if (velo <= 0) {
    t = 58;
  } else if (velo <= 1000) {
    t = 58 + (78 - 58) * (velo - 0) / (1000 - 0);
  } else if (velo <= 3000) {
    t = 79 + (97 - 78) * (velo - 1000) / (3000 - 1000);
  } else if (velo <= 6000) {
    t = 97 + (119 - 97) * (velo - 3000) / (6000 - 3000);
  } else if (velo <= 10000) {
    t = 119 + (139 - 119) * (velo - 6000) / (10000 - 6000);
  } else if (velo <= 20000) {
    t = 138 + (160 - 138) * (velo - 10000) / (20000 - 10000);
  } else if (velo <= 30000) {
    t = 160 + (181 - 160) * (velo - 20000) / (30000 - 20000);
  } else if (velo <= 50000) {
    t = 181 + (201 - 181) * (velo - 30000) / (50000 - 30000);
  } else if (velo <= 80000) {
    t = 201 + (221 - 201) * (velo - 50000) / (80000 - 50000);
  } else if (velo <= 100000) {
    t = 221 + (242 - 221) * (velo - 80000) / (100000 - 80000);
  } else if (velo <= 300000) {
    t = 242 + (262 - 242) * (velo - 100000) / (300000 - 100000);
  } else if (velo <= 600000) {
    t = 262 + (282 - 262) * (velo - 300000) / (600000 - 300000);
  } else if (velo <= 1000000) {
    t = 282 + (302 - 282) * (velo - 600000) / (1000000 - 600000);
  } else {
    t = 302;
  }
  return t;
}
// -------------------------

function dibujarAguja(grados) {
  var largo = 0.38 * Math.min(width, height);
  var x1 = (width / 2 + 23 * Math.sin(-grados * Math.PI / 180)) - 2;
  var y1 = (height / 2 + 23 * Math.cos(grados * Math.PI / 180)) - 2;
  var x2 = (width / 2 + largo * Math.sin(-grados * Math.PI / 180)) - 2;
  var y2 = (height / 2 + largo * Math.cos(grados * Math.PI / 180)) - 3;

  //console.log("x1=" + x1 + "y1=" + y1 + "x2=" + x2 + "y2=" + y2);
  var aguja = document.getElementById("agujaMovispeed");
  aguja.setAttribute("x1", Math.floor(x1));
  aguja.setAttribute("y1", Math.floor(y1));
  aguja.setAttribute("x2", Math.floor(x2));
  aguja.setAttribute("y2", Math.floor(y2));
}

// -------------------------

function ponVelo(velo) {
  if (cancelado) {
    velo = 0;
  }
  grados = getGrados(velo / 1000);
  document.getElementById('textoCentro').textContent = (velo / 1000000).toString().slice(0, 5);
  ponGrados(grados, velo);
}

// -------------------------

function ponGrados(grados, velo) {
  var maxGiro = 25;
  var dt;
  if (grados > gradosIndicados + maxGiro) {
    dt = Math.round(Math.random() * maxGiro);
    gradosIndicados += dt;
  } else if (grados < gradosIndicados - maxGiro) {
    dt = -Math.round(Math.random() * maxGiro);
    gradosIndicados += dt;
  } else {
    dt = grados - gradosIndicados;
    gradosIndicados = grados;
  }
  dibujarAguja(gradosIndicados);
  //console.log("velo=" + velo + " ; grados=" + grados + " gradosIndicados=" + gradosIndicados + " dt=" + dt);
  if (gradosIndicados != grados && velo == 0) {
    setTimeout(function () {
      ponVelo(velo)
    }, 100);
  }
}

// -------------------------

function verHistorico() {
  window.location = "movispeed_histo.php?v=5";
}

// -------------------------

function buscarPorIp() {
  //alert("Buscar por IP: " + perfil);
}

// -------------------------

(function () {
  var requestAnimationFrame = window.requestAnimationFrame || window.mozRequestAnimationFrame ||
          window.webkitRequestAnimationFrame || window.msRequestAnimationFrame;
  window.requestAnimationFrame = requestAnimationFrame;
})();

// -------------------------
