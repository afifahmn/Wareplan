<?php
include 'process/conSQL.php';

if (isset($_SESSION['loginLevel'])) {
  if ($_SESSION['loginLevel'] == "user") {
    header("Location: index.php");
  }
}

include 'header.php';
?>

<section class="ftco-section ftco-no-pb ftco-no-pt bg-white">
  <div class="container">
    <div class="row">
      <div class="col-md-5 p-md-5 img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/doble.jpg);">
        </a>
      </div>
      <div class="col-md-7 py-5 wrap-about pb-md-5 ftco-animate">
        <div class="heading-section-bold mb-4 mt-md-5">
          <div class="ml-md-0">
          </div>
        </div>
        <div class="pb-md-5">
          <form action="#" class="bg-white p-5 contact-form">
            <br><br><br><br><br>
            <h1><b><a href="">Success</a></b></h1><br>
            <h4>register is successed</h4>
            <br>
            <div class="form-group">
              <a href="login.php" class="btn btn-primary">Login</a>
            </div>

            <br><br><br>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>

<head>
  <?php include 'footer.php' ?>
</head>