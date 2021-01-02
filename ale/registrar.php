<?php

$email = $_POST["email"];
$pass = $_POST["pass"];

$conexion = mysqli_connect("localhost", "root", "", "db1");
$insertar = "INSERT INTO usuarios(email,pass) VALUES ('$email', '$pass')";

$verificar_email = mysqli_query($conexion, "SELECT * FROM usuarios WHERE email = '$email'");
if (mysqli_num_rows($verificar_email)>0) {
    echo 'Este email ya esta registrado';
    exit;
}else{

$resultado = mysqli_query($conexion, $insertar);
if (!$resultado) {
    echo 'Error al registrarse';
}else{
    header("location: web.php");
}
}
mysqli_close($conexion);

?>