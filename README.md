Symfony Standard Edition
========================
<h2>Sistema de logueo y registro para symfony 2.8</h2>

<h3>composer install:</h3>
<p>nombre de la base de datos: symfony</p>

<span>crear la base de datos en caso de que con el composer install no salte el wizard para crearla:</span>
<h3>php app/console doctrine:database:create</h3>

<p>Actualizamos la base de datos con las tablas para el login</p>

<h3>php app/console d:s:u -f</h3>

Ya podemos lanzar la app:
<h3>php app/console server:run</h3>


<h4>En la base de datos el email y el last_name están puestos como UNIQUE, editarlo para quitar el UNIQUE del last_name para poder insertar registros con el mismo apellido.
