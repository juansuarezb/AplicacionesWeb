<!DOCTYPE html>
<html>
    <body>
        <form method="GET" action="resultado.php">
            <fieldset>
                <legend>Informacion para pago virtual </legend>
                <summary>Petici&oacute;n por <i>GET</i></summary>
                Nombre: <br/>
                <!--Control de entrada, con el atributo name accedo al parametro, si no se pierde todo -->
                <input type="text" name="nombre"/> <br/>
                Edad: <br/>
                <input type="text" name="edad"/><br/>
                <br/>
                <input type="submit" value="Enviar"/><br/>
                </fieldset>
        </form>        
        <!--Los parametros se envian en el cuerpo-->
        <form method="POST" action="resultado.php">
            <fieldset>
                <legend>Informacion para pago virtual </legend>
                <summary>Petici&oacute;n por <i>POST</i></summary>
                Nombre: <br/>
                <!--Control de entrada, con el atributo name accedo al parametro, si no se pierde todo -->
                <input type="text" name="nombre"/> <br/>
                Edad: <br/>
                <input type="text" name="edad"/><br/>
                <br/>
                <input type="submit" value="Enviar"/><br/>
                </fieldset>
        </form>
    </body>



</html>