<?php

$EmailFrom = "info@wavefrontbiometric.com";
$EmailTo = "white.daniel.james@gmail.com";
$Subject = "Thanks for contacting Wavefront";
$Name = Trim(stripslashes($_POST['Name']));  
$Email = Trim(stripslashes($_POST['Email'])); 
$Website = Trim(stripslashes($_POST['Website']));
$Message = Trim(stripslashes($_POST['Message'])); 

// validation
$validationOK=true;
if (!$validationOK) {
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.htm\">";
  exit;
}

// prepare email body text
$Body = "";
$Body .= "Name: ";
$Body .= $Name;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $Email;
$Body .= "\n";
$Body .= "Website: ";
$Body .= $Website;
$Body .= "\n";
$Body .= "Message: ";
$Body .= $Message;
$Body .= "\n";

// send email 
$success = mail($EmailTo, $Subject, $Body, "From: <$EmailFrom>");

// redirect to success page 
if ($success){
  print "<meta http-equiv=\"refresh\" content=\"0;URL=php\contactthanks.php\">";
}
else{
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.htm\">";
}
?>