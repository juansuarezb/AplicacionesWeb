<?php 
    //Instrucciones para crear cookies en php
    // SET_COOKIE --> fichero que se pasa por la cabecera del mensaje HTPP
    // _COOKIE  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo Cookie</title>
    <style>
        fieldset{
            width: 40%;
           
        }

        h1{
            text-align: center;
        }

        button{
            background-color: #4CAF50; /* Green */
        }
        
    </style>
</head>
<body>
    <h1>Login - Ejemplo Cookies</h1>
    <form action="miPanel.php" method="POST">
        <fieldset>
            <legend><strong>Ingreso de datos</strong></legend>
            <label for="usuario">Usuario: </label>
            <input type="text" name="usuario" required placeholder="user1"> <br>
            <label for="pass">Contraseña: </label>
            <input type="password" name="pass" required placeholder="*****"> <br> <br>
            <strong>Selecciona tu género:</strong> <br>
            <label for="sexo">Sexo: </label>
            <input type="radio" name="genero" value="h"/>
            <label for="hombre">Hombre</label>
            <input type="radio" name="genero" value="m"/>
            <label for="mujer">Mujer</label> <br> <br>
            Recordarme: <input type="checkbox" name="recordar" checked> <br> <br>
            <button type="submit" value="Enviar">Enviar</button>
        </fieldset>
        
    </form>
    
</body>
</html>