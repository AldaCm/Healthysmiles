<?php

define("SERVIDOR","localhost");
define("USUARIO","285904");
define("CONTRASENA","123456");
define("BD","285904");
define("PUERTO","3306");

$conexion= mysqli_connect(SERVIDOR, USUARIO, CONTRASENA, BD, PUERTO);
?>
