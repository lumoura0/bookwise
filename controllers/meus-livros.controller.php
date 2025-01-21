<?php

if (!auth()) {
    header('location: /');
    exit();
}

$livros = Livro::meus(auth()->id);

view('meus-livros', compact('livros'));
