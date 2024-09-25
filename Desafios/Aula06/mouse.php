<?php 
        require_once "metodos.php";
        class Mouse implements metodos{
            //Atributos
            private $ligado;
            private $button;

            //metodos especiais

            public function __construct(){
                $this->ligado = false;
            }
            
            private function getligado(){
                return $this->ligado;
            }
            
            private function setLigado($ligado){
                $this->ligado = $ligado;
            }

            private function getButton(){
                return $this->button;
            }

            private function setButton($button){
                $this->button = $button;
            }

            public function ligar(){
                $this->setLigado(true);
            }

            public function desligar(){
                $this->setLigado(false);
            }

            public function click(){
                if($this->getLigado()){
                    $this->setButton($this->getButton()?"Clicando":"Clicando");
                }
                else{
                    echo "<br/>ERRO! O mouse está desligado!";
                }
            }

            public function select(){
                if($this->getLigado()){
                    $this->setButton($this->getButton()?"Selecionado":"Selecionado");
                }
                else{
                    echo "<br/>ERRO! O mouse está desligado!";
                }
            }

            public function rolarParaBaixo(){
                if($this->getLigado()){
                    $this->setButton($this->getButton("Rolando para cima")?"Rolando para cima":"Rolando para cima");
                }
                else{
                    echo "<br/>ERRO! O mouse está desligado.";
                }
            }

            public function rolarParaCima(){
                if($this->getLigado()){
                    $this->setButton($this->getButton()?"Rolando para baixo":"Rolando para baixo");
                }
                else{
                    echo "<br/>ERRO! O mouse está desligado.";
                }
            }
        }
?>