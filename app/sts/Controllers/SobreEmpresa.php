<?php

namespace Sts\Controllers;

if(!defined('C7E3L8K9E5')){
    header("Location: /site");
 
    die("Not found");
 }
 
use Core\ConfigView;

class SobreEmpresa  //CONTROLLER

{
    private     ?array  $data;
    public function index()
    {

        $this->data = [];
        $loadView = new ConfigView("sts/Views/sobreEmpresa/sobreEmpresa", $this->data);
        $loadView->loadView();
    }
}