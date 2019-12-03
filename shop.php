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
        top: 400px;
        right: 50px;
        z-index: 999;

    }
</style>



<section id="home" class="hero">
    <div class="home-slider owl-carousel">
        <!-- <div class="slider-item" style="background-image: url(images/banner1.jpg);">
			<div class="overlay"></div>
			<div class="container">
				<div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

					<div class="col-md-12 ftco-animate text-center">
					</div>

				</div>
			</div>
		</div> -->

        <div class="slider-item" style="background-image: url(images/banner1.jpg);">
            <div class="overlay"></div>
            <div class="container">
                <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

                    <div class="col-sm-12 ftco-animate text-center">
                        <h1 class="heading">WarePlan</h1>
                        <h1 class="heading">"Ware House Plastik"</h1>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<section id="shop" class="ftco-section">
    <div class="container">
        <div class="row no-gutters ftco-services">
            <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services mb-md-0 mb-4">
                    <div class="icon active d-flex justify-content-center align-items-center mb-2">
                        <!-- <span class="flaticon-shipped"></span> -->
                    </div>
                </div>
            </div>
            <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services mb-md-0 mb-4">
                    <div class="icon bg-color-1 d-flex justify-content-center align-items-center mb-2">
                        <span class="flaticon-shipped"></span>
                    </div>
                    <div class="media-body">
                        <h3 class="heading">Langsung Antar</h3>
                        <span>Product well package</span>
                    </div>
                </div>
            </div>
            <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services mb-md-0 mb-4">
                    <div class="icon bg-color-4 d-flex justify-content-center align-items-center mb-2">
                        <span class="flaticon-customer-service"></span>
                    </div>
                    <div class="media-body">
                        <h3 class="heading">Support</h3>
                        <span>24/7 Support</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- <section class="ftco-section ftco-category ftco-no-pt">
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<div class="row">
					<div class="col-md-6 order-md-last align-items-stretch d-flex">
						<div class="category-wrap-2 ftco-animate img align-self-stretch d-flex" style="background-image: url(images/doble.jpg);">
							<div class="text text-center">
								<h2>USMART</h2>
								<p>Memudahkan kamu di sekret</p>
								<p><a href="#shop" class="btn btn-primary">Shop now</a></p>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="category-wrap ftco-animate img mb-4 d-flex align-items-end" style="background-image: url(images/ger.jpg);">
							<div class="text px-3 py-1">
								<h2 class="mb-0"><a href="#1">Snack</a></h2>
							</div>
						</div>
						<div class="category-wrap ftco-animate img d-flex align-items-end" style="background-image: url(images/bowl.jpg);">
							<div class="text px-3 py-1">
								<h2 class="mb-0"><a href="#3">Meals</a></h2>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="col-md-4">
				<div class="category-wrap ftco-animate img mb-4 d-flex align-items-end" style="background-image: url(images/teh.jpg);">
					<div class="text px-3 py-1">
						<h2 class="mb-0"><a href="#2">Soft Drink</a></h2>
					</div>
				</div>
				<div class="category-wrap ftco-animate img d-flex align-items-end" style="background-image: url(images/kon.png);">
					<div class="text px-3 py-1">
						<h2 class="mb-0 primary"><a href="#4">Konveksi</a></h2>
					</div>
				</div>
			</div>
		</div>
	</div>
</section> -->


</section>

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
                                        <center><img class=" width=" 130px" height="130px" src="process/imgBarang/<?= $row1['foto'] ?>" alt=""></center>
                                        <div class="overlay"></div>
                                        <div class="text py-3 pb-4 px-3 text-center">
                                            <input type="hidden" name="id_brg[<?php echo $k; ?>][<?php echo $i; ?>]" value="<?php echo $row1['idBarang']; ?>" />
                                            <input type="hidden" name="stok[<?php echo $k; ?>][<?php echo $i; ?>]" value="<?php echo $row1['JumlahBarang']; ?>" />
                                            <input type="hidden" name="nama_brg[<?php echo $k; ?>][<?php echo $i; ?>]" value="<?php echo $row1['NamaBarang']; ?>" />
                                            <input type="hidden" name="harga_brg[<?php echo $k; ?>][<?php echo $i; ?>]" value="<?php echo $row1['HargaBarang']; ?>" />
                                            <h3><?= $row1['NamaBarang'] ?></h3>
                                            <p class="price"><span class="price-sale">Rp. <?= $row1['HargaBarang'] ?></span>
                                                <input name="jml[<?php echo $k; ?>][<?php echo $i; ?>]" style="width: 30px; height: 23px" type="input" alt="Jumlah yg diinginkan" placeholder="0"></p>
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
                    <div class="float"><button class=" btn btn-danger" style="height: 40px; width: 120px" type="submit" name="submit"><b>Order</b></button></div>
                <?php } else { ?>

                    <div class="float"><a href="login.php" type="submit" style="height: 40px; width: 120px" class=" btn btn-danger"><b>Order</b></a></div>
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


<head>
    <?php include 'footer.php' ?>

</head>