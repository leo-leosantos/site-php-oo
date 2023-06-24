<?php

if(!defined('C7E3L8K9E5')){
    header("Location: /site");
 
    die("Not found");
 }

 echo " View da pagina Home </br>";




extract($this->data);
echo "ID: $id<br>";

echo "TITLE: $title_top<br>";
echo "DESCRIÇÂO: $description_top<br>";

