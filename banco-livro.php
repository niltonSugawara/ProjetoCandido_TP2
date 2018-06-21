<?php
function listaLivro($conexao) {
    $produtos = array();
    $resultado = mysqli_query($conexao, "select p.*, c.nome as categoria_nome from livro as p join categoria as c on p.categoria_id = c.id");

    while($produto = mysqli_fetch_assoc($resultado)) {
        array_push($produtos, $produto);
    }

    return $produtos;
}

function insereLivro($conexao, $titulo, $autor, $edicao, $exemplar, $qtExemplar, $descricao, $categoria_id){
    $query = "insert into livro (titulo, autor, edicao, exemplar, qtExemplar, descricao, categoria_id) values ('{$titulo}', '{$autor}', {$edicao}, '{$exemplar}', {$qtExemplar},'{$descricao}', {$categoria_id})";
    return mysqli_query($conexao, $query);
}

function removeLivro($conexao, $id) {
    $query = "delete from livro where id = {$id}";
    return mysqli_query($conexao, $query);
}

function buscaLivro($conexao, $id) {
    $query = "select * from livro where id = {$id}";
    $resultado = mysqli_query($conexao, $query);
    return mysqli_fetch_assoc($resultado);
}

function alteraLivro($conexao, $id, $titulo, $autor, $edicao, $exemplar, $qtExemplar, $descricao, $categoria_id) {
    $query = "update livro set titulo = '{$titulo}', autor = '{$autor}', edicao = {$edicao}, exemplar = '{$exemplar}', qtExemplar = {$qtExemplar}, descricao = '{$descricao}', categoria_id = {$categoria_id}  where id = '{$id}'";
    return mysqli_query($conexao, $query);
}