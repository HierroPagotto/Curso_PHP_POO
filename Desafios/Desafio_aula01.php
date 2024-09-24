<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 01 - POO</title>
</head>
<body>
    <?php
        require_once "Garrafa.php";
          $g = new Garrafa;
          $g->cor = "Vermelha";
          $g->aberta = true;
          $g->cheia = true;
        print_r($g);
        echo "<br/>";

          $g->vazia();
          $g->fechada();
        print_r($g);

/* -------------------------------------------------------------------------------------- */

        echo "<br/>";
        $gar = new Garrafa;
        $gar->cor = "Verde";
        $gar->aberta = false;
        $gar->cheia = false;
        print_r($gar);
        echo "<br/>";

        $gar->aberta1();
        $gar->cheia1();
        print_r($gar);
    ?>
</body>
</html>