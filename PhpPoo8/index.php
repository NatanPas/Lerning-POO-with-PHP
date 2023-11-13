<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body><pre>
        <?php
        require_once 'Visitante.php';
        require_once 'Aluno.php';
        require_once 'Bolsista.php';
        require_once 'Professor.php';
        require_once 'Tecnico.php';
        /*$v1 = new Visitante();
        $v1->setNome("Jovem");
        $v1->setIdade(17);
        $v1->setSexo("M");
        print_r($v1);*/
        
        $a1 = new Aluno();
        $a1->setNome("Maria");
        $a1->setIdade(20);
        $a1->setSexo("F");
        $a1->setMatricula(11111);
        $a1->setCurso("informática");
        $a1->pagarMensalidade();
        print_r($a1);
        
        $b1 = new Bolsista();
        $b1->setNome("Fernanda");
        $b1->setIdade(22);
        $b1->setSexo("F");
        $b1->setMatricula(22222);
        $b1->setCurso("Sistemas");
        $b1->pagarMensalidade();
        print_r($b1);
        
        $t1 = new Tecnico();
        $t1->setNome("José");
        $t1->setIdade(19);
        $t1->setSexo("M");
        $t1->setMatricula(121212);
        $t1->setCurso("Gestão");
        $t1->setRegistroPro(54687);
        $t1->praticar();
        $t1->pagarMensalidade();
        print_r($t1);
        
        $p1 = new Professor();
        $p1->setNome("Varoujan");
        $p1->setIdade(58);
        $p1->setSexo("M");
        $p1->setSalario(15000);
        $p1->setEspecialidade("Doutor em POO");
        $p1->receberAumento(1250);
        print_r($p1)
        
        ?>
    </pre></body>
</html>
