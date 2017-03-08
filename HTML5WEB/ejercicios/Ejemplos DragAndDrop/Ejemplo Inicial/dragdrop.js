function iniciar(){
	origen1=document.getElementById('imagen');
	
	origen1.addEventListener('dragstart', arrastrado, false);
	
	destino=document.getElementById('cajasoltar');
	
	destino.addEventListener('dragenter', function(e){
		e.preventDefault(); }, false);
	destino.addEventListener('dragover', function(e){
		e.preventDefault(); }, false);
		
	destino.addEventListener('drop', soltado, false);
}
function arrastrado(e){
	var codigo='<img src="'+origen1.getAttribute('src')+'">';
	e.dataTransfer.setData('Text', codigo);
}
function soltado(e){
	e.preventDefault();
	destino.innerHTML=e.dataTransfer.getData('Text');
}
window.addEventListener('load', iniciar, false);

