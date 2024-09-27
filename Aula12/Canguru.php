<?php 
    require_once "Mamifero.php";
    class Canguru extends Mamifero{
        function usarBolsa(){
            echo "<p> Usando a bolsa </p>";
        }

        function locomover(){
            echo "<p>Pulando</p>";
        }
    }    
?>