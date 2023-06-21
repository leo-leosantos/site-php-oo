<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site</title>
</head>
<body>
        <?php

            use Core\ConfigController;

            require './vendor/autoload.php';
           $url = new ConfigController();
           $url->loadPg();
        ?>
</body>
</html>