<?php 
    require_once "Lobo.php";
    class Cachorro extends Lobo{
        private $frase;
        private $hora;
        private $dono;

        function abanarRabo(){
            echo "<p> Abanando o rabo </p>";
        }

        function emitirSom(){
            echo "<p>Au!Au!Au!Auuu!!!</p>";
        }
        
        public function reagirFrase($frase){
            if($frase == "Toma comida" || $frase == "<p>Tí lindo</p>"){
                echo "Abanar e Latir";
            }else{
                echo "<p>Rosnar!!</p>";
            }
        }

        public function reagirHora($hora){
            if($hora<12){
                $this->abanarRabo();
            }
            elseif($hora>=18){
                $this->abanarRabo() or $this->emitirSom();
            }else{
                echo "<p>Rosnar!!!</p>";
            }
        }

        public function reagirDono($dono){
            if($dono){
                $this->abanarRabo() or $this->emitirSom();
            }else{
                echo "<p>Rosnar!!!</p>";
            }
        }

        public function reagirIdadePeso($idade, $peso){
            if($idade<5){
                if($peso<10){
                    $this->abanarRabo() or $this->emitirSom();
                }else{
                    $this->emitirSom();
                }
            }else{
                if($peso > 10){
                    echo "<p>Rosnar!</p>";
                }else{
                    echo "<p>Ignorar</p>";
                }
            }
        }

        function getFrase(){
            return $this->frase;
        }

        function getDono(){
            return $this->dono;
        }

        function getHora(){
            return $this->hora;
        }

        function setFrase($frase){
            $this->frase = $frase;
        }

        function setDono($dono){
            $this->dono = $dono;
        }

        function setHora($hora){
            $this->hora = $hora;
        }
        
    }    
?>