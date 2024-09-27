<?php 
    require_once "Animal.php";
    class Ave extends Animal{
        private $corPena;

        function fazerNinho(){
            echo "<p>Construiu um ninho</p>";
        }

        function locomover(){
            echo "<p>Voando</p>";
        }

        function alimentar(){
            echo "<p> Comendo frutas </p>";
        }

        function emitirSom(){
            echo "<p>Som de ave</p>";
        }

	function getCorPena() {
		return $this->corPena;
	}

	function setCorPena($corPena){
		$this->corPena = $corPena;
	}

    }
?>