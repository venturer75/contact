<?php
 
  // Uncomment below code if you want to use SMTP to send emails. You need to enter your correct SMTP credentials
  /*
  $contact->smtp = array(
    'host' => 'example.com',
    'username' => 'example',
    'password' => 'pass',
    'port' => '587'
  );
  */

  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

  $email_from = 'Test';
  $email_subject = 'New message form Test';
  $email_body = "Name: $name.\n".
                "Email: $email.\n".
                "Subject: $subject.\n".
                "Message: $message.\n";

  $to = "pavlos.mavroudis@gmail.com";
  $headers = "From: $email_from \r\n";
  $headers.= "Reply-to: $email \r\n";

  mail($to,$email_subject,$email_body,$headers);
  header("Location: index.html");


?>
