## Sprint 1: Preparación
- Ya tenía sesión iniciada en gitHub, he creado el archivo dockerfile y he comprobado que me dejaba hacer commit y push añadiendo los cambios con git add . luego git commit -m y git push origin master, todo ha ido bien.
- 
- Iniciar sesión en docker es tan sencillo como usar docker login, como yo ya habia iniciado sesión anteriormente en la máquina direcatamente me devuelve login suceeded,si no nos pediría las credenciales.

## Sprint 2: Apache
-Hemos creado nuestra carpeta apache y nuestro archivo dockerfile, con el contenido para que coja una imagen oficial de apache y le servimos el index.html al directorio raíz de apache.

-Construimos la imagen con docekr build -t apache-server apache (para que busque en la carpeta apache)

-Nos ha ido todo bien y realizamos docker run -d -p 8080:80 apache-server, si todo ha ido bien nos deveulve una cadena de letras y numeros y si accedemos al localhost 8080 nos devolvera nuestro hola mundo.

-Ahora voy a realizar un commit para ir guardando cambios.

## Sprint 3: Apache + PHP
-Para copiar nuestra carpeta apache y renombrarla realizamos un comando muy sencillo desde terminal cp -r apache apache-php

-Creamos el archivo index.php y le introducimos el código necesario para que nos muestre los datos que se nos piden.

-Construimos la imagen con docker build -t apache-php-server apache-php

-Antes de lanzar esta imagen, paramos el contenedor anterior. Comprobamos nuestros contenedores activos con docker ps, luego realizamos docker stop seguido del id del contenedor que queremos detener y ya lo tendremos.

-La lanzamos con docker run -d -p 8080:80 apache-php-server, y comprobamos que todo va bien accediendo al localhost.

-Me daba el error not found, he parado la imagen y he echo unos cambios en el dockerfile con respecto al primero de la carpeta apache, ahora funciona correctamente.

-Hacemos commit.

## Sprint 4: PHP
-Creamos en la carpeta apache-php tanto el archivo info.php y random.php con las funciones que se nos piden. Paramos la imagen que teniamos anteriormente para actualizar los cambios y volvemos a realizar los comando para crear imagen y lanzarla. Al acceder a localhost:8080/info.php y localhost:8080/random.php se nos debe mostrar la información requerida.

-Hacemos commit.

## Sprint 5: Composing con Apache + PHP + MySQL
-Hemos creado la carpeta apache-php-mysql

-Copiamos la carpeta apache-php dentreo de apache-php-mysql

-Creamos el docker-compose.yml y le introducimos el contenido requerido.

-Archivo init.sql, con un contenido básico para crear usuarios con contraseña.

-Modificamos el index.php para conectarse a la base de datos

-Creamos el archivo users.php para mostrar los usuarios de la base de datos

-Por ultimo lanzamos el entorno con docker-compose up --build

-Me estaba dando error por que no quedaba espacio en disco, he liberado cache y espacio en memoria con algunos comandos desde terminal y ya funciona correctamente.

-Por ultimo subimos el contenido a docker hub. Buscamos el nombre de nuestra imagen con docker images, creamos un contenedor docker run -d --name apache-php-container -p 8080:80 apache-php-mysql-apache-php:latest, iniciamos sesion si no lo hemos hecho con docker login, le creamos el tag ocker tag apache-php-mysql-apache-php:latest miusuario/apache-php-mysql:latest y por ultimo pusheamos sudo docker push miusuario/apache-p
hp-mysql:latest. Y ya lo tendriamos.