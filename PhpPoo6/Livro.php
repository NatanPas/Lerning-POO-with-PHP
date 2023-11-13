<?php
require_once 'Pessoa.php';
require_once 'Publicacao.php';

class Livro implements Publicacao {
    //Atributos
    private $titulo;
    private $autor;
    private $totPaginas;
    private $pagAtual;
    private $aberto;
    private $leitor;
    
    //Métodos Públicos
    public function detalhes (){
        echo "<p>--------------------------------------</p>";
        echo "<p>Titulo: ". $this->getTitulo() . "</p>";
        echo "<p>Autor: " . $this->getAutor() . "</p>";
        echo "<p>Total de páginas: ". $this->getTotPaginas() . "</p>";
        echo "<p>Página atual: ". $this->getPagAtual() . "</p>";
        echo "<p>O livro está: ". ($this->getAberto()?"Aberto":"fechado") . "</p>";
        echo "<p>Está sendo lido por: ". $this->leitor->getNome() . "</p>";
    }
    
    //Métodos especiais
    public function __construct($ti, $au, $to, $le) {
        $this->titulo = $ti;
        $this->autor = $au;
        $this->totPaginas = $to;
        $this->aberto = false;
        $this->pagAtual = 0;
        $this->leitor = $le;
    }

    
    public function getTitulo() {
        return $this->titulo;
    }

    public function getAutor() {
        return $this->autor;
    }

    public function getTotPaginas() {
        return $this->totPaginas;
    }

    public function getPagAtual() {
        return $this->pagAtual;
    }

    public function getAberto() {
        return $this->aberto;
    }

    public function getLeitor() {
        return $this->leitor;
    }

    public function setTitulo($titulo): void {
        $this->titulo = $titulo;
    }

    public function setAutor($autor): void {
        $this->autor = $autor;
    }

    public function setTotPaginas($totPaginas): void {
        $this->totPaginas = $totPaginas;
    }

    public function setPagAtual($pagAtual): void {
        $this->pagAtual = $pagAtual;
    }

    public function setAberto($aberto): void {
        $this->aberto = $aberto;
    }

    public function setLeitor($leitor): void {
        $this->leitor = $leitor;
    }

    public function abrir() {
        if ($this->getAberto()){
            echo "<p>--------------------------------------</p>";
            echo "<p>O livro já está aberto!</p>";
        }else{
            $this->setAberto(true);
            echo "<p>--------------------------------------</p>";
            echo "<p>O livro foi aberto!</p>";
        }     
    } 
    
    public function fechar() {
            if ($this->getAberto() ){
                $this->setAberto(false);
                echo "<p>--------------------------------------</p>";
                echo "<p>O livro foi fechado!</p>";
            }else{
                echo "<p>--------------------------------------</p>";
                echo "<p>O livro já está fechado!</p>";
            }
        }
        
    public function avancarPag() {
        if ($this->getAberto() && $this->getpagAtual() < $this->getTotPaginas()){
            $this->setPagAtual($this->getPagAtual() + 1);
        }    
    }

    public function voltarPag() {
        if ($this->getAberto() && $this->getpagAtual() <= $this->getTotPaginas()){
            $this->setPagAtual($this->getPagAtual() - 1);
        }
    }

    public function folhear($p) {
        if ($this->getAberto() && $p < $this->totPaginas){
            $this->setPagAtual($p);
        } else {
            $this->pagAtual = 0;
        }
    }
}
