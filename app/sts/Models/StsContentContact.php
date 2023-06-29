<?php

namespace Sts\Models;

if (!defined('C7E3L8K9E5')) {
    header("Location: /site");

    die("Not found");
}

use \Sts\Models\helper\StsRead;

class StsContentContact
{
    private ?array $data;

    public function index(): ?array
    {

        $viewContentContact =  new StsRead();
        $viewContentContact->fullRead("SELECT title_contact, desc_contact, icon_company, title_company,
                                        desc_company, icon_address, title_address, desc_address, icon_email, title_email, desc_email, title_form
                            FROM  sts_contents_contacts 
                            WHERE id=:id 
                            LIMIT :limit", "id=1&limit=1");

        $this->data =   $viewContentContact->getResult();

        return $this->data;
    }
}
