<?php include("cabecalho.php"); 
include("conecta.php");
include("banco-categoria.php");
include("banco-livro.php");

$id = $_GET['id'];
$livro = buscaLivro($conexao, $id);

$categorias = listaCategorias($conexao);
?>            
    <h1>Alterando Livro</h1>
    <form action="altera-livro.php" method="post">
        <table class="table">
            <tr>
                <td>Título</td>
                <td><input type="text" name="titulo" value="<?=$livro['titulo']?>"/></td>
            </tr>

            <tr>
                <td>Autor</td>
                <td><input type="text" name="autor" value="<?=$livro['autor']?>"/></td>
            </tr>
			
			<tr>
                <td>Edição</td>
                <td><input type="number" name="edicao" value="<?=$livro['edicao']?>"/></td>
            </tr>
			
			<tr>
				<td>Exemplar</td>
				<?php if ($livro['exemplar']="local"){ ?>"
                <td><input type="radio" name="exemplar" checked='checked' />Uso Local</td>
                <td><input type="radio" name="exemplar" />Alugável</td>
				<?php } else {?>
                <td><input type="radio" name="exemplar"td>
                <td><input type="radio" name="exemplar" checked='checked' />Alugável</td>
				<?php } ?>
            </tr>
			
			<tr>
				<td>Quantidade</td>
				<td><input type="number" name="qtExemplar" value="<?=$livro['qtExemplar']?>"/></td>
			<tr>
				<td>Descrição</td>
				<td><textarea class="form-control" name="descricao"><?=$livro['descricao']?></textarea></td>
			</tr>
			
			<tr>
				<td>Categoria</td>
				<td>
					<select name="categoria_id" class="form-control">
					<?php 

						foreach($categorias as $categoria) : 
							$essaEhACategoria = $livro['categoria_id'] == $categoria['id'];
							$selecao = $essaEhACategoria ? "selected='selected'" : "";

					?>
						<option 
							value="<?=$categoria['id']?>" <?=$selecao?>> <?=$categoria['nome']?>
						</option>
					<?php endforeach ?>
					</select>
				</td>
			</tr>
			<tr>
				<td>
					<input type="hidden" name="id" value="<?=$livro['id']?>" />
					<button class="btn btn-primary" type="submit">Alterar</button>
                </td>
			</tr>
        </table>
    </form>
<?php include("rodape.php"); ?>