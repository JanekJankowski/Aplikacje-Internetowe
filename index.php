<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Dołączanie plików</title>
</head>
<body>
    <h3>Początek strony</h3>
        <?php
        require './lol.php';
        require_once './lol.php';

        include './lol.php';
        include_once './lol.php';
        ?>
    <h3>Koniec strony</h3>
</body>
</html>