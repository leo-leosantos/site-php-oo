<?php

namespace Core;

class ConfigController 
{
    private string $url;
    private array $urlArray;
    private string $urlController;
    private string $urlParameter;
    private string $urlSlugController;
    private array $format;

    public function __construct()
    {

        if(!empty(filter_input(INPUT_GET, 'url', FILTER_DEFAULT))){
            $this->url = filter_input(INPUT_GET, 'url', FILTER_DEFAULT);

            $this->clearUrl();
           $this->urlArray = explode("/", $this->url);


           if(isset($this->urlArray[0])){
            $this->urlController = $this->slugController($this->urlArray[0]);

           }else{
                $this->urlController = "Home";
           }

        }else{
            //echo "Acessar a pagina incial<br>";
            $this->urlController = "Home";

        }
        echo "Controller: {$this->urlController}<br>";
      
    }


    private function clearUrl()
    {
        //eliminar as tags
        $this->url  = strip_tags($this->url);
        //elminar os espaços em branco
        $this->url  = trim($this->url);
        //elminar a barra no final da url
        $this->url  = rtrim($this->url, "/");

        //Elminar caracteos
        $this->format['a'] = 'ÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜüÝÞßàáâãäåæçèéêëìíîïðñòóôõöøùúûýýþÿRr"!@#$%&*()_-+={[}]?;:.,\\\'<>°ºª ';
        $this->format['b'] = 'aaaaaaaceeeeiiiidnoooooouuuuuybsaaaaaaaceeeeiiiidnoooooouuuyybyRr-------------------------------------------------------------------------------------------------';
        $this->url = strtr(utf8_decode($this->url), utf8_decode($this->format['a']), $this->format['b']);


    }


    private function slugController($slugController)
    {
        //converter pra minusculo
        $this->urlSlugController = strtolower($slugController);
        //converter o tração - para em branco
        $this->urlSlugController  =  str_replace("-"," ", $this->urlSlugController );
        //converter a primeira letra de cada palavar em maisculo
        $this->urlSlugController = ucwords($this->urlSlugController );
        //retirn espaçao em branco
        $this->urlSlugController  =  str_replace(" ","", $this->urlSlugController );

        return $this->urlSlugController;
    }


    public function loadPg()
    {
        echo "Carregar pagina/conrooler";
    }
    
    
}