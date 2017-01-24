function iniciar(){
	var imagenes=document.querySelectorAll('#cajaimagenes > img');
	for(var i=0; i<imagenes.length; i++){
		imagenes[i].addEventListener('dragstart', arrastrado, false);
		imagenes[i].addEventListener('dragend', finalizado, false);
	}
	soltar=document.getElementById('lienzo');
	lienzo=soltar.getContext('2d');
	soltar.addEventListener('dragenter', function(e){
		e.preventDefault(); }, false);
	soltar.addEventListener('dragover', function(e){
		e.preventDefault(); }, false);
	soltar.addEventListener('drop', soltado, false);
}
function finalizado(e){
	elemento=e.target;
	elemento.style.visibility='hidden';
}
function arrastrado(e){
	elemento=e.target;
	e.dataTransfer.setData('Text', elemento.getAttribute('id'));
	e.dataTransfer.setDragImage(e.target, 0, 0);
}
function soltado(e){
	id = e.dataTransfer.getData('Text');
	
	imagen=document.getElementById(id).src;

	var elemento=new Image();
	elemento.src=imagen;
	
	var posx=e.pageX-soltar.offsetLeft;
	var posy=e.pageY-soltar.offsetTop;
	lienzo.drawImage(elemento,posx,posy);
}
window.addEventListener('load', iniciar, false);

