<?php
include("conexionBd.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // limpiar entradas
    $name_user     = mysqli_real_escape_string($conn, $_POST['name_user']);
    $password_user = mysqli_real_escape_string($conn, $_POST['password_user']);

    $sql = "SELECT * FROM usuarios 
            WHERE name_user='$name_user' 
            AND password_user='$password_user'";

    $result = mysqli_query($conn, $sql);

    if (!$result) {
        die("Error en la consulta: " . mysqli_error($conn));
    }

    if (mysqli_num_rows($result) == 1) {
        echo "✅ Bienvenido $name_user";
    } else {
        echo "❌ Usuario o contraseña incorrectos";
    }

    mysqli_close($conn);
}
?>

