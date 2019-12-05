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

<body>
	<section id="home" class="hero home-bg">
		<div class="text-center" style="padding-bottom: 400px;">
			<img src="images/HomeLogo.png" width="350" style="padding-top: 300px;">
		</div>
	</section>

	<section id="Interests" class="interests">
		<div class="container">
			<div class="row" style="color:ivory">
				<div class="col-6">
					<h1 class="text-left mt-5 pr-5" style="color:ivory">
						<font face="Blenda Script" size="7">Hallo ~</font>
					</h1>
					<p class=" text-justify mb-5">
						<font <br> Penggunaan plastik pada dasarnya dapat memberikan kemudahan dan kepraktisan,
							sehingga masyarakat sangat sulit untuk menghindari penggunaan plastik tersebut. Akan tetapi dibalik kemudahan dan kepraktisan tersebut, plastik juga memberikan dampak buruk khususnya bagi lingkungan. Plastik sendiri mengandung bahan anorganik buatan yang tersusun dari bahan-bahan kimia yang cukup berbahaya bagi lingkungan dan sulit untuk diuraikan secara alami.
							Penguraian membutuhkan waktu kurang lebih 80 tahun agar dapat terdegradasi secara sempurna.</font>
					</p>
				</div>
				<div class="col-2"></div>
				<div class="col-4">
					<blockquote class="blockquote">
						<h1 class="text-left mt-5 pr-5" style="color:ivory">
							<font face="Blenda Script" size="7">Feeds</font>
						</h1>
					</blockquote>
					<img width="120" src="wareplanImages/857046_720.jpg">
					<img width="120" height="90" src="wareplanImages/1529842242.jpg">
					<img width="120" height="90" src="wareplanImages/DhJKcaCUYAAkHYv.jpg">
				</div>
			</div>
		</div>
	</section>

	<section id="Player" class="player" style="width: 100%; height: 100%;">
		<iframe frameborder="0" width="100%" height="600" src="https://www.youtube.com/embed/EyzUazucAhU" allow="autoplay; encrypted-media" allowfullscreen></iframe>

	</section>

	<section id="About" class="about">
		<div class="container">
			<h4 class="text-left">
				<br>
				<font face="Blenda Script" size="7">About</font>
			</h4>
		</div>
	</section>


	<?php
	$message = '';
	if (isset($_GET["error"])) {
		$message = $_GET["error"];
		echo "<script type='text/javascript'>alert('$message');</script>";
	}
	?>
</body>

<footer>
	<?php include 'footer.php' ?>
</footer>