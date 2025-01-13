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
