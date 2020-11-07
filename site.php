<?php
  session_start();
  if (isset($_SESSION['UserID'])) {
    require_once("./classes/Site.class.php");
    $SiteID = $_GET['SiteID'];
    $ThisSite = new Site();
    $SiteInformation = $ThisSite->GetSiteInformation($SiteID);
    $DatabaseRow = $SiteInformation->fetch_assoc();
    echo $DatabaseRow['SiteName'];
    echo $DatabaseRow['SiteSupportEnd'];

  }else{
    //Incorrect details send user home;
    header("Location: index.php?error=IncorrectCredentials");
  }
?>
