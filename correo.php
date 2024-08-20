<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener datos del formulario
    $nombre = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $mensaje = htmlspecialchars($_POST['message']);

    // Tu dirección de correo electrónico
    $para = 'lasou.studio@gmail.com'; // Reemplaza con tu dirección de correo

    // Asunto del correo
    $asunto = 'Nuevo mensaje del formulario de contacto';

    // Cuerpo del mensaje
    $cuerpo = "Nombre: $nombre\nCorreo: $email\nMensaje:\n$mensaje";

    // Encabezados del correo
    $encabezados = "From: $email";

    // Enviar correo
    if (mail($para, $asunto, $cuerpo, $encabezados)) {
        echo "Mensaje enviado con éxito.";
    } else {
        echo "Hubo un problema al enviar el mensaje.";
    }
}
?>
