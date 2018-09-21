Symfony Standard Edition
========================
Sistema de logueo y registro para symfony 2.8

composer install:
-nombre de la base de datos: symfony

crear la base de datos en caso de que con el composer install no salte el wizard para crearla:
php app/console doctrine:database:create

Actualizamos la base de datos con las tablas para el login

php app/console d:s:u -f
