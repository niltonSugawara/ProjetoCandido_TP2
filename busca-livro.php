<?php include("cabecalho.php");
      include("conecta.php");
      include("banco-livro.php");

$parametro = $_POST['parametro'];
buscaLivroParametro($conexao, $parametro);

header("Location: livro-lista.php?parametrizado=true");
die();
?>