(function(){
	var formulario=document.formulario,
	elementos=formulario.elements;
	//functions
	var validarInputs=function(){
		for(var i=0; i<elementos.length; i++){
			if(elementos[i].type=="text" || elementos[i].type=="password"){
				if(elementos[i].value==0){
					console.log('El campo ' + elementos[i].name + ' esta incompleto');
					elementos[i].className=elementos[i].className + ' error';
					return false;
				}else{
					elementos[i].className=elementos[i].className.replace(" error", "");
				}
			}
		}
	};
	var enviar=function(e){
		if(!validarInputs()){
			console.log('Falto validar los Inputs');
			//e.preventDefault();
		}else{
			console.log('Envia correctamente');
			//comentar linea cuando tengamos el formulario listo
			//e.preventDefault();
		}
	};
	//funciones blur y focus
	var focusInput=function(){
		this.parentElement.children[1].className="label active";
		this.parentElement.children[0].className=this.parentElement.children[0].className.replace("error", "");
	};
	var blurInput=function(){
		if(this.value<=0){
			this.parentElement.children[1].className="label";
			this.parentElement.children[0].className=this.parentElement.children[0].className+" error";
		}
	}
	//eventos
	formulario.addEventListener("submit", enviar);
	for(var i=0; i<elementos.length; i++){
		if(elementos[i].type=="text" || elementos[i].type=="password"){
			elementos[i].addEventListener("focus", focusInput);
			elementos[i].addEventListener("blur", blurInput);
		}
	}
}())