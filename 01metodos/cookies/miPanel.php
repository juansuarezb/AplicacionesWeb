<?php 

$nombre = $_POST['usuario'];
$clave = $_POST['pass'];
$sexo = $_POST['genero'];

//Seteo de una cookie
                                //Ahorita vive un mes
setcookie("c_usuario", $nombre, time()+(60*60*24*30));
setcookie("c_clave" , $clave, 0);
setcookie("c_sexo", $sexo, 0);

//Para mañana agregar un checkbox para recordarme
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Bienvenido/a <?php 
        echo $nombre;
    ?>
    </h1>
    <p>Nos has indicado que tu género es:<strong> <?php 
    echo $sexo;
    ?> </strong></b>

    <h3>Impresion del array </h3>
    <?php 

        var_dump($_COOKIE);
    ?>
    <br>
    <a href="borrarCookies.php">Borrar Cookies y regresar</a>
    <br>
    <a href="index.php">Regresar</a>
</body>
</html>
