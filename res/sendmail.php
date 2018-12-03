<?php

  $email = $_REQUEST['email'] ;
  $message = $_REQUEST['message'] ;

  $to = "shiv@itapplication.net";
  $subject = "Message from itApplication.net";
  $txt = $email."\r\n".$message;
  /*
  $headers = "From: webmaster@example.com" . "\r\n" .
  "CC: somebodyelse@example.com";  */
  header( 'Location: thanks.php');
  
  // if the url field is empty 
  if(isset($_POST['url']) && $_POST['url'] == ''){
  mail($to,$subject,$txt,$headers);
 }
echo '<h1>Thanks</h1>';
