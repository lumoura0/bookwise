<?php

class Flash
{

    public function push($chave, $valor)
    {
        $_SESSION["flash_$chave"] = $valor;
    }

    public function get($chave)
    {
        if (!isset($_SESSION["flash_$chave"])) {
            return false;
        }

        $valor = $_SESSION["flash_$chave"];

        unset($_SESSION["flash_$chave"]);

        return $valor;
    }
}
