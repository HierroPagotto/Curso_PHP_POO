<?php 
    require_once "pessoa.php";
    class Funcionario extends Pessoa{

        private $setor;
        private $trabalhando;

        public function mudarTrabalho(){
            $this->trabalhando =! $this->trabalhando;
        }

        function getSetor(){
            return $this->setor;
        }

        function getTrabalhando(){
            return $this->trabalhando;
        }

        function setSetor($setor){
            $this->setor = $setor;
        }

        function setTrabalhando($trabalhando){
            $this->trabalhando = $trabalhando;
        }
    }
?>