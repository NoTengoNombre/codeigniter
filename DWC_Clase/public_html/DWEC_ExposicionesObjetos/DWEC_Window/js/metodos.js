function myAlert() {
	alert("Soy un alert, encantado de conocerte");
}

function myConfirm() {
	result = window.confirm("¿Quieres probar este dialogo?");
	if (result) {
		alert("Has aceptado");
	}
	else alert("Marica");
}

function myPrompt() {
	var mensaje = prompt("Introduce un número");
	alert(mensaje);
}
