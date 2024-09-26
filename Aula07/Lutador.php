<?php 
    class Lutador{
    //Atributos
    private $nome;
    private $nacionalidade;
    private $idade, $altura, $peso;
    private $categoria, $vitorias, $derrotas, $empates;
    //Métodos
        function apresentar(){
            echo "<p> ---------------------------- </p>";
            echo "<p>CHEGOU A HORA! O lutador " . $this->getNome();
            echo ", veio diretamente do " . $this->getNacionalidade();
            echo ", tem " . $this->getIdade() . " anos e pesa " . $this->getPeso() . "KG";
            echo "<br/> Ele tem " . $this->getVitorias() . " vitótias, ";
            echo $this->getDerrotas() . " derrotas e " . $this->getEmpates() . " empates</p>";
        }

        function status(){
            echo "<p> -------------------------------- </p>";
            echo "<p>" . $this->getNome() . " é um peso ". $this->getCategoria();
            echo " e já ganhou ". $this->getVitorias(). " vezes, ";
            echo "perdeu " . $this->getDerrotas() . " vezes e ";
            echo "empatou " . $this->getEmpates() . " vezes";
        }

        function ganharLuta(){
            $this->setVitorias($this->getVitorias() + 1);
        }

        function perderLuta(){
            $this->setDerrotas($this->getDerrotas() + 1);
        }

        function empatarLuta(){
            $this->setEmpates($this->getEmpates() + 1);
        }
    //Métodos especiais

        function __construct($no, $na, $id, $al, $pe, $vi, $de, $em){
            $this->nome = $no;
            $this->nacionalidade  = $na;
            $this->idade = $id;
            $this->altura = $al;
            $this->setPeso($pe);
            $this->vitorias = $vi;
            $this->derrotas = $de;
            $this->empates = $em;
        }

        function getNome(){
            return $this->nome;
        }

        function getNacionalidade(){
            return $this->nacionalidade;
        }

        function getIdade(){
            return $this->idade;
        }

        function getAltura(){
            return $this->altura;
        }

        function getPeso(){
            return $this->peso;
        }

        function getCategoria(){
            return $this->categoria;
        }

        function getVitorias(){
            return $this->vitorias;
        }
        
        function getDerrotas(){
            return $this->derrotas;
        }

        function getEmpates(){
            return $this->empates;
        }

        function setNome($nome){
            $this->nome = $nome;
        }

        function setNacionalidade($nacionalidade){
            $this->nacionalidade = $nacionalidade;
        }

        function setIdade($idade){
            $this->idade = $idade; 
        }

        function setAltura($altura){
            $this->altura = $altura; 
        }
        function setPeso($peso){
            $this->peso = $peso; 
            $this->setCategoria();
        }

        private function setCategoria(){
            if($this->peso<= 60){
                $this->categoria = "Peso Pena!";
            }
            elseif($this->peso >= 60.1 && $this->peso <= 70){
                $this->categoria = "Peso Leve!";
            }
            elseif($this->peso >= 70.1 && $this->peso <= 80){
                $this->categoria = "Peso Médio!";
            }
            elseif($this->peso >=80.1){
                $this->categoria = "Peso Pesado!";
            }
        }

        function setVitorias($vitorias){
            $this->vitorias = $vitorias;
        }

        function setDerrotas($derrotas){
            $this->derrotas = $derrotas;
        }

        function setEmpates($empates){
            $this->empates = $empates;
        }
    }
?>