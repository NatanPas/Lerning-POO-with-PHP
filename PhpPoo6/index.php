<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require_once 'Pessoa.php';
        require_once 'Livro.php';
        
        $p[0] = new Pessoa("Natan", 23, "M");
        $p[1] = new pessoa("Bianca", 21, "F");
        
        $l[0] = new Livro("POO com PHP", "Gustavo Guanabarra", 450, $p[0]);
        $l[1] = new Livro("Desing 3D", "Maria antonieta", 796, $p[1]); 
        
        $l[0]->abrir();
        $l[0]->folhear(300);
        $l[0]->avancarPag();
        $l[0]->detalhes();
        
        $l[1]->abrir();
        $l[1]->folhear(300);
        $l[1]->voltarPag();
        $l[1]->detalhes();
        
        ?>
    </body>
</html>
