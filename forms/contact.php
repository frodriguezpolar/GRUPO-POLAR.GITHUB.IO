<?php
  $nombre = $_POST["name"];
  $correo = $_POST["email"];
  $asunto = $_POST["subject"];
  $mensaje = $_POST["message"];
   
  $datos = "De: $nombre\nCorreo: $correo\nMensaje: $mensaje";
  $destinatario = "atencionalcliente@grupopolargt.com"; # aquí la persona que recibirá los mensajes
  $encabezados = "Sender: info@grupopolargt.com\r\n"; # El remitente, debe ser un correo de tu dominio de servidor
  $encabezados .= "From: $nombre <" . $correo . ">\r\n";
  $encabezados .= "Reply-To: $nombre <$correo>\r\n";
  $resultado = mail($destinatario, $asunto, $mensaje, $encabezados);
  if ($resultado) {
      echo "<h1>Mensaje enviado, ¡Gracias por contactarme!</h1>";
  } else {
      echo "Tu mensaje no se ha enviado. Intenta de nuevo.";
  }


  
?>
