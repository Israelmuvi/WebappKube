<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Inserta los datos del formulario en la base de datos MySQL
    $mysqli = new mysqli("mysql", "my_user", "my_password", "my_database");

    // Verifica la conexión
    if ($mysqli->connect_error) {
        die("Error de conexión: " . $mysqli->connect_error);
    }

    // Prepara y vincula
    $stmt = $mysqli->prepare("INSERT INTO form_data (name, email, message) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $name, $email, $message);

    // Ejecuta la consulta
    $stmt->execute();

    echo "Mensaje enviado correctamente.";
} else {
    http_response_code(405);
    echo "Método no permitido";
}
?>
