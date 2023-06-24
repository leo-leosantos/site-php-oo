<?php

namespace Core;
/**
 * Receba a url e manipula a mesma
 * Carregar a controller
 *@author Leandro dos santos <email@email.com> 
 */
 if(!defined('C7E3L8K9E5')){
    header("Location: /site");
 
    die("Not found");
 }


class ConfigController extends Config
{
    /**
     * Undocumented variable
     *
     * @var string $url Receba a Url do .htaccess
     * 
     *
     */
    private string $url;
    private array $urlArray;
    
    private string $urlController;
    private string $urlParameter;
    private string $urlSlugController;
    private array $format;

    /**
     * Recebe a url do .htaccess
     */
    public function __construct()
    {

        $this->config();

        if (!empty(filter_input(INPUT_GET, 'url', FILTER_DEFAULT))) {
            $this->url = filter_input(INPUT_GET, 'url', FILTER_DEFAULT);

            $this->clearUrl();
            $this->urlArray = explode("/", $this->url);


            if (isset($this->urlArray[0])) {
                $this->urlController = $this->slugController($this->urlArray[0]);
            } else {
                $this->urlController = $this->slugController(CONTROLLERRO);
            }
        } else {
            //echo "Acessar a pagina incial<br>";
            $this->urlController = $this->slugController(CONTROLLER);
        }
    }


    private function clearUrl(): void
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


    private function slugController(string $slugController): string
    {
        //converter pra minusculo
        $this->urlSlugController = strtolower($slugController);
        //converter o tração - para em branco
        $this->urlSlugController  =  str_replace("-", " ", $this->urlSlugController);
        //converter a primeira letra de cada palavar em maisculo
        $this->urlSlugController = ucwords($this->urlSlugController);
        //retirn espaçao em branco
        $this->urlSlugController  =  str_replace(" ", "", $this->urlSlugController);

        return $this->urlSlugController;
    }


    public function loadPage(): void
    {
        $classLoad = "\\Sts\\Controllers\\" . $this->urlController;
        $classPage = new $classLoad();
        $classPage->index();
    }
}
