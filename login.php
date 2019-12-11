<?php
include 'header.php';
if (isset($_GET['pesan'])) {
  $mess = "<p>{$_GET['pesan']}</p>";
} else {
  $mess = "";
}

if (isset($_SESSION['loginLevel'])) {
  if ($_SESSION['loginLevel'] == "user") {
    header("Location: index.php");
  }
}
?>

<body class="login-bg">
  <section class="ftco-section ftco-no-pb ftco-no-pt">
    <div class="container">
      <div class="row">
        <div class="col-md-7 py-5 wrap-about pb-md-5 ml-auto">
          <div class="pb-md-5">
            <form action="process/userLogin.php" class="p-5 contact-form" method="POST">
              <h1 class="text-dark"><b>Login</b></h1>
              <div class="form-group">
                <input type="text" class="form-control" name="Username" placeholder="Your Username">
              </div>
              <div class="form-group">
                <input type="Password" class="form-control" name="Password" placeholder="Your Password">
              </div>
              Don't have an account?<a href="register.php" class="text-dark"> Register</a></br>
              <div class="form-group">
                </br>
                <?php echo $mess; ?>
                <button class="btn btn-primary" type="submit" name="submit">Login</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php include 'script.php' ?>
</body>

</html>