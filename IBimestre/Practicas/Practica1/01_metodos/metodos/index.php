

<?php 

?>


<!DOCTYPE html>
<html>
    <!--Cabecera head-->
    <!--Meta Contenido de la pagina-->
    <head>
        <meta charset="UTF-8">
        <title>Practica1</title>
    </head>

    <!--Cuerpo - Contenido de la pagina-->
    <body>
        <main>
            <h1>Peticion por GET </h1>
            <!--Especifico el metodo HTPP que va a utilizar el formultario-->
            <!--Co action especifico cual es el encargado de procesar el form -->
            <form action="resultado.php" method="POST">
                <!--Input significa entrad de usuario-->
                Nombre: <br>
                <input type="text" name="nombre" /> <br>
                Edad: <br>
                <input type="text" name="edad" />
                <br> <br>
<!--Etiqueta visible que va a salir en el boton-->
                <input type="submit" value= "enviar" />
            </form>
        </main>
    </body>

</html>