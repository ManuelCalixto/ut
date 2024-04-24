<?php
// Definimos las credenciales de la base de datos
$servidor = "localhost"; // servidor de la base de datos
$usuario = "root"; // usuario de la base de datos
$contraseña = "12345678"; // contraseña de la base de datos
$base_de_datos = "calixto"; // nombre de la base de datos


$conexion = mysqli_connect($servidor, $usuario, $contraseña, $base_de_datos);