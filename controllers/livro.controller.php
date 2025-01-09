<?php
$id = $_REQUEST['id'];

$db = new DB;
$livro = $db->livro($id);

view('livro', compact('livro'));
