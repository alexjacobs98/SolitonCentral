<?php
  //Is the user logged in?
  session_start();
  if (isset($_SESSION['UserID'])){
    include("navbar.inc.php");
  }else{
    //Incorrect details send user home;
    header("Location: index.php?error=IncorrectCredentials");
  }
 ?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>SOLITON CENTRAL</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter&family=Russo+One&display=swap" rel="stylesheet">
  <link rel="stylesheet" href=".\dist/styles/styles.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
