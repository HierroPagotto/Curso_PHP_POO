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
            require_once "ContaBanco.php";
            
            $p1 = new ContaBanco();
            $p2 = new ContaBanco();
            
            $p1->abrirConta("CC");
            $p1->setNumConta(100305);
            $p1->setDono("Hierro");
            
            $p2->abrirConta("CP");
            $p2->setNumConta("031105");
            $p2->setDono("Marina");

            $p1->depositar(300);
            $p2->Depositar(500);

            $p2->sacar(100);

            $p1->pagarMensal();
            $p2->pagarMensal();

            $p1->Sacar(338);
            $p2->Sacar(530);

            $p1->fecharConta();
            $p2->fecharConta();

            print_r($p1);
            print_r($p2);
        ?>
    </pre>
</body>
</html>