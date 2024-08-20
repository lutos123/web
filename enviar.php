<?php
// Recibir datos del formulario
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$asunto = $_POST['asunto'];
$mensaje = $_POST['mensaje'];

// Configurar destinatario y cabeceras del correo
$destinatario = 'luisutosc@gmail.com'; // Reemplaza con tu dirección de correo
$header = "From: $correo\r\n";
$header .= "Reply-To: $correo\r\n";
$header .= "Content-Type: text/plain; charset=UTF-8\r\n";

// Preparar el cuerpo del mensaje
$mensajeCompleto = "Nombre: $nombre\n";
$mensajeCompleto .= "Correo Electrónico: $correo\n";
$mensajeCompleto .= "Asunto: $asunto\n";
$mensajeCompleto .= "Mensaje:\n$mensaje";

// Enviar el correo
if (mail($destinatario, $asunto, $mensajeCompleto, $header)) {
    echo "Gracias por contactarnos. Te responderemos lo antes posible.";
} else {
    echo "Hubo un error al enviar el mensaje. Por favor, intenta de nuevo.";
}
?>