<?php

function view($view, $data = [])
{
    foreach ($data as $key => $value) {
        $$key = $value;
    }
    require "views/template/app.php";
}

function dd(...$dump)
{
    dump($dump);
    die();
}

function dump(...$dump)
{
    echo "<pre>";
    var_dump($dump);
    echo "</pre>";
}

function abort($code)
{
    http_response_code($code);
    // echo "Página não existe";
    view($code);
    die();
}

function flash()
{
    return new Flash;
}

function config($chave = null)
{
    $config = require "config.php";

    if (strlen($chave) > 0) {
        return $config[$chave];
    }

    return $config;
}


function auth()
{
    if (!isset($_SESSION['auth'])) {
        return null;
    }
    return $_SESSION['auth'];
}
