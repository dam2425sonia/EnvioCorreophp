<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $mensaje = $_POST['mensaje'];

    // Dirección de correo electrónico donde se recibirá el mensaje
    $destinatario = "soniaemi2003@hotmail.com";
    $asunto = "Nuevo mensaje de contacto";

    // Cuerpo del mensaje
    $cuerpo = "Nombre: $nombre\n";
    $cuerpo .= "Correo Electrónico: $email\n";
    $cuerpo .= "Mensaje: $mensaje\n";

    // Cabeceras
    $cabeceras = "From: $email" . "\r\n" . "Reply-To: $email" . "\r\n";

    // Enviar el correo
    if (mail($destinatario, $asunto, $cuerpo, $cabeceras)) {
        echo "Correo enviado exitosamente.";
    } else {
        echo "Hubo un error al enviar el correo.";
    }
}
?>
