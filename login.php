<?php

  $Nickname = "b191210061@sakarya.edu.tr";
  $Password= "5555";

  if($_POST['uname']==$Nickname && ($_POST['pswd'])==$Password)
  {
    echo "Hoşgeldiniz $Nickname";
  }
  else
  {
    header("Location:login.html");
  }
?>