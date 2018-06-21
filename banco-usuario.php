<?php
function buscaUsuario($conexao, $email, $senha) {
    $query = "select * from usuario where email='{$email}' and senha='{$senha}'";
    $resultado = mysqli_query($conexao, $query);
    $usuario = mysqli_fetch_assoc($resultado);
    return $usuario;
}

function buscaTipo($conexao, $email) {
	$query = "select tipo from usuario where email='{$email}'";
	$resultado = mysqli_query($conexao, $query);
    $tipo = mysqli_fetch_assoc($resultado);
    return $tipo;
}

function insereUsuario($conexao, $email, $senha, $tipo, $nome) {

    $query = "insert into usuario (email, senha, tipo, nome) values ('{$email}', '{$senha}', {$tipo}, '{$nome}')";
    return mysqli_query($conexao, $query);
}