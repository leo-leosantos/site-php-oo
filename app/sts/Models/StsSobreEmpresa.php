<?php

namespace Sts\Models;

if (!defined('C7E3L8K9E5')) {
    header("Location: /site");

    die("Not found");
}

use \Sts\Models\helper\StsRead;

class StsSobreEmpresa
{
    private ?array $data;

    public function index(): ?array
    {

        $viewSobreEmpresa =  new StsRead();
    
        $viewSobreEmpresa->fullRead("SELECT id, title, description , image
                            FROM  sts_abouts_companies 
                            WHERE sts_situation_id=:sts_situation_id
                            ORDER BY id DESC
                            LIMIT :limit", "sts_situation_id=1&limit=10");
        $this->data =   $viewSobreEmpresa->getResult();


        return $this->data;
    }


    
}
