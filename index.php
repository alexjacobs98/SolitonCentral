<?php include('./includes/header.inc.php'); ?>
  <body>
    <div class="login-wrapper">
      <div class="login-inner">
        <div class="login-form col-lg-4 col-md-8 col-sm-12 p-5">
          <div class="logo-container">
            <img src="./dist/images/logo.png" alt="">
          </div>
          <form class="pb-5 pt-5" action="index.html" method="post">
            <input class="mt-3 mb-3" placeholder="EMAIL" autocomplete="email" type="text" name="" value="">
            <input class="mt-3 mb-3" placeholder="PASSWORD" autocomplete="current-password" type="password" name="" value="">
            <button class="mt-3 mb-3" type="button" name="button">LOGIN</button>
          </form>
          <div class="helper-links">
            <a href="./pages/logged-in-page.php">FORGOTTEN PASSWORD</a>
            <a href="#">REGISTER NOW</a>
          </div>
        </div>
      </div>
    </div>
  </body>
<?php include('./includes/footer.inc.php'); ?>
