<?php
    class Caneta{
        var $modelo;
        var $cor;
        var $ponta;
        var $carga;
        var $tampada;
//Aqui estão todos os atributos da classe.
//A baixo estão todos os métodos das classe, todas as funçoes.
        function rabiscar(){
            if($this->tampada == true){
                echo "Erro! Mão posso rabiscar";
            }
            else{
                echo "Estou rabiscando...";
            }
        }

        function tampar(){
            $this->tampada = true;

        }

        function destampar(){
            $this->tampada = false;
        }

    }
    ?>
