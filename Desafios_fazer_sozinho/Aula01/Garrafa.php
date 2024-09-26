<?php 
    Class Garrafa{
        var $cor;
        var $aberta;
        var $cheia;

        function fechada(){
            $this->aberta = false;
        }

        function vazia(){
            $this->cheia = false;
        }

        function cheia1(){
            $this->cheia = true;
        }

        function aberta1(){
            $this->aberta = true;
        }
    }
?>