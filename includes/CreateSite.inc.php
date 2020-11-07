<?php
//Is the user logged in?
session_start();
if (isset($_SESSION['UserID'])){
  //Did the user access the form via the button
  if (ISSET($_POST['create-site-submit'])){


  }else
  //Incorrect details send user home;
  header("Location: ..\\index.php?error=IncorrectCredentials");
}else{
  //Incorrect details send user home;
  header("Location: ..\\index.php?error=IncorrectCredentials");
}




 ?>
