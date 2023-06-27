<?php

namespace Sts\Controllers;

if (!defined('C7E3L8K9E5')) {
    header("Location: /site");

    die("Not found");
}

use Core\ConfigView;
use Sts\Models\StsContato;

class Contato  //CONTROLLER
{
    private  ?array  $data = null;
    private  ?array $dataForm;

    public function index(): void
    {

        $this->dataForm =   filter_input_array(INPUT_POST, FILTER_DEFAULT);

        if (!empty($this->dataForm['AddContMsg'])) {

            unset($this->dataForm['AddContMsg']);

            $createContactMsg = new StsContato();

            if ($createContactMsg->create($this->dataForm)) {
            } else {
                echo "Erro no cadastr";
                $this->data['form'] = $this->dataForm;
            }
        }

        $loadView = new ConfigView("sts/Views/contato/contato", $this->data);
        $loadView->loadView();
    }
}
