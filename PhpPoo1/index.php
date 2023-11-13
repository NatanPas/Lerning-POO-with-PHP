<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
        <?php
        require_once 'Caneta.php';
        $c1 = new Caneta;
        $c1->modelo = "BIC Cristal";
        $c1->cor = "vermelho";
        /*$c1->ponta = 0.5;
        $c1->carga = 50;
        $c1->tampada = false;*/
        $c1->tampar();
        //$c1->destampar();
        $c1->rabiscar(); 
        print_r($c1);
        
        ?>
        </pre>
    </body>
</html>
