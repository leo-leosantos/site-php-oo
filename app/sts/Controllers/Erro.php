<?php

namespace Sts\Controllers;

if(!defined('C7E3L8K9E5')){
    header("Location: /site");
 
    die("Not found");
 }

 use Core\ConfigView;

class Erro  //CONTROLLER

{
    private     ?array  $data;
    public function index()
    {

        $this->data = null;
        $loadView = new ConfigView("sts/Views/erro/erro", $this->data);
        $loadView->loadView();
    }
}