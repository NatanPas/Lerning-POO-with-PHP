<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
        <?php
        require_once 'Caneta.php';
        
        $c1 = new Caneta("Bic", "Azul", 0.5);
        $c2 = new Caneta("Joy", "Preta", 1.0);
        print_r($c1);
        print_r($c2);
        
        ?>
        </pre>
    </body>
</html>
