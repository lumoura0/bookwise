<?php
$pesquisar = $_REQUEST['pesquisar'] ?? '';

$livros = $database->query(
    query: "select * from livros where titulo like :filtro",
    class: Livro::class,
    params: ['filtro' => "%$pesquisar%"]
)->fetchAll();

view('index', [
    'livros' => $livros
]);
