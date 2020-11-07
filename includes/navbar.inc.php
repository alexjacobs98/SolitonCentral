<header>
  <div class="container">
    <div class="row">
      <div class="details-container col-6">
        <div class="name-title">
          <h2> <?php echo ucfirst($_SESSION['UserFirstName'])." ".ucfirst($_SESSION['UserLastName']); ?></h2>
          <h3><?php echo$_SESSION['UserTitle'] ?></h3>
        </div>

      </div>
      <nav class="col-6">
        <ul>
          <li>
            <a href="options-menu.php">Home</a>
          </li>
          <li>
            <a href="site-listings.php">View Sites</a>
          </li>
          <form id="logout-form" name="login-form" action="includes/logout.inc.php" method="post">
            <button form="logout-form" type="submit" type="button" name="login-submit"><strong>Log out</strong></button>
          </form>
        </ul>
      </nav>
    </div>
  </div>
</header>
