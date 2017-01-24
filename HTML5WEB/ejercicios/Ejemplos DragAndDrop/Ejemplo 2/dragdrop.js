function iniciar(){
	origen1=document.getElementById('imagen');
	origen1.addEventListener('dragstart', arrastrado, false);
	origen1.addEventListener('dragend', finalizado, false);
	soltar=document.getElementById('cajasoltar');
	soltar.addEventListener('dragenter', entrando, false);
	soltar.addEventListener('dragleave', saliendo, false);
	soltar.addEventListener('dragover', function(e){
	e.preventDefault(); }, false);
	soltar.addEventListener('drop', soltado, false);
}
function entrando(e){
	e.preventDefault();
	soltar.style.background='rgba(0,150,0,.2)';
}
function saliendo(e){
	e.preventDefault();
	soltar.style.background='#FFFFFF';
}
function finalizado(e){
	elemento=e.target;
	elemento.style.visibility='hidden';
}
function arrastrado(e){
	var codigo='<img src="'+origen1.getAttribute('src')+'">';
	e.dataTransfer.setData('Text', codigo);
}
function soltado(e){
	e.preventDefault();
	soltar.style.background='#FFFFFF';
	soltar.innerHTML=e.dataTransfer.getData('Text');
}
window.addEventListener('load', iniciar, false);


