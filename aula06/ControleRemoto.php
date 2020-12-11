<?php
require_once 'Controlador.php';

class ControleRemoto implements Controlador{
    
    // Atributos
    private $volume;
    private $ligado;
    private $tocando;

    // Métodos Especiais
    function ControleRemoto(){
        $this->volume = 50;
        $this->ligado = false;
        $this->tocando = false;
    }

    private function getVolume(){
        return $this->volume;
    }
    private function getLigado(){
        return $this->ligado;
    }
    private function getTocando(){
        return $this->tocando;
    }
    private function setVolume($volume){
        $this->volume = $volume;
    }
    private function setLigado($ligado){
        $this->ligado = $ligado;
    }
    private function setTocando($tocando){
        $this->tocando = $tocando;
    }

    // Métodos
    public function ligar(){
        if($this->getLigado() == false){
            $this->setLigado(true);
        }
    }

    public function desligar(){
        if($this->getLigado() == true){
            $this->setLigado(false);
        }
    }

    public function abrirMenu(){
        echo "<p>----- MENU -----<p>";
        echo "<br>Está ligado? " . ($this->getLigado() ? "SIM" : "NÃO");
        echo "<br>Está tocando? " . ($this->getTocando() ? "SIM" : "NÃO");
        echo "<br>Volume: " . $this->getVolume();
        for($i = 0; $i <= $this->getVolume(); $i += 10){
            echo "|";
        }
        echo "<br>";
    }

    public function fecharMenu(){
        echo "<br>Fechando Menu...";
    }

    public function aumentarVolume(){
        if($this->getLigado()){
            $this->setVolume($this->getVolume() + 5);
        }
        else{
            echo "<p>ERRO! Não posso aumentar o volume.";
        }
    }

    public function diminuirVolume(){
        if($this->getLigado()){
            $this->setVolume($this->getVolume() - 5);
        }
        else{
            echo "<p>ERRO! Não posso diminuir o volume.";
        }
    }

    public function ativarMudo(){
        if($this->getLigado() &&  $this->getVolume() > 0){
            $this->setVolume(0);
        }
    }

    public function desativarMudo(){
        if($this->getLigado() && $this->getVolume() == 0){
            $this->setVolume(50);
        }
    }

    public function play(){
        if($this->getLigado() && !($this->getTocando())){
            $this->setTocando(true);
        }
    }

    public function pause(){
        if($this->getLigado() && $this->getTocando()){
            $this->setTocando(false);
        }
    }

}