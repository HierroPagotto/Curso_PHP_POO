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
            require_once "mouse.php";
            $m1 = new Mouse();
            $m1->ligar();
            $m1->rolarParaBaixo();
            print_r($m1);
        ?>
    </pre>
</body>
</html>