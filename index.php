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
			<div class="row">
				<div class="col-6">
					<h1 class="text-left mt-5 pr-5">
						<font face="Blenda Script" size="7">Hallo</font>
					</h1>
					<p class=" text-justify">
						<font <br> Pulau Plastik (Plastic Island) is a collaborative campaign to tackle the issue of single-use plastic in Bali and beyond. Pulau Plastik leverages popular culture and includes social media campaigns, short videos, and a feature-length documentary to increase awareness about the hazards of single-use plastic, to change people’s behavior and to advocate for change.

							The time for action is now, so that Bali does not become a Plastic Island!</font>
					</p>
				</div>
				<div class="col-2"></div>
				<div class="col-4">
					<h1 class="text-left mt-5 pr-5">
						<font face="Blenda Script" size="7">Feeds</font>
					</h1>
					<img width="120" src="wareplanImages/857046_720.jpg">
					<img width="120" src="wareplanImages/857046_720.jpg">
					<img width="120" src="wareplanImages/857046_720.jpg">
				</div>
			</div>
		</div>
	</section>

	<section id="Player" class="player" style="width: 100%; height: 100%; margin-top: 80px;">
		<iframe width="100%" height="600" src="https://www.youtube.com/embed/EyzUazucAhU" allow="autoplay; encrypted-media" allowfullscreen></iframe>
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