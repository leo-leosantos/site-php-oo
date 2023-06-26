<?php

namespace Core;

if (!defined('C7E3L8K9E5')) {
    header("Location: /site");

    die("Not found");
}

class ConfigView
{
    private string $nameView;
    private ?array $data;


    public function __construct($nameView, ?array $data)
    {
        $this->nameView = $nameView;
        $this->data = $data;
    }


    public function loadView(): void
    {
        $file = 'app/' . $this->nameView . '.php';
        if (file_exists($file)) {

            include 'app/sts/Views/include/header.php';
            include $file;
            include 'app/sts/Views/include/footer.php';
        } else {
            die("Erro: Pagina não encontrada.
             Por favor entre em contato com o administrador " . EMAILADM);
        }
    }
}
