<?php

if (!defined('C7E3L8K9E5')) {
    header("Location: /site");

    die("Not found");
}



if (isset($this->data['form'])) {
    $valueForm = $this->data['form'];
    extract($valueForm);
}


if (!empty($this->data['content'][0])) {
    extract($this->data['content'][0]);
} else {
    echo "<p style='color: #f00;'> Error: Nenhuma informação de contato encontrada </p>";
}
?>
?>
<section class="contact">
    <div class="max-width">
        <h2 class="title">
            <?php if (isset($title_contact))
                echo  $title_contact;
            ?>
        </h2>
        <div class="contact-content">
            <div class="column left">
                <p>
                    <?php if (isset($desc_contact))
                        echo $desc_contact;
                    ?>
                </p>
                <div class="icons">
                    <div class="row">
                        <i class="<?= $icon_company ?>"></i>
                        <div class="info">
                            <div class="head">
                                <?php if (isset($title_company))
                                    echo $title_company;
                                ?>
                            </div>
                            <div class="sub-title">
                                <?php if (isset($desc_company))
                                    echo $desc_company;
                                ?>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <i class="<?= $icon_address ?>"></i>
                        <div class="info">
                            <div class="head">
                                <?php if (isset($title_address))
                                    echo $title_address;
                                ?>
                            </div>
                            <div class="sub-title">
                                <?php if (isset($desc_address))
                                    echo $desc_address;
                                ?>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <i class="<?= $icon_email ?>"></i>
                        <div class="info">
                            <div class="head">
                                <?php if (isset($title_email))
                                    echo $title_email;
                                ?>
                            </div>
                            <div class="sub-title">
                                <?php if (isset($desc_email))
                                    echo $desc_email;
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="column right">
                <div class="text">
                    <?php if (isset($title_form))
                        echo $title_form;
                    ?>
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