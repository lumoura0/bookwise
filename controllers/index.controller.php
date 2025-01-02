<?php
// Model
require 'dados.php';

view('index', [
    'livros' => $livros
]);
