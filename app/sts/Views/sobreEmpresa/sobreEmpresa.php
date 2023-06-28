<?php

if(!defined('C7E3L8K9E5')){
    header("Location: /site");
 
    die("Not found");
 }
echo "view pagina sobre empresa</br>";



if(!empty($this->data['about-company'])) {

    foreach($this->data['about-company'] as $about_company){
           extract($about_company);

           echo "<hr>";
           echo "Title: " . $title ."</br>";
           echo "Description: " . $description ."</br>";
           echo "Image: " . $image ."</br>";
           echo "<hr>";

    }

}else{
    echo "<h6 class='text-danger'>nenhum registro encontrado</h6>";
}

?>


