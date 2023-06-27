<?php

namespace Sts\Controllers;

if (!defined('C7E3L8K9E5')) {
    header("Location: /site");

    die("Not found");
}


use Core\ConfigView;
use Sts\Models\StsHome;

class Home //CONTROLLER
{

    private     ?array  $data;
    public function index()
    {
        $home = new StsHome();
        $this->data =  $home->index();
        $loadView = new ConfigView("sts/Views/home/home", $this->data);
        $loadView->loadView();
    }
}
