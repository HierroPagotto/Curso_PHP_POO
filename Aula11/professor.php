<?php 
    require_once "pessoa.php";
    class Professor extends Pessoa{
        private $especialidade;
        private $salario;

        public function recerAumento($aum){
            $this->salario += $aum;
        }

        function getEspecialidade(){
            return $this->especialidade;
        }

        function getSalario(){
            return $this->salario;
        }

        function setEspecialidade($especialidade){
            $this->especialidade = $especialidade;
        }

        function setSalario($salario){
            $this->salario = $salario;
        }
    }
?>