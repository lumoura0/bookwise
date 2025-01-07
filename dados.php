<?php

$db = new PDO('sqlite:database.sqlite');

$query = $db->query("select * from livros");

$livros = $query->fetchAll();


// $livros = [
//     ['id' => 1, 'titulo' => 'Senhor dos Anéis', 'autor' => 'J.R.R. Tolkien', 'descricao' => 'A terra Média'],
//     ['id' => 2, 'titulo' => '1984', 'autor' => 'George Orwell', 'descricao' => 'O segredo do sucesso'],
//     ['id' => 3, 'titulo' => 'A Cidade dos Sonhos', 'autor' => 'Miguel de Cervantes', 'descricao' => 'Uma obra que mudou a vida de muitos'],
//     ['id' => 4, 'titulo' => 'O Senhor dos Anéis - A Sociedade do Anel', 'autor' => 'J.R.R. Tolkien', 'descricao' => 'A terra Média'],
//     ['id' => 5, 'titulo' => 'A Odiseia', 'autor' => 'Homero', 'descricao' => 'Uma obra que mudou a vida de muitos'],
//     ['id' => 6, 'titulo' => 'O Pequeno Príncipe', 'autor' => 'J.R.R. Tolkien', 'descricao' => 'A terra Média'],
// ];
