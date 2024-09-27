<?php 
    require_once "Animal.php";
    class Peixe extends Animal{
        private $corEscama;
        
        function soltarBolha(){
            echo "<p>Soltando olha.</p>";
        }

        function locomover(){
            echo "<p> Nadando </p>";
        }

        function alimentar(){
            echo "<p>Comendo substâncias</p>";
        }

        function emitirSom(){
            echo "<p>Peixe não faz som</p>";
        }

        function getCorEscama(){
            return $this->corEscama;
        }

        function setCorEscama($corEscama){
            $this->corEscama = $corEscama;
        }
    }
?>