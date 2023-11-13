<?php

class Caneta {
    public $modelo;
    public $cor;
    private $ponta;
    protected $carga;
    protected $tampada;
    
    public function rabiscar(){
        //verificanco atributo dentro de metodo na propria classe
        if ($this -> tampada == true){
            echo "<p>Erro, não posso rabiscar!</p>";
        } else {
            echo "<p>Estou rabiscando ... </p>";
        }
    }
    public function tampar(){
        $this->tampada = true;
    }
    public function destampar(){
        $this->tampada = false;
    }
}
