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
		margin-top: 100px;
		top: 500px;
		right: 50px;
		z-index: 999;

	}
</style>

<section id="home" class="hero home-bg">
	<div class="text-center" style="padding-bottom: 400px;">
		<img src="images/HomeLogo.png" width="350" style="padding-top: 300px;">
	</div>
</section>

<section id="Interests" class="interests">
	<div class="container">
		<div class="row text-bright py-5">
			<div class="col-6">
				<h1 class="text-left text-bright">
					<font size="7">Hallo ~</font>
				</h1>
				<p class="text-justify mb-5 text-space">
					<font> Penggunaan plastik pada dasarnya dapat memberikan kemudahan dan kepraktisan,
						sehingga masyarakat sangat sulit untuk menghindari penggunaan plastik tersebut. Akan tetapi dibalik kemudahan dan kepraktisan tersebut, plastik juga memberikan dampak buruk khususnya bagi lingkungan. Plastik sendiri mengandung bahan anorganik buatan yang tersusun dari bahan-bahan kimia yang cukup berbahaya bagi lingkungan dan sulit untuk diuraikan secara alami.
						Penguraian membutuhkan waktu kurang lebih 80 tahun agar dapat terdegradasi secara sempurna.</font>
				</p>
			</div>
			<div class="col-2">
			</div>
			<div class="col-4">
				<h1 class="text-left text-bright">
					<font size="7">Feeds</font>
				</h1>
				<img class="mr-2 mb-2" height="120" src="wareplanImages/857046_720.jpg">
				<img class="mr-2 mb-2" height="120" src="wareplanImages/1529842242.jpg">
				<img class="mr-2 mb-2" height="120" src="wareplanImages/DhJKcaCUYAAkHYv.jpg">
			</div>
		</div>
	</div>
</section>

<section id="Player" class="player">
	<iframe frameborder="0" width="100%" height="500" src="https://www.youtube.com/embed/EyzUazucAhU" allow="autoplay; encrypted-media" allowfullscreen></iframe>
	<div class="container">
		<div class="row text-bright text-space">
			<div class="col-12">
				<p class="text-center my-5">
					<font size="2"> Pernahkah kalian menyadari berapa jumlah plastik yang kita gunakan setiap hari? Mulai dari tas plastik, sedotan, kemasan makanan dan minuman, serta masih banyak produk berbahan plastik lainnya. Lalu kemanakah semua sampah plastik yang kita gunakan itu berakhir? </font>
				</p>
			</div>
		</div>
	</div>
</section>

<section id="About" class="about">
	<div class="container">
		<div class="row py-5">
			<div class="col-6">
				<img src="images/Logo.png" width="300">
			</div>
			<div class="col-6">
				<h4 class="text-right">
					<font size="7">About</font>
				</h4>
			</div>
		</div>
	</div>
</section>


<?php
$message = '';
if (isset($_GET["error"])) {
	$message = $_GET["error"];
	echo "<script type='text/javascript'>alert('$message');</script>";
}
?>

<?php include 'footer.php' ?>