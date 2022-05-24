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

Antes de empezar a utilizar el proyecto tienes que haber creado una base de datos llamada **laravel** el usuario que utilizamos es **root** y no tiene contraseña

 :: si deseas cambiar el usuario y contraseña lo encontraras en el fichero .env ::

Una vez creada la base de datos y verificar que el usuario **root** existe desde la termina dentro del la carpeta debemos ejecutar las **migraciones**

> php artisan migrate


Una vez creadas las bases de datos ya puedes ejecutar la aplicacion con: 

>  php artisan serve


El email y contraseña para acceder al software es:

* admin@machine.com
* 1234


Para cambiar el usuario en cuestion o añadir uno nuevo puedes hacerlo en el fichero
**2014_10_12_000000_create_users_table.php**
