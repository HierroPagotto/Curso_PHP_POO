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
            require_once "Video.php";
            require_once "Pessoa.php";
            require_once "Gafanhoto.php";

            $v[0] = new Video("Aula 14");
            $v[1] = new Video("CSGO");
            $v[2] = new Video("Pokemon");

            $p = new Pessoa("Hierro", 19, "M");

            $g = new Gafanhoto("Marina", 18, "M", "Mar");
            $g->assistirMaisUm();
            print_r($v);
            print_r($p);
            print_r($g);


        ?>
    </pre>
</body>
</html>