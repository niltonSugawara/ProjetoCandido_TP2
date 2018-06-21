<?php
	include("cabecalho.php"); 
	include("conecta.php");
	include("banco-categoria.php");
	include("logica-usuario.php");
	
	verificaUsuario();

	$categorias = listaCategorias($conexao);
?>

<html>
    <form action="adiciona-livro.php" method="post">
        <table class="table">
            <tr>
                <td>Título</td>
                <td><input type="text" name="titulo" /></td>
            </tr>

            <tr>
                <td>Autor</td>
                <td><input type="text" name="autor" /></td>
            </tr>
			
			<tr>
                <td>Edição</td>
                <td><input type="number" name="edicao" /></td>
            </tr>
			
			<tr>
				<td>Exemplar</td>
                <td><input type="radio" name="exemplar" value="local"/>Uso Local</td>
                <td><input type="radio" name="exemplar" value="alugavel"/>Alugável</td>
            </tr>
			
			<tr>
				<td>Quantidade</td>
				<td><input type="number" name="qtExemplar" /></td>
			<tr>
				<td>Descrição</td>
				<td><textarea name="descricao" class="form-control"></textarea></td>
			</tr>
			
			<tr>			
				<td>Categoria</td>
			<td>
				<select name="categoria_id">
					<?php foreach($categorias as $categoria) : ?>
						<option value="<?=$categoria['id']?>"><?=$categoria['nome']?>	</option>
					<?php endforeach ?>
				</select>
    </td>
</tr>

            <tr>
                <td><input type="submit" value="Cadastrar" /></td>
            </tr>
			

        </table>

    </form>
</html>

<?php include("rodape.php"); ?>