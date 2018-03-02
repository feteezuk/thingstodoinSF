<?php
header("Content-type: text/html");

  $name = $_POST["name"];
  $question = $_POST["question"];
  $email = $_POST["recipient"];
  


  $subject = "You have a USER INQUIRY:";
  $to = 'jhollan2@mail.ccsf.edu';
  $message = "Name: {$name} \n";
  $message .= "Email: {$email} \n"; 
  $message .= "Question: {$question} \n";


  if(!$_POST['name']){
    $errName = 'Please enter your name';
  }

   echo "<p>Thank you, " . $name . " Your Email has been Sent, and we will get back to you within 48 hours.</p>";

   //Build email (to myself)

   mail($to, $subject, $message);

