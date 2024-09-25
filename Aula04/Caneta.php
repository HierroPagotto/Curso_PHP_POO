<?php
    Class Caneta{
        private $modelo;
        private $ponta;
        private $cor;
        private $tampada;
        
        public function Caneta(){//método crontrutor __construct
            $this->cor = "Azul";
            $this->tampar();
        }

        public function tampar(){
            $this->tampada = true;
        }
        
        public function getModelo(){
            return $this->modelo;

        }
        public function setModelo($m){
            $this->modelo = $m;
        }
        public function getPonta(){
            return $this->ponta;
        }
        public function setPonta($p){
            $this->ponta = $p;
        }
    }
?>''