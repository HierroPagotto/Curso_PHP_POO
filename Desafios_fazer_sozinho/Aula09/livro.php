<?php  
    require_once "pessoa.php";
    require_once "publicacao.php";

    class Livro implements Publicacao{
        private $titulo;
        private $autor;
        private $totpaginas;
        private $pagAtual;
        private $aberto;
        private $leitor;

        public function detalhes(){
            echo "<br> O livro " . $this->getTitulo()." do autor ". $this->getAutor();
            echo " está sendo lido por " . $this->leitor->getNome();
            echo "<br/> O livro tem ". $this->totpaginas;
        }

        function __construct($titulo, $autor, $totpaginas, $leitor){
            $this->titulo = $titulo;
            $this->autor = $autor;
            $this->totpaginas = $totpaginas;
            $this->pagAtual = 0;
            $this->aberto = false;
            $this->leitor = $leitor;
        }

        function getTitulo(){
            return $this->titulo;
        }

        function getAutor(){
            return $this->autor;
        }

        function getTotpaginas(){
            return $this->totpaginas;
        }

        function getPagAtual(){
            return $this->pagAtual;
        }

        function getAberto(){
            return $this->aberto;
        }

        function getLeitor(){
            return $this->leitor;
        }

        function setTitulo($titulo){
            $this->titulo = $titulo;
        }

        function setAutor($autor){
            $this->autor = $autor;
        }

        function setTotpaginas($totpaginas){
            $this->totpaginas = $totpaginas;
        }

        function setPagAtual($pagAtual){
            $this->pagAtual = $pagAtual;
        }

        function setAberto($aberto){
            $this->aberto = $aberto;
        }

        function setLeitor($leitor){
            $this->leitor = $leitor;
        }

        public function abrir(){
            $this->aberto = true;
        }

        public function fechar(){
            $this->aberto = false;
        }

        public function folhear($p){
            if($p>$this->totpaginas){
                $this->pagAtual = 0;
            }else{
                $this->pagAtual = $p;
            }
        }

        public function avancarPag(){
            $this->pagAtual ++;
        }

        public function voltarPag(){
            $this->pagAtual --;
        }
    }


?>