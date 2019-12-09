<head>
  <?php include 'header.php';
  if (isset($_GET['pesan'])) {
    $mess = "<p>{$_GET['pesan']}</p>";
  } else {
    $mess = "";
  }
  ?>
</head>

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

          <form action="process/userRegister.php" method="POST" class="bg-white p-5 contact-form">
            <h1><b><a href="">Register</a></b></h1>

            <h6 style="color: red;"><?php echo $mess; ?></h6>
            <div class="form-group">
              <input type="text" class="form-control" name="NamaKonsumen" placeholder="Your Name" required="">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="NoTelpKonsumen" placeholder="Your Phone Number" required="">
            </div>
            <div class="form-group">
              <input type="Email" class="form-control" name="EmailKonsumen" placeholder="Your Email" required="">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="Username" placeholder="Your Username" required="">
            </div>
            <div class="form-group">
              <input type="Password" class="form-control" name="Password" placeholder="Your Password" required="">
            </div>
            <div class="form-group">
              <!-- <a href="login.php" class="btn btn-primary">Register</a> -->
              <button class="btn btn-primary" type="submit" name="submit">Register</button>
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