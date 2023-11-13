<?php
require_once 'Aluno.php';
class Tecnico extends Aluno{
    private $registroPro;
    
    public function praticar(){
        echo "<p>$this->nome está praticando sua função!</p>";
    }
    public function getRegistroPro() {
        return $this->registroPro;
    }

    public function setRegistroPro($registroPro): void {
        $this->registroPro = $registroPro;
    }


}
