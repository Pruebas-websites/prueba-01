<?php

if (isset($_POST['enviar'])) {
  if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['asunto']) && !empty($_POST['msg'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $asunto = $_POST['asunto'];
    $msg = $_POST['msg'];
    $header = "From: thedeath940702@gmail.com" . "\r\n";
    $header .= "Reply-To: thedeath940702@gmail.com" . "\r\n";
    $header .= "X-Mailer: PHP/". phpversion();
    $mail = mail($email, $asunto, $msg, $header);
    if ($mail) {
      echo "<h4>!Mail Enviado exitosamente¡</h4>";
    }
  }

}
?>
