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
            require_once "visitante.php";
            require_once "aluno.php";
            require_once "bolsista.php";
            require_once "funcionario.php";
            require_once "professor.php";

            $p1 = new Visitante("Pedro",19, "M");
            $p2 = new Aluno("Maria", 15, "S");
            $p3 = new Professor("Igor", 54, "M");
            $p4 = new Funcionario("Marina", 34, "S");
            $p5 = new Bolsista("Joao", 43, "M");

            $p1->setNome("Pedro");
            $p2->setNome("Maria");
            $p3->setNome("Igor");   
            $p4->setNome("Marina");
            $p5->setNome("Joao");

            $p1->setidade(19);
            $p2->setidade(15);
            $p3->setidade(54);
            $p4->setidade(34);
            $p5->setIdade(43);

            $p1->setSexo("M");
            $p2->setSexo("S");
            $p3->setSexo("M");
            $p4->setSexo("S");
            $p5->setSexo("M");

            $p5->setMatricula(111);
            $p5->setBolsa(12.5);
            $p5->setCurso("Ciencia da computação");
            $p5->pagarMensalidade();

            print_r($p1);
            print_r($p2);
            print_r($p3);
            print_r($p4);
            print_r($p5);
        ?>
    </pre>
</body>
</html>