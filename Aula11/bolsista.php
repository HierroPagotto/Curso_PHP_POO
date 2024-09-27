<?php 
    require_once "aluno.php";
    class Bolsista extends Aluno{
        private $bolsa;

        function renovarBolsa(){
            echo "<p>Bolsa renovada.</p>";
        }

        function pagarMensalidade(){
            echo $this->getNome(). " é bolsista! Então pagar mensalidade.";
        }

         function getBolsa(){
            return $this->bolsa;
         }

         function setBolsa($bolsa){
            $this->bolsa = $bolsa;
         }
    }
?>