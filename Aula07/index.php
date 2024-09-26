<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <pre>
        <?php 
            require_once "Lutador.php";
            $l = array();
            $l[0] = new Lutador("Hierro", "Brasil", 19, 1.80, 70, 15, 0, 1);
            $l[0]->ganharLuta();
            $l[0]->apresentar();
            $l[0]->status();

            $l[1] = new Lutador("Marina", "França", 18, 1.58, 58, 10, 1, 2);
            $l[1]->apresentar();
            $l[1]->status();

            $l[2] = new Lutador("Julio", "Espanha", 23, 1.98, 89, 23, 6, 2);
            $l[2]->perderLuta();
            $l[2]->apresentar();
            $l[2]->status();

            $l[3] = new Lutador("Samuel", "França", 18, 1.74, 100, 33, 12, 6);
            $l[3]->apresentar();
            $l[3]->status();

            $l[4] = new Lutador("Clara", "França", 18, 1.64, 58, 7, 4, 4);
            $l[4]->apresentar();
            $l[4]->status();

            $l[5] = new Lutador("Bruno", "México", 18, 1.86, 64, 3, 10, 1);
            $l[5]->apresentar();
            $l[5]->status();

            $l[0]->ganharLuta();

        ?>
    </pre>
</body>
</html>