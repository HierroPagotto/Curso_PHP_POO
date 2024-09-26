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
            require_once "livro.php";
            require_once "pessoa.php";

            $p[1] = new Pessoa("Hiero", 19, "M");
            $l[1] = new Livro("A culpa é das estrelas", "Julius", 324, $p[1]);

            $l[1]->abrir();
            $l[1]->setPagAtual(112);
            $l[1]->detalhes();

            echo "<br/> <br/>";
            print_r($l[1]);
        ?>
    </pre>
</body>
</html>