<?php

namespace Sts\Models;

if (!defined('C7E3L8K9E5')) {
    header("Location: /site");

    die("Not found");
}

use \Sts\Models\helper\StsRead;

class StsContato
{
    private array $data;

    public function create(array $data): bool
    {
        $this->data = $data ;
        $_SESSION['msg'] = "<p class='tx-info'> Salvar mensagem</p>";
        return true;
    }
}
