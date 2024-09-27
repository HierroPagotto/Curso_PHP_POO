<?php 
    require_once "visitante.php";
    class Aluno extends Visitante{
        private $matricula;
        private $curso;

        public function cancelaMatricula(){
            echo "<p>Matricula será cancelada</p>";
        }

        public function pagarMensalidade(){
            echo "<p>Pagando a mensalidade do aluno </p>". $this->getNome();
        }

        public function getMatricula(){
            return $this->matricula;
        }

        public function getCurso(){
            return $this->curso;
        }

        public function setMatricula($matricula){
            $this->matricula = $matricula;
        }

        public function setCurso($curso){
            $this->curso = $curso;
        }
        
    }

?>