<?php

if(!defined('C7E3L8K9E5')){
    header("Location: /site");
 
    die("Not found");
 }

 echo " View da pagina Home </br>";




if(!empty($this->data[0])){
    extract($this->data[0]);
    echo "ID: $id<br>";
    echo "TITLE: $title_top<br>";
    echo "DESCRIÇÂO: $description_top<br>";
}else{
    echo "<p style='color: #f00;'> Error: Nenhum dado encontrado </p>";
}


