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
  $idBarang = $_GET['id'];
  include 'adminHeader.php' ?>

</head>


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
        <div class="pb-md-5">

          <?php
          $query = "SELECT * FROM Barang WHERE idBarang = '$idBarang'";
          $result = mysqli_query($con, $query);
          $item = mysqli_fetch_assoc($result);
          ?>

          <form action="process/updateBarang.php" method="POST" enctype="multipart/form-data" class="bg-white p-5 contact-form">
            <h1><b><a href="">Update Product</a></b></h1>
            <input type="hidden" name="id_Barang" value="<?= $idBarang ?>">
            <div class="form-group">
              <label>Image</label>
              <input type="file" class="form-control" name="file" id="file" value="" placeholder="" required="">
            </div>
            <div class="form-group">
              <label>Product Name</label>
              <input type="Text" name="NamaBarang" id="NamaBarang" value="<?php echo $item["NamaBarang"] ?>" class="form-control" placeholder="" required="">
            </div>
            <div class="form-group">
              <label class="col-md-3 col-form-label">Category</label>
              <div class="col-md-9">
                <select class="form-control" name="idKategori" id="idKategori" required>
                  <option disabled selected>Pilih</option>
                  <?php
                  $id = $_GET["idcat"];
                  $query = "SELECT * FROM kategori WHERE idKategori = $id";
                  $result = mysqli_query($con, $query);
                  while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                    <option value="<?= $row['idKategori'] ?>" selected><?= $row['Kategori'] ?></option>
                  <?php } ?>
                  <?php
                  $query = "SELECT * FROM kategori";
                  $result = mysqli_query($con, $query);
                  while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                    <option value="<?= $row['idKategori'] ?>"><?= $row['Kategori'] ?></option>
                  <?php } ?>
                </select>
              </div>
            </div>
            <div class="form-group">
              <label>Quantity</label>
              <input type="number" name="JumlahBarang" id="JumlahBarang" value="<?php echo $item["JumlahBarang"] ?>" class="form-control" placeholder="" required="">
            </div>
            <div class="form-group">
              <label>Price</label>
              <input type="number" name="HargaBarang" id="HargaBarang" value="<?php echo $item["HargaBarang"] ?>" class="form-control" placeholder="" required="">
            </div>
            <div class="form-group">
              <label>Supplier</label>
              <input type="text" name="supplier" id="supplier" value="<?php echo $item["supplier"] ?>" class="form-control" placeholder="" required="">
            </div>
            <div class="form-group">
              <a href="adminProduct.php" class="btn btn-secondary">Cancel</a>
              <button class="btn btn-primary" type="submit" name="submit" value="Update">Update Product</button>
            </div>
          </form>
        </div>
      </div>

      <div class="col-md-2 py-5 wrap-about pb-md-5 ftco-animate"></div>
    </div>
  </div>
</section>

<head>
  <?php include 'footer.php' ?>
</head>