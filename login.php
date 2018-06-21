<?php 
include("conecta.php");
include ("banco-usuario.php");
include("logica-usuario.php");

$usuario = buscaUsuario($conexao, $_POST["email"], $_POST["senha"]);
$tipo = buscaTipo($conexao, $_POST["email"]);
if($usuario == null) {
    header("Location: index.php?login=0");
} else {
    logaUsuario($usuario["email"]);
	tipaUsuario($usuario["tipo"]);
    header("Location: index.php?login=1");
}
die();