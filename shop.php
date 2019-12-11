<?php

include 'process/conSQL.php';
include 'header.php';
if (!isset($_SESSION['idLogin'])) {
    // header("Location: index.php");
}

// $katid = $_GET['kat'];
?>
<!-- END nav -->

<style type="text/css">
    .float {
        width: 100px;
        height: 200px;
        position: fixed;
        top: 15%;
        right: 50px;
        z-index: 999;

    }
</style>

<form action="process/userPesan.php" method="POST" enctype="multipart/form-data">
    <?php
    $query = "SELECT * FROM kategori";
    $result = mysqli_query($con, $query);
    $k = 0;
    while ($row = mysqli_fetch_assoc($result)) {
        ?>
        <section class="ftco-section" id="<?= $row['idKategori'] ?>">

            <div class="container">
                <div class="row justify-content-center mb-3 pb-3">
                    <div class="col-md-12 heading-section text-center ftco-animate">
                        <span class="subheading">Our Products</span>
                        <h2 class="mb-4"><?= $row['Kategori'] ?></h2>

                        <div class="row">
                            <?php
                                $query2 = "SELECT * FROM barang where idKategori=" . $row['idKategori'] . "";
                                $result2 = mysqli_query($con, $query2);
                                $i = 0;
                                while ($row1 = mysqli_fetch_assoc($result2)) {
                                    ?>
                                <div class="col-md-6 col-lg-2 ftco-animate">
                                    <div class="product">
                                        <center><img width="130px" height="130px" src="process/imgBarang/<?= $row1['foto'] ?>" alt=""></center>
                                        <div class="overlay"></div>
                                        <div class="text py-3 pb-4 px-3 text-center">
                                            <input type="hidden" name="id_brg[<?php echo $k; ?>][<?php echo $i; ?>]" value="<?php echo $row1['idBarang']; ?>" />
                                            <input type="hidden" name="stok[<?php echo $k; ?>][<?php echo $i; ?>]" value="<?php echo $row1['JumlahBarang']; ?>" />
                                            <input type="hidden" name="nama_brg[<?php echo $k; ?>][<?php echo $i; ?>]" value="<?php echo $row1['NamaBarang']; ?>" />
                                            <input type="hidden" name="harga_brg[<?php echo $k; ?>][<?php echo $i; ?>]" value="<?php echo $row1['HargaBarang']; ?>" />
                                            <h3><?= $row1['NamaBarang'] ?></h3>
                                            <div class="text-left">
                                                <div class="row mb-1">
                                                    <div class="col-4">
                                                        <p class="price text-dark text-small">Harga:</p>
                                                    </div>
                                                    <div class="col">
                                                        <p class="price text-dark text-small">Rp. <?= $row1['HargaBarang'] ?></p>
                                                    </div>
                                                </div>
                                                <div class="row mb-2">
                                                    <div class="col-4">
                                                        <p class="price text-dark text-small">Stok:</p>
                                                    </div>
                                                    <div class="col">
                                                        <p class="price text-dark text-small"><?= $row1['JumlahBarang'] ?> Item</p>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-4">
                                                        <p class="price text-dark text-small">Order:</p>
                                                    </div>
                                                    <div class="col">
                                                        <input name="jml[<?php echo $k; ?>][<?php echo $i; ?>]" class="form-control" style="height: 25px !important;" type="input" alt="Jumlah yg diinginkan" placeholder="0">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php $i++;
                                } ?>
                        </div>

                    </div>
                </div>

                <?php
                    if (isset($_SESSION['idLogin'])) {
                        ?>
                    <div class="float"><button class="btn btn-primary" style="height: 40px; width: 120px" type="submit" name="submit">Order</button></div>
                <?php } else { ?>
                    <div class="float"><a href="login.php">
                            <button class="btn btn-primary" style="height: 40px; width: 120px" type="submit" name="submit">Order</button>
                        </a></div>
                <?php } ?>

            </div>
        </section>
    <?php $k++;
    } ?>
</form>


<?php
$message = '';
if (isset($_GET["error"])) {
    $message = $_GET["error"];
    echo "<script type='text/javascript'>alert('$message');</script>";
}
?>

<?php include 'footer.php' ?>