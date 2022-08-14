<?php

  require("Mailer/src/PHPMailer.php");
  require("Mailer/src/SMTP.php");

    $mail = new PHPMailer\PHPMailer\PHPMailer();
    $mail->IsSMTP(); // enable SMTP

    $mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
    $mail->SMTPAuth = true; // authentication enabled
    $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
    $mail->Host = "smtp.gmail.com";
    $mail->Port = 465; // or 587
    $mail->IsHTML(true);
    $mail->Username = "kaarulmurugan.new@gmail.com";
    $mail->Password = "Saritha.1";
    $mail->SetFrom("kaarulmurugan.new@gmail.com");
    $mail->Subject = "Invitation For MediCall";
    $mail->Body = "<h1>mediCall Invitation</h1>";
    $mail->AddAddress("karthik@accendoncloud.com");

     if(!$mail->Send()) {
        echo "Mailer Error: " . $mail->ErrorInfo;
     } else {
        echo "Message has been sent";
     }
  echo "Hi";
?>