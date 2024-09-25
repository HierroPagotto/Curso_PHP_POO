<?php 
    class ContaBanco{
        //Atributos
        public $numConta;
        protected $tipo;
        private $dono;
        private $saldo;
        private $status;
        //Métodos

        public function AbrirConta($t){
        $this->setTipo($t);
        $this->setStatus(true);
        if($t == "CC"){
            $this->setSaldo(50);
        }
        elseif($t == "CP"){
            $this->saldo = 150;
        }
        }

        public function fecharConta(){
            if($this->getSaldo() > 0 ){
            echo "A conta de ".$this->getDono()." ainda tem dinheiro, não posso fechá-la";
            }
            
            elseif($this->getSaldo() < 0 ){
                "Você precisa pagar seu débio antes de fechar a conta.";
            }

            else{
                $this->setStatus(false);
                echo "<p>A conta de ".$this->getDono()." foi fechada com sucesso.</p>";
            }

        }

        public function Depositar($v){
            if($this->getStatus()){
                $this->setSaldo($this->getSaldo() + $v);
                echo "<p>Depósito de $v autorizado na conta de".$this->getDono().".</p>";
            }
            else{
                echo "<p>Conta fechada</p>";
            }
        }

        public function Sacar($v){
            if($this->getStatus()){
                if($this->getSaldo() >= $v){
                    $this->setSaldo($this->getSaldo() - $v);
                    echo "<p>Saque de $v autorizado na conta de ".$this->getDono(). ".</p>";
            }
            else{
                echo "<p>Saldo insuficiente para saque.</p>";
            }}
            else{
                echo "Não posso sacar de uma conta fechada.";
            }
        }

        public function pagarMensal(){
            if ($this->getTipo() == "CC"){
                $v = 12;
                echo "<p>A mensalidade de 12 reias foi debitada da conta de ".$this->getDono(). ".</p>";
            }
            else if($this->getTipo() == "CP"){
                $v = 20;
                echo "<p>A mensalidade de 20 reais foi debitada da conta de ".$this->getDono().".</p>";
            }
            if($this->getStatus()){
            $this->setSaldo($this->getSaldo()- $v);
        }
            else{
                echo"<p>Problemas com a conta, não posso cobrar.</p>";
            }}
    //Métodos especiais
            
        public function __construct(){
        $this->setSaldo(0);
        $this->setStatus(false);
        echo "<p>Conta criada com sucesso!</p>";
        }


        public function setNumConta($n){
            $this->numConta = $n;
        }

        public function getNumConta(){
            return $this->numConta;
        }

        public function setTipo($t){
            $this->tipo = $t;
        }

        public function getTipo(){
            return $this->tipo;
        }

        public function setDono($d){
            $this->dono = $d;
        }

        public function getDono(){
            return $this->dono;
        }

        public function setSaldo($s){
            $this->saldo = $s;
        }

        public function getSaldo(){
            return $this->saldo;
        }

        public function setStatus($e){
            $this->status = $e;
        }

        public function getStatus(){
            return $this->status;
        }
        
    }
?>