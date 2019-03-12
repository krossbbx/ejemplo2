<?php
include "programacion.php";
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="UTF-8">
        <link href="estilo.css" rel="stylesheet" type="text/css">
        <title></title>
    </head>
    <body>
        <p class="estilo02">UNO</p>
        <p style="background: yellow;font-size: 25px">DOS</p>
        <p class="estilo01">TRES</p>
        
        
        <?php
        echo "<br>";
        require "resultado.php";
        
            $A=10;
            $a=10;
            $hello="Hello world";
            $a++;
            
            echo "Saludo $hello x $A y $a";
            echo "<br>";
            echo 'Saludo $hello x $A y $a';
            echo "<br>";
            echo 'Saludo '. $hello. ' x '.$A.' y '.$a;
            
            $dia["Lunes"]="1 clase";
            $dia["Martes"]="3 clases";
            $dia["Miercoles"]="4 clases";
            $dia["Jueves"]="2 clases";
            $dia["Viernes"]="4 clases";
            echo "<br>";
            
            foreach ($dia as $value){
                echo$value ."<br>";                
            }
        ?>
    </body>
</html>
