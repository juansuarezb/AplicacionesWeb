<?php

    #Este es un comentario
    #Aqui se imprime directamente a la pagina
    echo 'Hola, esto es una impresion con echo'; 
    echo "<br>";
    print "Impresión con print";

      # PHP no tiene tipado de datos

    # ========= VARIABLES ======== 
    $pais = "Ecuador";
    $numero = 2025;

    echo "<br>";
    #Concatenacion pura
    echo "$pais es rico y diverso, El $pais del $numero";
    echo "<br>";
    echo $pais. " es rico y diverso. El ". $pais ." del ". $numero;

    #Cortar el proceso de rendirazado
    die();


    # ====== ARRAYS =======
    #Declaracion de array
    $estadoCivil = array("soltero", "casado", "doctor en informatica");
    echo "<br>";
    #Imprimir contenido de un array
    print_r($estadoCivil);
    echo "<br>";
    var_dump($estadoCivil);
    #Imprimir un elemento del array me ayudo de los indices
    echo "<br>";
    echo $estadoCivil[1];
    #Un array incicando las claves de los elementos.
    $misEstados = array("val1"=>"soltero", "val2"=>"casado");
    echo "<br>";
    print_r($misEstados);

    
?>