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
        require_once "Caneta.php";
        
        $c1 = new Caneta;
        $c1->setModelo("BIC"); //Método Set
        $c1->setPonta(0.5); //Método Set
        print "Eu tenho uma caneta {$c1->getModelo()} de ponta {$c1->getPonta()}";
        //precisa colocar de {} para chamar métodos dentro do print ou echo.
        
    ?>
    </pre>
</body>
</html>