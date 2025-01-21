<?php
$livro = Livro::get($_GET['id']);


$avaliacoes = $database
    ->query("select * from avaliacoes where livro_id = :id", Avaliacao::class, ['id' => $_GET['id']])
    ->fetchAll();

view('livro', compact('livro', 'avaliacoes'));
