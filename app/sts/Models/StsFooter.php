<?php

namespace Sts\Models;

if (!defined('C7E3L8K9E5')) {
    header("Location: /site");

    die("Not found");
}

use \Sts\Models\helper\StsRead;

class StsFooter
{
    private ?array $data;

    public function index(): ?array
    {
        $viewFooter =  new StsRead();
        $viewFooter->fullRead("SELECT footer_desc, footer_text_link, footer_link
                            FROM  sts_footers 
                            WHERE id=:id 
                            LIMIT :limit", "id=1&limit=1");
         $this->data =   $viewFooter->getResult();

        return $this->data;
    }


}
