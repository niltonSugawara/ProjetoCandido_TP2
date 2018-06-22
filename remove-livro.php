<?php include("cabecalho.php");
      include("conecta.php");
      include("banco-livro.php");

$id = $_POST['id'];
removeLivro($conexao, $id);

header("Location: livro-lista.php?removido=true");
die();
?>