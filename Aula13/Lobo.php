<?php 
    class Lobo{
        private $corPelo;
        private $idade;
        private $peso;

        function locomover(){
            echo "<p> Correndo </p>";
        }

        function alimentar(){
            echo "<p> Mamando </p>";
        }

        function emitirSom(){
            echo "<p> Som de Mamifero </p>";
        }

        function getCorPelo(){
            return $this->corPelo;
        }

        function setCorPelo($corPelo){
            $this->corPelo = $corPelo;
        }

        function getIdade(){
            return $this->idade;
        }

        function setIdade($idade){
            $this->idade = $idade;
        }

        function getPeso(){
            return $this->peso;
        }

        function setPeso($peso){
            $this->peso = $peso;
        }
    }
?>