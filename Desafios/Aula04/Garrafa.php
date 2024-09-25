<?php 
    Class Garrafa{
        private $modelo;
        private $cor;
        private $tampada;
        private $capacidade;

        public function __construct($modelo, $cor){
            $this->modelo = $modelo;
            $this->cor = $cor;
            $this->tampar();
            $this->capacidade();
        }

        function setModelo(){
            return $this->modelo;
        }

        function getModelo(){
            return $this->modelo;
        }

        function setCor(){
            return $this->cor;
        }

        function getCor(){
            return $this->cor;
        }

        function tampar(){
            $this->tampada = true;
        }

        function capacidade(){
            $this->capacidade = 1250;
        }
    }
?>