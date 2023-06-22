<?php

namespace core;


if(!defined('C7E3L8K9E5')){
    header("Location: /site");
 
    die("Not found");
 }

abstract class  Config
{
    protected function config(): void
    {
        define('URL', 'http://localhost/site/');
        define('URLADM', 'http://localhost/adm/');
        define('CONTROLLER','Home');
        define('CONTROLLERRO','Erro');

        //credencias do banco  de Dados






        //Email de contato suporte
        define('EMAILADM','leo_leosantos@yahoo.com.br');

    }
}