<?php
      
  $to      = "riritueur@gmail.com";
  $subject = $_POST['objet'];
  $message = $_POST['message'];
  $headers = 'From: '. $_POST['email'] .'('.$_POST['nom'].' '.$_POST['prenom'].')'. "\r\n" .
  'Reply-To: '. $_POST['email'] . "\r\n" .
  'X-Mailer: PHP/';

  mail($to, $subject, $message, $headers);

  header('Location: index.php#contact');
  exit();
?>