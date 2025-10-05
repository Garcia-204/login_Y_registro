<?php     
error_reporting(E_ALL);
ini_set('display_errors', 1);

include("conexionBd.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name_user     = $_POST['name_user'];
    $password_user = $_POST['password_user'];
    $email_user    = $_POST['email_user'];

    $sql = "INSERT INTO usuarios (name_user, password_user, email_user) 
            VALUES ('$name_user', '$password_user', '$email_user')";

    if (mysqli_query($conn, $sql)) {
        echo "Registro exitoso. <a href='index.html'>Inicia sesión aquí</a>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>
