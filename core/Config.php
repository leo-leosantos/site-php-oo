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

        //credencias do banco  de Dados com docker
         define('HOST', 'mysql-srv-7' );//nome do host no docker
         define('USER','root');
         define('PASS','root');
         define('DBNAME','celke_site');
         define('PORT', 3306);
       
        //Email de contato suporte
        define('EMAILADM','leo_leosantos@yahoo.com.br');

    }
}