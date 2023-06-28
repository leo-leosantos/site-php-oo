<?php

if (!defined('C7E3L8K9E5')) {
    header("Location: /site");

    die("Not found");
}





if (!empty($this->data['home']['top'][0])) {
    extract($this->data['home']['top'][0]); ?>
    <section class="top" style="background:  linear-gradient(to right, var(--main-color)25%, rgba(255, 255, 255, 0)),
        url('<?php URL; ?>app/sts/assets/images/<?= $image_top ?>'); 
        background-size: cover;    
        background-attachment: fixed; ">
        <div class="max-width">
            <div class="top-content">
                <div class="text-1"><?= $title_one_top ?></div>
                <div class="text-2"><?= $title_two_top ?></div>
                <div class="text-3"><?= $title_three_top ?></div>
                <a href="<?= $link_btn_top ?>"><?= $txt_btn_top ?></a>
            </div>
        </div>
    </section>



<?php
} else {
    echo "<p style='color: #f00;'> Error: Nenhum dado encontrado </p>";
}
?>

<?php
if (!empty($this->data['home']['serv'][0])) {
    extract($this->data['home']['serv'][0]);
?>

    <section class="services">
        <div class="max-width">
            <h2 class="title"><?= $serv_title ?></h2>
            <div class="serv-content">
                <div class="card">
                    <div class="box">
                        <i class="<?= $serv_icon_one ?>"></i>
                        <div class="text"><?= $serv_title_one ?></div>
                        <p><?= $serv_desc_one ?> </p>
                    </div>
                </div>

                <div class="card">
                    <div class="box">
                        <i class="<?= $serv_icon_two ?>"></i>
                        <div class="text"><?= $serv_title_two ?></div>
                        <p><?= $serv_desc_two ?> </p>
                    </div>
                </div>

                <div class="card">
                    <div class="box">
                        <i class="<?= $serv_icon_three ?>"></i>
                        <div class="text"><?= $serv_title_three ?></div>
                        <p><?= $serv_desc_three ?> </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php
} else {
    echo "<p style='color: #f00;'> Error: Nenhum dado encontrado </p>";
}
?>

<?php
if (!empty($this->data['home']['prem'][0])) {
    extract($this->data['home']['prem'][0]);
?>
    <section class="premium">
        <div class="max-width">
            <h2 class="title"><?= $prem_title ?></h2>
            <div class="premium-content">
                <div class="column left">
                    <img src="<?= URL;  ?>app/sts/assets/images/<?= $prem_image ?>"  alt="Serviço premium">
                </div>
                <div class="column right">
                    <div class="text">
                    <?= $prem_subtitle ?>                    </div>
                    <p>
                    <?= $prem_desc ?>
                    </p>
                    <a href="<?= URL; ?>contato ">  <?= $prem_btn_text ?></a>
                </div>
            </div>
        </div>
    </section>

<?php
} else {
    echo "<p style='color: #f00;'> Error: Nenhum dado encontrado </p>";
}
?>

<?php


if (!defined('C7E3L8K9E5')) {
    header("Location: /site");

    die("Not found");
}


?>

<?php
if (!empty($this->data['footer'][0])) {
    extract($this->data['footer'][0]);


?>
    <footer>
        <span>
            <?= $footer_desc ;?> <a href="#"><?= $footer_text_link ;?></a>
            <?= date('Y'); ?>
        </span>
    </footer>
<?php
} else {
    echo "<p style='color: #f00;'> Error: Nenhum Footer encontrado </p>";
}
?>