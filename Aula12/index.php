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
            require_once "Mamifero.php";
            require_once "Ave.php";
            require_once "Peixe.php";
            require_once "Reptil.php";

            $a = new Ave();
            $m = new Mamifero();
            $p = new peixe();
            $r = new Reptil();

            $a->locomover();
            $m->locomover();
            $p->locomover();
            $r->locomover();

            print_r($a);
            print_r($m);
            print_r($p);
            print_r($r);
        ?>
    </pre>
</body>
</html>