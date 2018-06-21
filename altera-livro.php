<?php include("cabecalho.php");         
 include("conecta.php");            
 include("banco-livro.php"); 

$id = $_POST['id'];
$titulo = $_POST["titulo"];
$autor = $_POST["autor"];
$edicao = $_POST["edicao"];
			
if (isset($_POST['exemplar'])) {
	$exemplar = $_POST['exemplar'];
}
else{
	$exemplar = null;
}
			
$qtExemplar = $_POST["qtExemplar"];
$descricao = $_POST["descricao"];
$categoria_id = $_POST['categoria_id'];

if(alteraLivro($conexao, $id, $titulo, $autor, $edicao, $exemplar, $qtExemplar, $descricao, $categoria_id)) { ?>
    <p class="text-success">O Livro <?= $titulo ?> foi alterado.</p>
<?php } else {
    $msg = mysqli_error($conexao);
?>
    <p class="text-danger">O livro <?= $titulo ?> não foi alterado: <?= $msg?></p>
<?php
}
?>

<?php include("rodape.php"); ?>