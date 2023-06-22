<?php

namespace Sts\Controllers;

if(!defined('C7E3L8K9E5')){
    header("Location: /site");
 
    die("Not found");
 }

 use Core\ConfigView;

class Home
{

    private     ?array  $data;
    public function index()
    {

        $this->data = [];
        $loadView = new ConfigView("sts/Views/home/home", $this->data);
        $loadView->loadView();
    }
}