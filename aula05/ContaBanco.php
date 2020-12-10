<?php

class ContaBanco{
    // Atributos
    public $numConta;
    protected $tipo;
    private $dono;
    private $saldo;
    private $status;

    // Métodos
    public function abrirConta($tipo){
        $this->setTipo($tipo);
        $this->setStatus(true);
        if($this->getTipo() == "CP"){
            $this->setSaldo(150);
        }
        else if($this->getTipo() == "CC"){
            $this->setSaldo(50);
        }
    }

    public function fecharConta(){
        if($this->getSaldo() > 0){
            echo "<p>Conta ainda tem dinheiro, não posso fechá-la!</p>";
        }
        else if($this->getSaldo() < 0){
            echo "<p>Conta está em débito. Impossível encerrar!</p>";
        }
        else{
            $this->setStatus(false);
            echo "<p>Conta de {$this->getDono()} fechada com sucesso!</p>";
        }
    }

    public function depositar($valor){
        if($this->getStatus()){
            $this->setSaldo($this->getSaldo() + $valor);
            echo "<p>Depósito de $valor na conta de {$this->getDono()}</p>";
        }
        else{
            echo "<p>Conta fechada. Não consigo depositar!</p>";
        }
    }

    public function sacar($valor){
        if($this->getStatus()){
            if($this->getSaldo() >= $valor){
                $this->setSaldo($this->getSaldo() - $valor);
                echo "<p>Saque de $valor autorizado na conta de {$this->getDono()}</p>";
            }
            else{
                echo "<p>Saldo insuficiente para saque!</p>";
            }
        }
        else{
            echo "<p>Não é possível sacar de uma conta fechada!</p>";
        }
    }

    public function pagarMensal(){
        if($this->getTipo() == "CC"){
            $mensalidade = 12;
        }
        else if($this->getTipo() == "CP"){
            $mensalidade = 20;
        }

        if($this->getStatus()){
            $this->setSaldo($this->getSaldo() - $mensalidade);
            echo "<p>Mensalidade de $mensalidade debitada na conta de {$this->getDono()}</p>";
        }
        else{
            echo "<p>Conta Fechada! Impossível pagar mensalidade!</p>";
        }
    }

    // Métodos Especiais
    public Function ContaBanco(){
        $this->setStatus(false);
        $this->setSaldo(0.0);
        echo "<p>Conta criada com sucesso!</p>";
    }

    public function getNumConta() {
        return $this->numConta;
    }
    public function setNumConta($numConta) {
        $this->numConta = $numConta;
    }

    public function getTipo(){
        return $this->tipo;
    }
    public function setTipo($tipo){
        $this->tipo = $tipo;
    }

    public function getDono(){
        return $this->dono;
    }
    public function setDono($dono){
        $this->dono = $dono;
    }

    public function getSaldo(){
        return $this->saldo;
    }
    public function setSaldo($saldo){
        $this->saldo = $saldo;
    }

    public function getStatus(){
        return $this->status;
    }
    public function setStatus($status){
        $this->status = $status;
    }
}

