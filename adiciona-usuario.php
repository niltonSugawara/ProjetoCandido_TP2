<?php 
	include("cabecalho.php"); 
	include("conecta.php");
	include("logica-usuario.php");
	include("banco-usuario.php");
	
	verificarAdm($_COOKIE["tipo_usuario"]);
?>

<?php
			$nome  = $_POST["nome"];
			$email = $_POST["email"];
			$senha = $_POST["senha"];
			
			if(array_key_exists('adm', $_POST)) {
				$tipo = 1;
			} else {
				$tipo = 2;
			}

		if(insereUsuario($conexao, $email, $senha, $tipo, $nome)) {
	?>
	<p class="alert-success">Usuário <?= $email; ?> adicionado com sucesso!</p>
	<?php
		} else {
		$msg = mysqli_error($conexao);
	?>
	<p class="alert-danger">O usuário <? = $email; ?> não foi adicionado: <?= $msg ?></p>
	<?php
		}
	?>

<?php include("rodape.php"); ?>