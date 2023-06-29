<?php

namespace Sts\Controllers;

if (!defined('C7E3L8K9E5')) {
    header("Location: /site");

    die("Not found");
}

use Core\ConfigView;
use Sts\Models\StsFooter;
use Sts\Models\StsContato;
use Sts\Models\StsContentContact;

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


        $contentContact = new StsContentContact();
        $this->data['content'] =  $contentContact->index();

        $footer = new StsFooter();
        $this->data['footer'] =  $footer->index();
        
        $loadView = new ConfigView("sts/Views/contato/contato", $this->data);
        $loadView->loadView();
    }
}
