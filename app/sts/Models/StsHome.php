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


        $viewHomeTop =  new StsRead();
        $viewHomeTop->fullRead("SELECT title_one_top, title_two_top ,title_three_top, link_btn_top, txt_btn_top,image_top
                            FROM  sts_homes_tops 
                            WHERE id=:id LIMIT :limit", "id=1&limit=1");
        $this->data['top'] =   $viewHomeTop->getResult();


        $viewHomeService =  new StsRead();
        $viewHomeService->fullRead("SELECT serv_title, serv_icon_one ,serv_title_one, serv_desc_one,
                                            serv_icon_two ,serv_title_two, serv_desc_two,
                                            serv_icon_three ,serv_title_three, serv_desc_three
                            FROM  sts_homes_services 
                            WHERE id=:id 
                            LIMIT :limit", "id=1&limit=1");

        $this->data['serv'] =   $viewHomeService->getResult();


        $viewHomePremium =  new StsRead();
        $viewHomePremium->fullRead("SELECT prem_title, prem_subtitle, prem_desc, prem_image,
                                            prem_btn_text, prem_btn_link
                            FROM  sts_homes_premiums 
                            WHERE id=:id 
                            LIMIT :limit", "id=1&limit=1");



        $this->data['prem'] =   $viewHomePremium->getResult();



        return $this->data;
    }
}
