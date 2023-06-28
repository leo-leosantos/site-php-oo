<?php

namespace Sts\Models;

if (!defined('C7E3L8K9E5')) {
    header("Location: /site");

    die("Not found");
}

use \Sts\Models\helper\StsRead;

class StsHome
{
    private ?array $data;

    public function index(): ?array
    {


        $viewHome =  new StsRead();
        //select todas as  colunas
        //$viewHome->exeRead("sts_homes_tops", "WHERE id=:id LIMIT :limit", "id=1&limit=1");
        //select as colunas que eu quero
        $viewHome->fullRead("SELECT id, title_top, description_top , link_btn_top, txt_btn_top, image 
                            FROM  sts_homes_tops 
                            WHERE id=:id LIMIT :limit", "id=1&limit=1");
        $this->data =   $viewHome->getResult();

        // var_dump($this->data);

        //$this->data =[];
        return $this->data;
    }
}
