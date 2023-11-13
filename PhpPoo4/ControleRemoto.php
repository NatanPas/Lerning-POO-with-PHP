<?php
require_once 'Controlador.php';
class ControleRemoto implements controlador {
    //Atributos
    private $volume;
    private $ligado;
    private $tocando;
    
    //Métodos especiais
    public function __construct() {
        $this->volume = 50;
        $this->canal = 8;
        $this->ligado = false;
        $this-> tocando = false;
    }
    
    private function getVolume() {
        return $this->volume;
    }

    private function getLigado() {
        return $this->ligado;
    }

    private function getTocando() {
        return $this->tocando;
    }
    
    private function setVolume($volume): void {
        $this->volume = $volume;
    }

    private function setLigado($ligado): void {
        $this->ligado = $ligado;
    }

    private function setTocando($tocando): void {
        $this->tocando = $tocando;
    }
        
    function ligar(){
        $this->setLigado(true);
    }
    function desligar(){
        $this->setLigado(false);
    }
    function abrirMenu(){
        echo "<br>Está ligado?: ". ($this->getLigado()?"SIM":"NÃO");
        echo "<br>Está tocando?: ". ($this->getTocando()?"SIM":"NÃO");
        echo "<br>Volume". $this->getVolume();
        for ($i=0; $i <= $this->getVolume(); $i+=10){
            echo " |";
        }
        echo "<br>";
    }
    function fecharMenu(){
        echo "<br>Fechando Menu! ...";
    }
    function maisVolume(){
        if ($this->getLigado()) {
            $this->setVolume($this->getVolume() + 10);
        } else {
            echo "<p>Erro! Não posso aumentar o volume!</p>";
        }
    }
    function menosVolume(){
        if($this->getLigado()) {
            $this->setVolume($this->getVolume() - 10);
        } else {
            echo "<p>Erro! Não posso abaixar o volume!</p>";
        }
    }
    function ligarMudo(){
        if ($this->getLigado() && $this->getVolume() > 0) {
            $this->setVolume(0);
        }
    }
    function desligarMudo(){
        if ($this->getLigado() && $this->getVolume()==0) {
            $this->setVolume(50);
        }
    }
    function play(){
        if ($this->getLigado() && !($this->getTocando())) {
            $this->setTocando(true);
        }
    }
    function pause(){
        if ($this->getLigado() && $this->getTocando()) {
            $this->setTocando(false);
        }
    }
    
}
