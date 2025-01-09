<?php
$pesquisar = $_REQUEST['pesquisar'] ?? '';

$livros = (new DB)->livros($pesquisar);

view('index', [
    'livros' => $livros
]);
