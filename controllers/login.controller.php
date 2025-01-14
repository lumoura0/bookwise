<?php

$mensagem = $_REQUEST['mensagem'] ?? '';

// 1. Receber o formulário com email e senha
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $senha = $_POST['senha'];


    // 2. FAzer uma consulta no banco de dados com o email e senha
    $usuario = $database->query(
        query: " select * 
        from usuarios
        where email = :email and
        senha = :senha",
        params: compact('email', 'senha')
    )->fetch();

    dd($usuario);

    //3. Se exister nós vamos adicionar na sessão que o usuário está autenticado
    //4. Mudar a informação no nosso navbar para mostrar o nome do usuário
}


view('login', compact('mensagem'));
// ['mensagem' => $mensagem]