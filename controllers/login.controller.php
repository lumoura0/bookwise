<?php

$mensagem = $_REQUEST['mensagem'] ?? '';

view('login', compact('mensagem'));
// ['mensagem' => $mensagem]