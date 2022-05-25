<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

# Software utilizar

 - [ Laravel ^8.75](https://laravel.com/).
 - [ Composer ](https://getcomposer.org/).
 - [ mysql ](https://www.mysql.com/) o [ mariadb ](https://mariadb.org/).


# Instalacion 

Para instlar laravel y composer hemos utilizaro **Composer** con el comando

> apt-get installa composer

tambien debes instalar Maria db o mysql

>  apt install mariadb-server

## Get starter

Antes de empezar a utilizar el proyecto tienes que haber creado una base de datos llamada **laravel** o poner la tuya propia en el archivo .env en la linea **DB_DATABASE=TU_BBDD** el usuario que utilizamos es **root** y no tiene contraseña

pero tu puedes añadir el tuyo propio en el archivo ".env" en los apartados:
**DB_USERNAME=TU_USUARIO**
**DB_PASSWORD=TU_CONTRASEÑA**

 :: si deseas cambiar el usuario y contraseña lo encontraras en el fichero .env ::

Instamaos **php-curl** 

> sudo apt-get install php-curl

Desde la termina dentro de la carpeta debemos ejecutar 

> composer install

Regeneramos la api_key

> php artisan key:generate

Ejecutamos las migraciones

> php artisan migrate


Una vez creadas las bases de datos ya puedes ejecutar la aplicacion con

>  php artisan serve


El email y contraseña para acceder al software es:

* admin@machine.com
* 1234


Para cambiar el usuario en cuestion o añadir uno nuevo puedes hacerlo en el fichero
**2014_10_12_000000_create_users_table.php**


## Solucion a posibles problemas

En ocasiones puede haberse cacheado alguna informacion y no funcionar de manera correcta con estos 3 comandos puedes solucionar 

> php artisan config:cache

> php artisan config:clear

> composer dump-autoload -o
