<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>SOLITON CENTRAL</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="./dist/styles/styles.css">
</head>
<body>

<?php
  session_start();
  if (isset($_SESSION['UserID'])) {
    header("Location: ./options-menu.php");
  }else{
    echo '
    <div class="login-form">
      <div class="container">
        <div class="row d-flex text-center">
          <div class="login-inner col-lg-5 col-md-8 col-sm-9">
            <img class="p-3" src="./dist/images/logo.png" alt="">
            <form id="login-form" name="login-form" action="includes/login.inc.php" method="post">
              <input class="mt-3 form-control" type="email" name="login-email" placeholder="EMAIL" value="">
              <input class="mt-3 form-control" type="password"  name="login-password" placeholder="PASSWORD" value="">
              <button class="mt-3 col-4 btn btn-primary" form="login-form" type="submit" type="button" name="login-submit">LOGIN</button>
            </form>
          </div>
        </div>
      </div>
    </div>
    ';
  }
  include('includes/footer.inc.php');
?>
