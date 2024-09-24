<?php
    class Caneta{
        public $modelo;
        public $cor;
        private $ponta;
        protected $carga;
        protected $tampada;
//Aqui estão todos os atributos da classe.
//A baixo estão todos os métodos das classe, todas as funçoes.
        public function rabiscar(){
            if($this->tampada == true){
                echo "Erro! Mão posso rabiscar";
            }
            else{
                echo "Estou rabiscando...";
            }
        }

        public function tampar(){
            $this->tampada = true;

        }

        public function destampar(){
            $this->tampada = false;
        }

    }
    ?>
