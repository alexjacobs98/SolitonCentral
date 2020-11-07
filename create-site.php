<?php
include('includes/header.inc.php');
?>

  <form id="create-site-form" name="create-site-form" action="includes/CreateSite.inc.php" method="post">
    <input type="text" name="SiteName" placeholder="Site Name" value="">
    <input type="date" name="SiteSupportEnd" value="">
    <button class="" form="create-site-form" type="submit" type="button" name="create-site-submit">SUBMIT</button>
  </form>


<?php
include('includes/footer.inc.php');
?>
