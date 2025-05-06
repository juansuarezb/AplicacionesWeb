<?php
    //Asumo que me envian los datos por GET (¿cuales son los parametros que me envian por GET)
    //Miro los atributos name en el index
    //Imprimir el array GET
    //var_dump($_GET);
    $metodo = '';
    
    //Esta configurado?
    if (isset($_POST['nombre']) && isset($_POST['edad'])) {
        $metodo = "POST";
        $nombre = $_POST['nombre'];
        $edad = $_POST['edad'];
    } else {
        $metodo = "GET";
        $nombre = $_GET['nombre'];
        $edad = $_GET['edad'];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Información enviada por <?php echo $metodo?></h1>
    <p>Nombre: <?php echo $nombre; ?></p>
    <p>Edad: <?php echo $edad; ?></p>

    <h3>Gracias por hacer el pago!</h3>
    <!--Ancle-->
    <a href="index.php">Regresar al inicio</a>
</body>
</html>