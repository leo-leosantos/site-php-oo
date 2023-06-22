<?php
//constante 

define('C7E3L8K9E5', true);

use Core\ConfigController;

require './vendor/autoload.php';




$url = new ConfigController();
$url->loadPage();
