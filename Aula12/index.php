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
            require_once "Canguru.php";
            require_once "Cachorro.php";
            require_once "Cobra.php";
            require_once "Tartaruga.php";
            require_once "GoldFish.php";
            require_once "Arara.php";

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

            $c[0] = new Canguru();
            $c[1] = new Cachorro();
            $c[2] = new Cobra();

            $c[0]->locomover();
            $c[0]->usarBolsa();

            $c[1]->emitirSom();
            $c[1]->abanarRabo();

            $c[2]->locomover();

            print_r($c[0]);
            print_r($c[1]);
            print_r($c[2]);

            $t = new Tartaruga();
            $g = new GoldFish();
            $ar = new Arara();

            $t->locomover();

            $g->locomover();
            $g->emitirSom();
            
            $ar->alimentar();

            print_r($t);
            print_r($g);
            print_r($ar);
        ?>
    </pre>
</body>
</html>