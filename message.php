<?php
  $nombre = htmlspecialchars($_POST['nombre']);
  $email = htmlspecialchars($_POST['email']);
  $telefono = htmlspecialchars($_POST['telefono']);
  $proyecto = htmlspecialchars($_POST['proyecto']);
  $mensaje = htmlspecialchars($_POST['mensaje']);
  if(!empty($email) && !empty($mensaje)){
    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
      $receiver = "info@abba.studio"; //enter that email address where you want to receive all mensajes
      $subject = "De: $nombre <$email>";
      $body = "Nombre: $nombre\nEmail: $email\nTelefono: $telefono\nProyecto: $proyecto\n\nMensaje:\n$mensaje\n\nUn saludo,\n$nombre";
      $sender = "From: $email";
      if(mail($receiver, $subject, $body, $sender)){
         echo "Su mensaje a sido enviado";
      }else{
         echo "Erro al enviar su mensaje!";
      }
    }else{
      echo "Ingresa una dirección de email valida";
    }
  }else{
    echo "Debes ingresar el email y mensaje";
  }
?>