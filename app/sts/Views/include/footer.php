
<?php

if(!defined('C7E3L8K9E5')){
    header("Location: /site");

    die("Not found");
}
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



<link rel="stylesheet" href="<?= URL; ?>app/sts/assets/js/custom.js">

</body>

</html>