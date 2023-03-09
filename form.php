<?php
if (isset($_POST['enviar'])) { 
    if (!empty($_POST['name']) && !empty($_POST['msg']) && !
    empty($_POST['email'])) {
    $name = $_POST['name'];
    $msg = $_POST['msg'];
    $email = $_POST['email']; I
    $header = "From: noreply@example.com" . "\r\n";
    $header.= "Reply-To: noreply@example.com" . "\r\n";
    $header.= "X-mailer: PHP/". phpversion();
    $mail = @mail($email,$msg,$header);
   
    }

    }


?>