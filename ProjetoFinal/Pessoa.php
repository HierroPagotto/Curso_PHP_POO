<?php 
        class Pessoa{
        protected $nome;
        protected $idade;
        protected $sexo;
        protected $experiencia;

        protected function ganharXp($n){
            $this->experiencia += $n;
        }

        public function __construct($nome, $idade, $sexo){
            $this->nome = $nome;
            $this->idade = $idade;
            $this->sexo = $sexo;
        }
    }
?>