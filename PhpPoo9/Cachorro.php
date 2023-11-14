<?php
require_once 'Mamifero.php';
class Cachorro extends Mamifero{
    public function enterrarOsso() {
        echo "<p>Enterrando osso!...</p>";
    }
    public function emitirSom() {
        echo "<p>Au!Au!Au!</p>";
    }
    public function abanarRabo() {
        echo "<p>O cachorro está abanando o rabo!</p>";
    }
}
