<?php>

if (issett($_POST['submit'])) {
  
  $name = $_POST["name"];
  $mailFrom = $_POST['email'];
  $message = $_POST['message'];
  
  $mailTo = "tracy@sa-ems.co.za"
  $headers = "From: ".$mailFrom;
  $txt = "You have received email from ". $name;  ".n/n/"   .$message;

  
  mail($mailTo ,$headers, $txt);
  header("Location: index.html?mailsend");
    # code...
}

