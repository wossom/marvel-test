# Título del Proyecto

Marvel app

### Pre-requisitos 📋

-Tener instalado Docker y que se esté ejecutando.

### Instalación 🔧

-Debemos descargar el repositorio de github.

-Una vez descargado, ubicamos el proyecto en la ubicación que deseemos y abrimos el proyecto en la terminal de comandos de nuestro ordenador.

-Una vez estemos en la raíz del proyecto, para poder obtener la imagen y ver la aplicación web debemos ejecutar los siguientes comandos:

    docker-compose build

    docker network create marvel_network

    docker-compose up

-Luego vamos a un navegador, indicamos la dirección http://localhost:8080/ y podemos visualizar el proyecto

APLICACIÓN DE CONSOLA

-Para ejecutar la aplicación de consola debemos situarnos en la terminal en la raíz del proyecto.

-Luego, para ver el contenedor que hemos generado anteriormente debemos ejecutar el siguiente comando:

    docker ps

-Una vez localizado el contenedor, debemos coger el container id y ejecutarlo para poder acceder al contenedor y ejecutar la aplicación de consola:

    docker exec -it {CONTAINER ID} /bin/bash

    Ejemplo: docker exec -it 59aa922169b0 /bin/bash

-Después de haber accedido al contenedor, nos dirijimos al directorio "console":

    cd console

-Por último ejecutamos el comando php junto al nombre del fichero con la extensión para poder ejecutar la aplicación:

    php marvelConsole.exe

## Ejecutando las pruebas 

Funcionamiento aplicación de consola:

-Vamos a encontrarnos las siguientes opciones:

    marvel:characters
    marvel:character <id>
    marvel:character-comics <id>
    marvel:comic <id>
    marvel:comic-authors <id>

-En las opciones que veamos <id> se deberá indicar un numero identificativo para que la aplicación busque en la API de Marvel resultados que coincidan con el id. Indico ejemplos de posibles opciones para la consola de aplicación:

    marvel:characters
    marvel:character 1009351
    marvel:character-comics 1009351
    marvel:comic 180
    marvel:comic-authors 183


## Construido con 🛠️

* [PHP](https://www.php.net/manual/es/intro-whatis.php)
* [Bootstrap](https://getbootstrap.com/docs/5.1/getting-started/introduction/) 
