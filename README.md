> [!IMPORTANT]
> **Lectura Semana 1: Orígenes de la Web** <br>
> *Objetivos:*
> 1. Conocer el origen de la web y los actores involucrados
> 2. Identificar ideas precursoras de la web
> 3. Explicar la evolución de la web
> 4. Conocer quién está a cargo del Control y Organización de la Web
> 5. Describir los tipos de aplicaciones Web
> 6. Distinguir las principales ventajas e inconvenientes de cada tipo de aplicación.
> 7. Listar ejemplos de cada aplicación

> [!NOTE]
> ## Un poco de historia
> *Se hablará de las ideas precursoras que sembraron las bases para la web, además de explicar la siguientes palabras y discutir su papel en el proceso del nacimiento de la web:*
> <div align="center">
>   <img src="https://github.com/juansuarezb/AplicacionesWeb/raw/Semana2/Imagenes/Imagen1.avif" alt="Imagen1" width="60%">   
> </div>
> Él es Tim Berners-Lee padre de la WorldWideWeb (WWW - Red Informática Mundial), desarrolló la web considerando 3 componentes clave: <br>
> <div align="center">
>   <img src="https://github.com/juansuarezb/AplicacionesWeb/raw/Semana2/Imagenes/Imagen2.webp" alt="Imagen1" width="40%">   
> </div>
> 1. HTML (Lenguaje de etiquetas de hipertexto) <br>
> 2. URL (Localizador de recursos) <br>
> 3. HTTP (Protocolo de comunicaciones) <br>

> [!IMPORTANT]
> *Es imporante recordar que la web **NO** es lo mismo que internet*


> [!NOTE]
> ## Conceptos Clave
> 1. **World Wide Web (la web o WWW)** fue creada por Tim Berners-Lee en 1991 en el *CERN*. <br>
> 2. **Ideas precursoras de la web:** <br>
> ```mermaid
> graph TD
>     A[Ideas Precursoras de la Web]
>     A --> B[Memex - Vannevar Bush 1945]
>     A --> C[Proyecto Xanadu - Ted Nelson 1960]
>     A --> D[Compartir información científica - CERN]
> ```
> 3. **La Web es servicio de hipertexto/hipermedia para compartir documentos en Internet.**
> 4. **La web se fundamenta en 3 estándares:** 
> ```mermaid
> graph TD
>    A[Estándares de la Web]
>    A --> B[URL]
>    A --> C[HTML]
>    A --> D[HTTP]
> ```
> - **URL (Localizador de Recursos Universal)**: secuencia de caracteres, de acuerdo a una sintaxis, que se usa para *nombrar recursos de Internet para su localización o identificación.*
> - **HTML (Lenguaje de marcas de hipertexto)**: Lenguaje de marcas que estructura el contenido web mediante etiquetas.
> - **HTTP (Hypertext Transfer Protocol)**: Protocolo que permite la comunicación entre cliente y servidor, define la sintaxis y la semántica que utilizan los elementos de software de la arquitectura web.
> 5. **World Wide Web Consortium (W3C):** velar por los estándares de la Web.

> [!NOTE]
> ## ¿Qué es una aplicacion web?
> *Es un programa de computador **cliente-servidor** que se ejecuta en un navegador* <br>
> -No dependen del S.O. sino, del navegador web en el que se ejecutan. <br>
> *-Renderización:* proceso para visualizar la página web. <br>
> *-Arquitectura cliente-servidor:* <br>
> <div align="center">
>   <img src="https://github.com/juansuarezb/AplicacionesWeb/raw/Semana2/Imagenes/Imagen5.avif" alt="Imagen1" width="40%"> <br>
> -  Un cliente realiza peticiones "solicita" <br>
> -  Un servidor apartir de la solicitud "responde" <br>
> -  La comunicación entre cliente - servidor es através del procotolo TCP/IP  
>   <p>La aplicación web se ejecuta en el navegador del cliente pero prviamente hubo una petición al servidor que procesa dicha app. web.</p>  
> </div>  

> [!NOTE]
> ## Arquitectura Web
> *La web es un servicio de internet asi, primero entenderemos la estructura de comunicación del internet que funciona através de un protocolo llamado TCP/IP* <br>
> *Conocido como el protocolo de internet, la comunicación entre computadores sigue el **modelo** de cliente servidor* <br>
> La arquitectura web está basado en el modelo Cliente-servidor <br>
> 1. El cliente es un navegador web que puede ser ejecutado desde un dispositivo. Ej: Chrome. <br>
> 2. El servidor es una aplicación software denominado **servidor web** se ejecuta en un computador, **escucha** peticiones por un puerto **80**. Ej: Apache Tomcat <br>
> 3. La comunicaciónentre Cliente-Servidor se realiza atraves del protocolo **HTTP** el cual por detrás usa **TCP-IP**
> 4. 

> [!NOTE]
> ## Tipos de aplicaciones
> 
> ```mermaid
> graph TD
>    A[Tipos de aplicaciones Web]
>    A --> B[Aplicaciones Web Estáticas]
>    A --> C[Aplicaciones Web Dinámicas]
>    A --> D[Aplicaciones Web de una sola página SPA]
>    A --> E[Aplicaciones Web Progresivas PWA]
> ```
> - *Los tipos de aplicaciones Web 1 y 2 se las conoce como aplicaciones web **Tradicionales***

> [!NOTE]
> ## Aplicaciones Web estáticas
> *Denominadas junto con las aplicaciones web dinámicas como **aplicaciones tradicionales**, son las primeras aplicaciones web que se crearon* <br>
> <div align="center">
>   <img src="https://github.com/juansuarezb/AplicacionesWeb/raw/Semana2/Imagenes/Imagen3.avif" alt="Imagen de IA" width="30%">
>   <p>El trabajo consistía en escribir código con HTML luego, se cargaba la página con FTP al servidor web</p>
> </div>
> <div align="center">
>   <img src="https://github.com/juansuarezb/AplicacionesWeb/raw/Semana2/Imagenes/Imagen6.png" alt="Imagen de IA" width="30%">
>   <p>El desarrollador escribe la página web con HTML, CSS Y JS y carga la página en el servidor web.</p> <br> 
>   <p>Usuario solicita la URl</p> <br>
>   <p>El servidor localiza el documento </p> <br> 
>   <p> el servidor responde con el documento (página web encontrada) </p> <br> 
>   <p>El cliente presenta el documento HTML al usuario</p>  
> </div>

> [!NOTE]
> ## Aplicaciones Web de página única (SPA)
> 

> [!NOTE]
> ## Aplicaciones Web Progresivas (PWA)
> *Primero, hay que entender el concepto de **aplicación nativa***  
> Aplicaciones desarrolladas específicamente para un S.O. (ej: WhatsApp).  
> Funcionan sin internet y se distribuyen en App Store y Play Store.  
> 
> ***PWA (Progressive Web Apps)**: Una forma de crear aplicaciones web que se adaptan a dispositivos móviles.*  
> Llevan el concepto de la web al móvil y **se ejecutan en el navegador**, siendo la evolución de las apps web tradicionales.  
> 
> **🔍 Ventajas de las PWA:**  
> ✅ **No necesitan instalación** (se accede desde el navegador).  
> ✅ **Velocidades de carga superiores** (uso de caché y optimización).  
> ✅ **Notificaciones push** (directamente al smartphone).  
> ✅ **Prueba antes de descargar** (funcionan como web normal).  
> ✅ **Multiplataforma** (ejecución en cualquier SO: Windows, macOS, Android, iOS).  
> ✅ **Adaptación al SO** (se ajustan al diseño del sistema).  
> ✅ **Mayor seguridad** (menor riesgo de malware vs. apps nativas).  
> ✅ **Actualizaciones automáticas** (sin intervención del usuario).  
> ✅ **Menor coste** (desarrollo y mantenimiento vs. apps nativas).  
> ✅ **Menor consumo de recursos** (comparado con apps nativas).  
> 
> **⚠️ Desventajas:**  
> ❌ **Requieren conexión a internet** (aunque pueden funcionar offline con Service Workers).  
> ❌ **Limitaciones en funcionalidades nativas** (ej: NFC, Bluetooth avanzado).  
> ❌ **Dependencia del navegador** (rendimiento varía según Chrome, Safari, etc.).
>  <div align="center">
>   <img src="https://github.com/juansuarezb/AplicacionesWeb/raw/Semana2/Imagenes/Imagen2.avif" alt="Imagen de una PWA" width="30%">
>   <p>Son una serie de características, tecnologías que le agregamos a una app. web existente para que se comporte como una aplicación movil nativa (Adaptar a la aplicación web)</p>
>   <p>Se está tratando de que una app. web tengo el mismo rendimiento que una app. móvil nativa.</p></p>
> </div>
> <div align="center">
>   <img src="https://github.com/juansuarezb/AplicacionesWeb/raw/Semana2/Imagenes/Imagen4.avif" alt="Imagen de IA" width="30%">
>   <p>Ejemplos de aplicaciones web progresivas</p>
> </div>

> [!IMPORTANT]
> **Service Worker:** permite ejecutar el navegador en 2do plano <br>
> Voy a tener una página web y en 2do plano se ejecuta el navegador del dispositivo


> [!NOTE]
> ## CLASE 2
> ## 21/04/2025

# Índice

- [Ir a PROCESO UNIFICADO DE DESARROLLO](#proceso-unificado-de-desarrollo)
- [Ir a Información de la Carrera](#información-de-la-carrera)
- [Ir a Diagrama de Modulos](#diagrama-de-modulos)
- [Ir a Casos de Uso](#casos-de-uso)
- [Ir a Perfil Profesional](#perfil-profesional)




