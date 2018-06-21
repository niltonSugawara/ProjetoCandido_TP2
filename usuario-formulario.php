<?php
	include("cabecalho.php"); 
	include("conecta.php");
	include("logica-usuario.php");
	
	verificarAdm($_COOKIE["tipo_usuario"]);
?>

<html>
    <form action="adiciona-usuario.php" method="post">
        <table class="table">
			<tr>
                <td>Nome</td>
                <td><input type="text" name="nome" /></td>
            </tr>
			
            <tr>
                <td>E-mail</td>
                <td><input type="text" name="email" /></td>
            </tr>

            <tr>
                <td>Senha</td>
                <td><input type="text" name="senha" /></td>
            </tr>

			<tr>
				<td></td>
					<td><input type="checkbox" name="adm" value="true"> Administrador</td>
			</tr>

            <tr>
                <td><input type="submit" value="Cadastrar" /></td>
            </tr>
			

        </table>

    </form>
</html>

<?php include("rodape.php"); ?>