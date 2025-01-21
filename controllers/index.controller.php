<?php

$livros = Livro::all($_REQUEST['pesquisar'] ?? '');

view('index', compact('livros'));
