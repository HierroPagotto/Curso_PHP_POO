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
            require_once "pessoa.php";
            require_once "livro.php";

            $p[0] = new Pessoa("Hierro", 19, "M");
            $p[1] = new Pessoa("Marina", 18, "F");

            $l[0] = new Livro("O lobo de wall Street", "Martin Scorsese", 250, $p[0]);
            $l[1] = new Livro("É assim que acaba", "Colleen Hoover", 368, $p[1]);
            $l[2] = new Livro("PHP POO", "Gustavo Guanabara", 300, $p[0]);

            $l[0]->abrir();
            $l[0]->folhear(85);
            $l[0]->avancarPag();
            $l[0]->voltarPag();
            $l[0]->detalhes();

            $l[2]->detalhes();
        ?>
    </pre>
</body>
</html>