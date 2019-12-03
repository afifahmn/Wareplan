<head>
<?php include 'header.php' ?>
<style type="text/css">
	.jalan{
		position: relative;
		height: 100px;

	}
	.logo{
		position: absolute;
		height: 50px;
		left: -50px;
		animation: geraklogo 5s infinite;
	}
	@keyframes geraklogo{
		0% {left: 30%;}
		100% {left: 60%}
	}
</style>
</head>

  <section class="ftco-section ftco-cart">
	<div class="container">
		<div class=" jalan logo">
			<p>
			<img style="animation: swing;" src="images/logoStore.PNG" width="200px"></p>
		</div><br><br><br><br><br><br><br><br><br><br><br>
		<h3><center>Pesanan sedang diproses</center></h3>

    			<center><p><a href="history.php" class="btn btn-primary">Check Your History</a></p></center>
	</div>
</section>
