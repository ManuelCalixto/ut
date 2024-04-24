<?php
// Se utiliza para llamar al archivo que contine la conexion a la base de datos
require 'conexion.php';

// Validamos que el formulario y que el boton login haya sido presionado
if(isset($_POST['login'])) {


$usuario = $_POST['nombre_user'];
$contrasena = $_POST['contrasena_user'];


$sql = "SELECT * FROM usuarios WHERE nombre_user = '$usuario' and contrasena_user = '$contrasena'";
$resultado = mysqli_query($conexion,$sql);
$numero_registros = mysqli_num_rows($resultado);
    if($numero_registros != 0) {
        // Inicio de sesión exitoso
        echo "Inicio de sesión exitoso. Bienvenido, " . $usuario . "!";
    } else {
        echo "Credenciales inválidas. Por favor, verifica tu nombre de usuario y/o contraseña."."<br>";
        echo "Error: " . $sql . "<br>" .mysqli_error($conexion);
    }
}