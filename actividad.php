<?php
$db_host="localhost:3307";
$db_nombre="form_db";
$db_usuario="root";
$db_contra="";
$conexion = mysqli_connect($db_host, $db_usuario, $db_contra, $db_nombre);

if (mysqli_connect_errno()){
    echo "fallo al conectar con la base de datos";
    exit();
}
$nombre =$_POST['nombre'];
$apellido =$_POST['apellido'];
$email =$_POST['email'];
$nacimiento =$_POST['nacimiento'];
$contraseña =$_POST['contraseña'];

$consulta = "INSERT INTO usuarios (nombre, apellido, email, fecha_nacimiento, contrasena) 
VALUES ('$nombre','$apellido','$email','$nacimiento',md5('$contraseña'))";

mysqli_query($conexion, $consulta);
echo "datos insertados correctamente";
mysqli_close($conexion);


?>