<?php include 'header.php';
if (isset($_GET['pesan'])) {
  $mess = "<p>{$_GET['pesan']}</p>";
} else {
  $mess = "";
}
?>

<body class="login-bg">
  <section class="ftco-section ftco-no-pb ftco-no-pt">
    <div class="container">
      <div class="row">
        <div class="col-md-7 py-5 wrap-about ml-auto">
          <form action="process/userRegister.php" method="POST" class="p-5 contact-form">
            <h1 class="text-dark"><b>Register</b></h1>
            <h6 style="color: red;"><?php echo $mess; ?></h6>
            <div class="row mb-3">
              <div class="col">
                <input type="text" class="form-control" name="NamaKonsumen" placeholder="Your Name" required="">
              </div>
              <div class="col">
                <input type="text" class="form-control" name="Username" placeholder="Your Username" required="">
              </div>
            </div>
            <div class="form-group">
              <input type="Email" class="form-control" name="EmailKonsumen" placeholder="Your Email" required="">
            </div>
            <div class="form-group">
              <input type="Password" class="form-control" name="Password" placeholder="Your Password" required="">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="AlamatKonsumen" placeholder="Your Address" required="">
            </div>
            <div class="form-group">
              <input type="number" class="form-control" name="NoTelpKonsumen" placeholder="Your Phone Number" required="">
            </div>
            <div class="form-group">
              <button class="btn btn-primary" type="submit" name="submit">Register</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>

  <?php include 'script.php' ?>
</body>

</html>