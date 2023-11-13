<?php
class ContaBanco {
    public $numConta;
    protected $tipo;
    private $dono;
    private $saldo;
    private $status;
    
    public function abrirConta($t){
        $this->setTipo($t);
        $this->setStatus(true);
        if ($t == "CC") {
            $this->setSaldo(50);
        } elseif ($t =="CP") {
            $this->setSaldo(150);
        }
    }
    public function fecharConta(){
        if ($this->getSaldo() > 0) {
            echo "<p>Conta ainda tem dinheiro, não posso fecha-lá!</p>";
        } elseif ($this->getSaldo() < 0){
            echo "<p>Conta está em débito. Impossível encerrar!</p>";
        } else {
            $this->setStatus(false);
        }
    }
    public function depositar($v){
        if ($this->getStatus()){
            $this->setSaldo($this->getSaldo()+ $v);  
            echo "<p>Depósito de R$ $v na conta de ". $this->getDono() . "</p>";
        } else {
            echo "Conta fechada, não consigo sacar!";
        }
    }
    public function sacar($v){
        if ($this->getStatus()){
            if ($this->getSaldo() >= $v){
                $this->setSaldo($this->getSaldo() - $v);
                echo "<p>Saque de $v autorizado na conta de ". $this->getDono() ."</p>";
            } else {
                echo "Saldo insuficiente para saque";
            }
        } else {
            echo "Não posso sacar de uma conta fechada!";
        }
    }
    public function pagarMensal(){
        if ($this->getTipo() == "CC"){
            $v = 12;
        } elseif ($this->getTipo() == "CP") {
            $v = 20;
        }
        if ($this->getStatus()) {
            $this->setSaldo($this->getSaldo() - $v);
            echo "<p>Mensalidade de $v debitada da conta de ". $this->getDono() ."</p>";
        } else {
            echo "<p> Problemas com a conta, não posso cobrar.</p>";
        }
    }
    public function __construct() {
        $this->setSaldo(0);
        $this->setStatus(false);
        echo "<br/>Conta criada com sucesso!";
    }
    public function getNumConta() {
        return $this->numConta;
    }

    public function getTipo() {
        return $this->tipo;
    }

    public function getDono() {
        return $this->dono;
    }

    public function getSaldo() {
        return $this->saldo;
    }

    public function getStatus() {
        return $this->status;
    }

    public function setNumConta($numConta): void {
        $this->numConta = $numConta;
    }

    public function setTipo($tipo): void {
        $this->tipo = $tipo;
    }

    public function setDono($dono): void {
        $this->dono = $dono;
    }

    public function setSaldo($saldo): void {
        $this->saldo = $saldo;
    }

    public function setStatus($status): void {
        $this->status = $status;
    }



}
