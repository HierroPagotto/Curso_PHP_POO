<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 04 - POO</title>
</head>
<body>
    <pre>
    <?php
        require_once "Bic.php";

        $b1 = new Bic("BIC", "Azul", 0.5);
        $b2 = new Bic("KKK", "Verde", 1);
        print_r($b1);
        print_r($b2);
    ?>
    </pre>
</body>
</html>