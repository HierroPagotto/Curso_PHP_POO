<?php 
    require_once "Mamifero.php";
    class Cachorro extends Mamifero{
        function abanarRabo(){
            echo "<p> Abanando o rabo </p>";
        }

        function emitirSom(){
            echo "<p>Au!Au!Au!Auuu!!!</p>";
        }

        
    }    
?>