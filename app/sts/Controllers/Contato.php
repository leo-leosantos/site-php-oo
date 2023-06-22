<?php

namespace Sts\Controllers;

if(!defined('C7E3L8K9E5')){
    header("Location: /site");
 
    die("Not found");
 }
 
 use Core\ConfigView;

class Contato 
{
    private     ?array  $data;
    public function index()
    {
        //se for uma string passar dentro de um array
        // $this->data = ["lorem ipsum dolor sit"];
         $this->data = null;

        $loadView = new ConfigView("sts/Views/contato/contato", $this->data);
        $loadView->loadView();
    }
}