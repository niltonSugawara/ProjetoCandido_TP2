<?php

function usuarioEstaLogado() {
    return isset($_COOKIE["usuario_logado"]);
}

function verificaUsuario() {
  if(!usuarioEstaLogado()) {
     header("Location: index.php?falhaDeSeguranca=true");
     die();
  }
}

function verificarADM($tipo){
	if($tipo!=1){
		header("Location: index.php?falhaDeSeguranca=true");
		die();
	}
}

function usuarioLogado() {
    return $_COOKIE["usuario_logado"];
}

function logaUsuario($email) {
  setcookie("usuario_logado", $email);
}

function tipaUsuario($tipo) {
	setcookie("tipo_usuario", $tipo);
}