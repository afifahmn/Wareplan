<head>
  <?php
  include 'process/conSQL.php';
  session_start();
  if (!isset($_SESSION['idLogin'])) {
    header("Location: index.php");
  }

  if (isset($_SESSION['loginLevel'])) {
    if ($_SESSION['loginLevel'] == 2) {
      header("Location: index.php");
    }
  }
  include 'adminHeader.php' ?>

</head>

<section class="ftco-section ftco-no-pb ftco-no-pt bg-white">
  <div class="container">

    <div class="row">

      <div class="col-md-2 py-5 wrap-about pb-md-5 ftco-animate"></div>
      <div class="col-md-8 py-5 wrap-about pb-md-5 ftco-animate">
        <div class="heading-section-bold mb-4 mt-md-5">
          <div class="ml-md-0">
          </div>
        </div>

        <?php
        $message = '';
        if (isset($_GET["error"])) {
          $message = $_GET["error"];
          echo "
                <p style='color:red; font-style:italic'>$message</p>
                ";
        }
        ?>

        <div class="pb-md-5">
          <form action="process/addBarang.php" method="POST" enctype="multipart/form-data">
            <h1 class="text-dark"><b>Add Product</b></h1>
            <div class="form-group">
              <label>Image <a style='color:red;'>*ukuran foto 1x1</a></label>
              <input type="file" name="file" id="file" class="form-control" placeholder="" required>
            </div>
            <div class="form-group">
              <label>Product Name</label>
              <input type="Text" class="form-control" placeholder="" name="NamaBarang" id="NamaBarang" required>
            </div>

            <div class="form-group">
              <label>Kategori</label>
              <div class=".col-auto .mr-auto">
                <select class="form-control" name="idKategori" id="idKategori" required>
                  <option disabled selected>Pilih</option>
                  <?php
                  $query = "SELECT * FROM kategori";
                  $result = mysqli_query($con, $query);
                  while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                    <option value="<?= $row['idKategori'] ?>">
                      <?= $row['Kategori'] ?>
                    </option>
                  <?php } ?>
                </select>
              </div>
            </div>
            <div class="form-group">
              <label>Quantity</label>
              <input type="number" class="form-control" placeholder="" name="JumlahBarang" id="JumlahBarang" required>
            </div>
            <div class="form-group">
              <label>Price</label>
              <input type="number" class="form-control" placeholder="" name="HargaBarang" id="HargaBarang" required>
            </div>
            <div class="form-group">
              <a href="adminProduct.php" class="btn btn-secondary">Cancel</a>


              <button class="btn btn-primary" type="submit" name="submit">Add Product</button>
            </div>
          </form>
        </div>
      </div>

      <div class="col-md-2 py-5 wrap-about pb-md-5 ftco-animate"></div>
    </div>
  </div>

  <script>
    function clearForm() {
      $('NamaBarang').val('');
      $('JumlahBarang').val('');
      $('HargaBarang').val('');
      $('idKategori').val('');
      $('supplier').val('');
    }
  </script>

</section>

<head>
  <?php include 'footer.php' ?>
</head>