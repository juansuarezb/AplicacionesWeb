<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Practica 1 de aplicaciones web usando XAMPP, aprendizaje de PHP y servidores web.">
        <link href="styles.css" rel="stylesheet"/>
        <title>Práctica 1: PHP y Servidores Web</title>
    </head>
    <body>
        <header>
            <h1>Aplicaciones Web Semana 3: 29/04/2025</h1>
            <h2>Práctica 1: XAMPP</h2>
        </header>

        <main>
            <section class="introduccion">
                <h3>Introducción</h3>
                <p>En esta práctica exploramos el uso de PHP y los servidores web. A continuación, aprenderemos sobre su funcionamiento.</p>
                <?php
                echo "<p>Hola Mundo desde PHP!</p>";
                ?>
            </section>

            <section class="clase">
                <h3>Servidor Web</h3>
                <p>Un <em>Servidor Web</em> es un programa que se aloja en un RACK...</p>
                <p>Esta aplicación abre un puerto para estar escuchando constantemente (Puerto 80 por defecto).</p>
            </section>

            <section class="clase">
                <h3>Tipos de aplicaciones</h3>
                <ul>
                    <li><strong>Aplicaciones Estáticas:</strong> <br> Las primeras aplicaciones donde el servidor solo sirve archivos estáticos como HTML y CSS.</li>
                    <li><strong>Aplicaciones Dinámicas:</strong> <br> El servidor genera contenido dinámico utilizando lenguajes como PHP, Python, etc.</li>
                    <li><strong>SPA:</strong> Aplicaciones de una sola página, donde la interfaz cambia dinámicamente sin recargar toda la página.</li>
                    <li><strong>PWA:</strong> Aplicaciones web progresivas que permiten un funcionamiento similar al de una aplicación nativa.</li>
                </ul>
                <p>El servidor Apache escucha en los puertos 80 para HTTP y 443 para HTTPS.</p>
            </section>

            <section>
                <h3>Ejemplo de Código PHP</h3>
                <figure>
                    <img src="Imagenes/imagen1.avif" alt="Servidor Apache" width="60%"/>
                    <figcaption>Este es un ejemplo de un servidor Web Apache.</figcaption>
                </figure>
                <pre>
&lt;?php
    # Este es un comentario
    # Aquí se imprime directamente a la página
    echo 'Hola, esto es una impresión con echo';
    echo "&lt;br&gt;";
    print "Impresión con print";

    # ------ variables ------
    $pais = "Ecuador";
?&gt;
                </pre>
            </section>
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
            echo $pais . " es rico y diverso. El " . $pais . " del numero " . $numero;
            
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
            $misEstados = array("val1" => "soltero", "val2" => "casado");
            echo "<br>";
            print_r($misEstados);
            ?>
            <section>

            </section>

        </main>

        <footer>
            <p>&copy; 2025 Practica Web | Desarrollado por [Tu Nombre]</p>
        </footer>
    </body>
</html>