<?php

  //Checking the user got to the form correctly
  if (ISSET($_POST['login-submit'])) {
    require_once('..\\classes/User.class.php');


    //variable check
    if ($_POST["login-email"]) {
      if ($_POST["login-password"]) {
        $_POST["login-email"];
        $_POST["login-password"];
        $CurrentUser = new User();
        $EmailExists = $CurrentUser->IsUser($_POST["login-email"]);
        if ($EmailExists) {
          echo "email is correct";
          $IsPasswordCorrect = $CurrentUser->VerifyPassword($_POST["login-email"],$_POST["login-password"]);
          if ($IsPasswordCorrect) {
            session_start();
              $UserInfo = $CurrentUser->ReturnUserData($_POST["login-email"]);
              $_SESSION['UserID'] = $UserInfo['UserID'];
              $_SESSION['UserFirstName'] = $UserInfo['UserFirstName'];
              $_SESSION['UserLastName'] = $UserInfo['UserLastName'];
              $_SESSION['UserRole'] = $UserInfo['UserRole'];
              $_SESSION['UserTitle'] = $UserInfo['UserTitle'];
              header("Location: ..\options-menu.php");
          }else {
            //Incorrect details send user home;
            header("Location: ..\\index.php?error=DetailsNotRecognised");
          }
        }else{
          //Incorrect details send user home;
          header("Location: ..\\index.php?error=DetailsNotRecognised");
        }
      }else{
        //Incorrect details send user home;
        header("Location: ..\\index.php?error=EmptyFields");
      }
    }else{
      //Incorrect details send user home;
      header("Location: ..\\index.php?error=EmptyFields");
    }
  }else{
    //Incorrect details send user home;
    header("Location: ..\\index.php?error=IncorrectCredentials");
  }

?>
