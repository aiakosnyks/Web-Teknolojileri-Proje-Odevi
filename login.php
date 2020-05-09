<?php

if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }

$Nickname = "b191210061@sakarya.edu.tr";
$Password= "5555";

if($_POST['username']==$Nickname && ($_POST['password'])==$Password)
{
   if ( !empty($_POST['username']) && !empty($_POST['password']))
   {
      echo "Hoşgeldiniz $Nickname";
   } 
  
}
else
{
   header("Location:login.html");
}

  ?>