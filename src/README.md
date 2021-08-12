# Título del Proyecto

Marvel app

### Pre-requisitos 📋

-Tener instalado Docker y que se esté ejecutando.

### Instalación 🔧

-Debemos descargar el repositorio de github.

-Una vez descargado, ubicamos el proyecto en la ubicación que deseemos y abrimos el proyecto en la terminal de comandos de nuestro ordenador.

-Una vez estemos en la raíz del proyecto, para poder obtener la imagen y ver la aplicación web debemos ejecutar los siguientes comandos:

    docker-compose build

    docker-compose up

-Luego vamos a un navegador, indicamos la dirección http://localhost:8080/ y podemos visualizar el proyecto

APLICACIÓN DE CONSOLA

-Para ejecutar la aplicación de consola debemos situarnos en la terminal en la raíz del proyecto.

-Luego, debemos ejecutar el comando "docker ps" para ver el contenedor que hemos generado anteriormente

-Una vez localizado el contenedor, debemos coger el container id y ejecutarlo para poder acceder al contenedor y ejecutar la aplicación de consola:

    docker exec -it {CONTAINER ID} /bin/bash

    Ejempolo: docker exec -it 59aa922169b0 /bin/bash

-Después de haber accedido al contenedor, nos dirijimos al directorio "console":

    cd console

-Por último ejecutamos el comando php junto al nombre del fichero con la extensión para poder ejecutar la aplicación:

    php php marvelConsole.exe


## Construido con 🛠️

_Menciona las herramientas que utilizaste para crear tu proyecto_

* [PHP](https://www.php.net/manual/es/intro-whatis.php)
* [Bootstrap](https://getbootstrap.com/docs/5.1/getting-started/introduction/) 
