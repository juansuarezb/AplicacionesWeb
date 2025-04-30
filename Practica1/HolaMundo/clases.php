<?php

class Persona{
    private $nombre;
    private $edad;
    
    function __construct($nombre, $edad){
        #referencar a los atributos de la clase
        $this->nombre = $nombre;
        $this->edad = $edad;
    }
    
    function saludar(){
        return "Hola, soy " . $this->nombre . ", y tengo " . $this->edad ." años";
    }
}

$persona = new Persona("Juan", 22);
echo $persona->saludar();
?>