<?php

namespace Sts\Controllers;

if(!defined('C7E3L8K9E5')){
    header("Location: /site");
 
    die("Not found");
 }
 
use Core\ConfigView;
use Sts\Models\StsSobreEmpresa;
use Sts\Models\StsFooter;

class SobreEmpresa  //CONTROLLER

{
    private     ?array  $data;
    public function index()
    {

        $aboutCompany =  new StsSobreEmpresa();
        $this->data['about-company'] =  $aboutCompany->index();

        $footer = new StsFooter();
        $this->data['footer'] =  $footer->index();

        $loadView = new ConfigView("sts/Views/sobreEmpresa/sobreEmpresa", $this->data);
        $loadView->loadView();
    }
}