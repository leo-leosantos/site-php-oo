<?php

if (!defined('C7E3L8K9E5')) {
    header("Location: /site");

    die("Not found");
}
?>

<section class="about">
    <div class="max-width">
        <h2 class="title">Sobre Empresa</h2>
        <?php
        if (!empty($this->data['about-company'])) {
            foreach ($this->data['about-company'] as $about_company) {
                extract($about_company);
        ?>
                <div class="about-content">
                    <div class="column left">
                        <img src="<?= URL . 'app/sts/assets/images/about/' . $id . '/' . $image; ?>" alt="Sobre Empresa">
                    </div>
                    <div class="column right">
                        <div class="text">
                            <?= $title ?>
                        </div>
                        <p>
                            <?= $description ?>
                        </p>
                    </div>
                </div>
        <?php }
        } else {
            echo "<h6 class='text-danger'>nenhum registro encontrado</h6>";
        }
        ?>
    </div>
</section>