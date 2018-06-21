<?php 
	include("cabecalho.php"); 
	include("conecta.php");
	include("banco-livro.php");
	include("logica-usuario.php");
	
	verificaUsuario();
?>

<?php
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

		if(insereLivro($conexao, $titulo, $autor, $edicao, $exemplar, $qtExemplar, $descricao, $categoria_id)) {
	?>
	<p class="alert-success">Livro <?= $titulo; ?> adicionado com sucesso!</p>
	<?php
		} else {
		$msg = mysqli_error($conexao);
	?>
	<p class="alert-danger">O livro <? = $nome; ?> não foi adicionado: <?= $msg ?></p>
	<?php
		}
	?>

<?php include("rodape.php"); ?>