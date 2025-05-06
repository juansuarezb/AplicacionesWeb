<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Mi primera p&aacute;gina web</title>
    </head>
    <body>
        <header></header>
        <main>
            Hola Mundo! <br>
            <b>Esto es negrita </b> <br>
            <!--con la etiqueta i utilizo estilo italica-->
            <!--con &aacute; coloco una tilde-->
            <i>Y esto it&aacute;lica.</i>
        </main>
        <footer></footer>
    </body>
</html>

<?php

    #Este es un comentario
    echo 'Hola esta es una impresion con echo';
    echo '<br/>';
    print 'Impresion con print';

    # ====================== VARIABLES ====================== 
    $pais = "Ecuador";
    $numero = 2025;

    echo "<br/>";
    echo "$pais es rico y diverso. El $pais del $numero";
    echo "<br/>";
    echo $pais. " es rico y diverso. El ". $pais. " del ". $numero;
    die();
    $estadocivil = array("soletro", "casado", "doctor en informatica");
    echo "<br/>";
    print_r($estadocivil);
    echo "<br/>";
    var_dump($estadocivil);
    echo "<br/>";
    echo $estadocivil[1];
    echo "<br/>";

    $misestados = array("val1" => "soltero", "val2" => "casado");
    print_r($misestados);



?>

