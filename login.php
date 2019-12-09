<?php
include 'header.php';
// include 'process/userLogin.php';
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
<section class="ftco-section ftco-no-pb ftco-no-pt bg-white">
  <div class="container">
    <div class="row">
      <div class="col-md-5 p-md-5 img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/NavLogo.png);">
        </a>
      </div>
      <div class="col-md-7 py-5 wrap-about pb-md-5 ftco-animate">
        <div class="heading-section-bold mb-4 mt-md-5">
          <div class="ml-md-0">
          </div>
        </div>
        <div class="pb-md-5">
          <form action="process/userLogin.php" class="bg-white p-5 contact-form" method="POST">
            <h1><b><a href="">Login</a></b></h1>
            <div class="form-group">
              <input type="text" class="form-control" name="Username" placeholder="Your Username">
            </div>
            <div class="form-group">
              <input type="Password" class="form-control" name="Password" placeholder="Your Password">
            </div>
            Don't have an account?<a href="register.php"> Register</a></br>
            <div class="form-group">
              </br>
              <?php echo $mess; ?>
              <!-- <a href="index.php" class="btn btn-primary">Login</a> -->
              <button class="btn btn-primary" type="submit" name="submit">Login</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>

<head>
  <?php include 'footer.php' ?>
</head>