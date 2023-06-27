<?php

namespace Sts\Models;

if (!defined('C7E3L8K9E5')) {
    header("Location: /site");

    die("Not found");
}

use Sts\Models\helper\StsCreate;

class StsContato
{
    private array $data;

    public function create(array $data): bool
    {
        $this->data = $data;
        $this->data['created'] = date("Y-m-d H:i:s");
        $createContactMsg =  new StsCreate();
        $createContactMsg->exeCreate("sts_contact_msgs", $this->data);

        if ($createContactMsg->getResult()) {
            $_SESSION['msg'] = "<p class='text-success'> Mensagem enviada com sucesso</p>";
            return true;
        } else {
            $_SESSION['msg'] = "<p class='text-danger'> Error no envio da mensagem</p>";
            return false;
        }
    }
}
