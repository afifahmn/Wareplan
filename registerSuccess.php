<?php
include 'process/conSQL.php';

if (isset($_SESSION['loginLevel'])) {
  if ($_SESSION['loginLevel'] == "user") {
    header("Location: index.php");
  }
}

include 'header.php';
?>

<body class="regisSuccess-bg">
  <section class="ftco-section ftco-no-pb ftco-no-pt">
    <div class="container">
      <div class="row">
        <div class="col-md-7 py-5 wrap-about pb-md-5 ml-auto">
          <div class="pb-md-5">
            <form action="process/userLogin.php" class="p-5 contact-form" method="POST">
              <h1 class="text-dark"><b>Success</b></h1>
              <h4>register is successed</h4>
              <div class="form-group">
                <a href="login.php" class="btn btn-primary">Login</a>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

</body>