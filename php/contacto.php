<?php

$EmailFrom = $_REQUEST['email']; 
//$EmailTo = "ci2t@uabc.edu.mx,"."cgaxiola@uabc.edu.mx,"."dtrujillotoledo@uabc.edu.mx,"."alanism@uabc.edu.mx"; // Your email address here
$EmailTo ="alanism@uabc.edu.mx";
$Subject = "Formulario Contacto Ci2tijuana.org";
$Name = Trim(stripslashes($_POST['name'])); 
$Email = Trim(stripslashes($_POST['email'])); 
$Message = Trim(stripslashes($_POST['message'])); 

// validation
$validationOK=true;
if (!$validationOK) {
  echo "Error";
  exit;
}

// prepare email body text
$Body = "";
$Body .= "Nombre: ";
$Body .= $Name;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $Email;
$Body .= "\n";
$Body .= "Mensaje: ";
$Body .= "\n";
$Body .= "\n";
$Body .= $Message;
$Body .= "\n";

// send email 
$success = mail($EmailTo, $Subject, $Body, "From: <$EmailFrom>");

// redirect to success page 
if ($success){
 header("Location: http://ci2tijuana.org/Contacto.html");
  // echo "Succes";
}
else{
  echo "Error";
}
?>