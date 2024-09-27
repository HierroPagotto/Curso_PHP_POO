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
            require_once "Lobo.php";
            require_once "Cachorro.php";

            $c[1] = new Cachorro();
            
            $c[1]->reagirFrase("Toma comida");
            $c[1]->reagirFrase("Não pode");
            $c[1]->reagirHora(18);
            $c[1]->reagirDono(false);
            $c[1]->reagirIdadePeso(6, 11);

            print_r($c[1]);
        ?>
    </pre>
</body>
</html>