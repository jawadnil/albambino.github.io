<?php 

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "db1";


$conexion = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if (!$conexion) {
	die("No hay conexion: ".mysqli_connect_error());
}

$correo = $_POST['email'];
$contra = $_POST['pass'];

$query = mysqli_query($conexion,"SELECT * FROM usuarios WHERE email = '$correo' and pass = '$contra'");
$nr = mysqli_num_rows($query);

if ($nr == 1) {
	$_SESSION['email'] = $email;
	header("Location: web.php");
}else{
	echo "Contraseña incorrecta";	
}
