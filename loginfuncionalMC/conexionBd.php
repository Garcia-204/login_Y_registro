<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

$host = "localhost";
$user = "root";   // tu usuario de MySQL
$pass = "";       // tu contraseña de MySQL
$db   = "mesa_compartida"; // tu base de datos

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Error de conexión: " . mysqli_connect_error());
}
?>
