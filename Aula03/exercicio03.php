<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 02 - POO</title>
</head>
<body>
    <pre>
    <?php
        require_once 'Caneta.php';
        $c1 = new Caneta;
        $c1->modelo = "BIC cristal";
        $c1->cor = "azul";
        //$c1->ponta = 0.5;  (É PRIVADO
        //$c1->carga = 99;   (É PRIVADO
        //$c1->tampada = true; (É PRIVADO
        $c1->rabiscar();
        $c1->tampar();
        $c1->destampar();
        print_r($c1);
    ?>
    </pre>
</body>
</html>