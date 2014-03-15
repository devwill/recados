// Conta caracteres
function ContaCaracteres(){
   intCaracteres = 400 - document.mural.telefone.value.length;
   if (intCaracteres > 0){
      document.mural.caracteres.value = intCaracteres;
      return true;
   }
   else {
      document.mural.caracteres.value = 0;
      document.mural.telefone.value = document.mural.telefone.value.substr(0,400)
      return false;
   }
}

// Imprime os emoticons na tela
function emoticon(text) {
	var txtarea = document.mural.telefone;
	text = ' ' + text + ' ';
	if (txtarea.createTextRange && txtarea.caretPos) {
		var caretPos = txtarea.caretPos;
		caretPos.text = caretPos.text.charAt(caretPos.text.length - 1) == ' ' ? text + ' ' : text;
		txtarea.focus();
	}
	else {
		txtarea.value  += text;
		txtarea.focus();
	}
}

// Continuação
function over(src,clrover) {
    if (!src.contains(event.fromElement)) {	src.style.cursor = 'default'; src.bgColor = clrover; }
}
function out(src,clrIn) {
	if (!src.contains(event.toElement)) { src.style.cursor = 'default';	src.bgColor = clrIn; }
}

// Abre a Ajuda
function abrir(URL) {
    var altura   = 460;
    var largura  = 460;
    var esquerda = 50;
    var topo     = 100;
    window.open(URL,'abrir', 'width='+largura+', height='+altura+', top='+topo+', left='+esquerda+', toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=auto, resizable=no, fullscreen=no');
}

// Abre o Form
function abrir_form(URL) {
    var altura   = 460;
    var largura  = 460;
    var esquerda = 50;
    var topo     = 100;
    window.open(URL,'abrir_form', 'width='+largura+', height='+altura+', top='+topo+', left='+esquerda+', toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=auto, resizable=no, fullscreen=no');
}

// Função proteção contra flood
function flood() {
    alert ('Você já enviou uma mensagem, por favor tente mais tarde!!');
}	