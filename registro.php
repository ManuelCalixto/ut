<?php
// Se utiliza para llamar al archivo que contine la conexion a la base de datos
require 'conexion.php';

// Validamos que el formulario y que el boton registro haya sido presionado
if (isset($_POST['registro'])) {

    // Obtener los valores enviados por el formulario
    $usuario = mysqli_real_escape_string($conexion, $_POST['nombre_user']);
    $contrasena = mysqli_real_escape_string($conexion, $_POST['contrasena_user']);
    $correo = mysqli_real_escape_string($conexion, $_POST['correo_user']);
    // Insertamos los datos en la base de datos
    $sql = "INSERT INTO usuarios (id_user, nombre_user, contrasena_user, correo_user) VALUES (null, '$usuario', '$contrasena', '$correo')";
    $resultado = mysqli_query($conexion, $sql);
    if ($resultado != 0) {
        // Iserción correcta
        echo "¡Se insertaron los datos correctamente!";
    } else {
        // Iserción fallida
        echo "¡No se puede insertar la informacion!" . "<br>";
        echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
    }
}
