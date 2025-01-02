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
    echo "<pre>";
    var_dump($dump);
    echo "</pre>";
    die();
}

function abort($code)
{
    http_response_code($code);
    // echo "Página não existe";
    view($code);
    die();
}
