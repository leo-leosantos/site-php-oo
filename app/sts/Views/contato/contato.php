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


if (isset($_SESSION['msg'])) {

    echo $_SESSION['msg'];
    unset($_SESSION['msg']);
}

?>


<div class=" container">
    <h1>Entre em contato</h1>
    <form action="" method="post" class="form-group">
        <fieldset>
            <div class="mb-3">
                <label class="form-label" for="name">Nome:</label>
                <input type="text" name="name" id="name" placeholder="Entre com seu nome Completo" value="<?php if (isset($name)) echo $name ?? '' ?>" class="form-control">
            </div>

            <div class="mb-3">
                <label class="form-label" for="email">E-mail:</label>
                <input type="email" name="email" id="email" placeholder="Entre com seu melhor e-mail" value="<?php if (isset($email)) echo $email  ?? '' ?>" class="form-control">
            </div>

            <div class="mb-3">
                <label class="form-label" for="subject">Assunto:</label>
                <input type="text" name="subject" id="subject" placeholder="Assunto da Mensagem" value="<?php if (isset($subject)) echo $subject  ?? '' ?>" class="form-control">
            </div>


            <div class="mb-3">
                <label class="form-label" for="content">Mensagem:</label>
                <textarea name="content" id="content" placeholder="conteudo da mensagem" rows="6" cols="3" class="form-control">
                        <?php if (isset($subject)) echo $subject  ?? '' ?>
                </textarea>
            </div>

            <div class="mb-3">
                <input type="submit" name="AddContMsg" id="AddContMsg" class="btn btn-primary"></input>
            </div>

        </fieldset>
    </form>
</div>