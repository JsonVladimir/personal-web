<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Configurar los detalles del correo electrónico
    $to = "tucorreo@gmail.com";
    $subject = "Nuevo mensaje de contacto";
    $body = "Nombre: " . $name . "\n";
    $body .= "Email: " . $email . "\n";
    $body .= "Mensaje: " . $message;

    // Enviar el correo electrónico
    $headers = "From: " . $email . "\r\n";
    $headers .= "Reply-To: " . $email . "\r\n";

    if (mail($to, $subject, $body, $headers)) {
        echo "¡El correo electrónico ha sido enviado exitosamente!";
    } else {
        echo "Hubo un error al enviar el correo electrónico. Por favor, inténtalo de nuevo.";
    }
}
?>