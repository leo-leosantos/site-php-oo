<?php

if (!defined('C7E3L8K9E5')) {
    header("Location: /site");

    die("Not found");
}


//var_dump($this->data);

if (isset($this->data['form'])) {
    $valueForm = $this->data['form'];
    extract($valueForm);
}
?>
<section class="contact">
    <div class="max-width">
        <h2 class="title">Contato</h2>
        <div class="contact-content">
            <div class="column left">
                <p>Mauris volutpat arcu eu mi volutpat fermentum. Aenean vel dignissim orci. Vestibulum mollis elit vel tellus viverra dictum.</p>
                <div class="icons">
                    <div class="row">
                        <i class="fa-solid fa-user"></i>
                        <div class="info">
                            <div class="head">
                                Empresa
                            </div>
                            <div class="sub-title">
                                Leandro
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <i class="fa-solid fa-location-dot"></i>
                        <div class="info">
                            <div class="head">
                                Endereço
                            </div>
                            <div class="sub-title">
                                Avenida Wilson tavares
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <i class="fa-solid fa-envelope"></i>
                        <div class="info">
                            <div class="head">
                                E-mail
                            </div>
                            <div class="sub-title">
                                leandro@leandro.com.br
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="column right">
                <div class="text">
                    Mensagem de Contato
                </div>
                <form action="" method="post">
                    <?php
                        if (isset($_SESSION['msg'])) {
                            echo $_SESSION['msg'];
                            unset($_SESSION['msg']);
                        }
                    ?>
                    <div class="fields">
                        <div class="field name">
                            <input type="text" name="name" id="name" placeholder="Entre com seu nome Completo" value="<?php if (isset($name)) echo $name ?? '' ?>">
                        </div>
                        <div class="field email">
                            <input type="email" name="email" id="email" placeholder="Entre com seu melhor e-mail" value="<?php if (isset($email)) echo $email  ?? '' ?>">
                        </div>
                    </div>
                    <div class="field">
                        <input type="text" name="subject" id="subject" placeholder="Assunto da Mensagem" value="<?php if (isset($subject)) echo $subject  ?? '' ?>">
                    </div>
                    <div class="field textarea">
                        <textarea name="content" id="content" placeholder="conteudo da mensagem" rows="6" cols="3">
                        <?php if (isset($subject)) echo $subject  ?? '' ?></textarea>
                    </div>
                    <div class="button-area">
                        <button type="submit" name="AddContMsg" id="AddContMsg" value="Enviar">Enviar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>