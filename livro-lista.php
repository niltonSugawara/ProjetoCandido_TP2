<?php include("cabecalho.php");
      include("conecta.php");
      include("banco-livro.php"); ?>

<?php if(array_key_exists("removido", $_GET) && $_GET['removido']=='true') { ?>
    <p class="alert-success">Livro apagado com sucesso.</p>
<?php } ?>

<table class="table table-striped table-bordered">
	<tr>
        <td>Título</td>
        <td>Autor</td>
		<td>Edição</td>
	    <td>Categoria</td>
    </tr>
    <?php
        $livros = listaLivro($conexao);
        foreach($livros as $livro) :
    ?>
    <tr>
        <td><?= $livro['titulo'] ?></td>
        <td><?= $livro['autor'] ?></td>
		<td><?= $livro['edicao'] ?></td>
	    <td><?= $livro['categoria_nome'] ?></td>
		<td>
			<a class="btn btn-primary" href="livro-altera-formulario.php?id=<?=$livro['id']?>">alterar</a>
        <td>
            <form action="remove-livro.php" method="post">
				<input type="hidden" name="id" value="<?=$livro['id']?>" />
				<button class="btn btn-danger">remover</button>
			</form>
        </td>
    </tr>
    <?php
        endforeach
    ?>
</table>

<?php include("rodape.php"); ?>