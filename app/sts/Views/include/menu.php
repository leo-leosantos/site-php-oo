<?php

    if(!defined('C7E3L8K9E5')){
        header("Location: /site");
    
        die("Not found");
    }
?>

<nav class="navbar">
        <div class="max-width">
            <div class="logo">
                <a href="<?= URL;?>">Leandro</a>
            </div>
            <ul class="menu" id="menu-site">
                <li><a href="<?= URL;?>">Home</a></li>
                <li><a href="<?= URL;?>sobre-empresa">Sobre Empresa</a></li>
                <li><a href="<?= URL;?>contato">Contato</a></li>
            </ul>
            <div class="menu-btn" id="menu-btn">
                <i class="fa-solid fa-bars" id="menu-icon"></i>
            </div>
        </div>
    </nav>


