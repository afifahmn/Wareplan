<head>
	<?php
	// error_reporting(0);
	include 'process/conSQL.php';
	include 'header.php';
	if (!isset($_SESSION['idLogin'])) {
		header("Location: index.php");
	}

	if (isset($_SESSION['loginLevel'])) {
		if ($_SESSION['loginLevel'] == 1) {
			header("Location: adminHome.php");
		}
	}
	?>
</head>

<section class="ftco-section ftco-cart">
	<div class="container">
		<div class="col-md-12 heading-section text-center ftco-animate">
			<h2 class="mb-4">History</h2>
		</div>
		<div class="row">
			<div class="col-md-12 ftco-animate">
				<div class="cart-list">
					<p><a href="history.php" class="btn btn-primary py-3 px-4">Refresh</a></p>
					<table id="history" class="table table-strped">
						<thead class="thead-primary">
							<tr class="text-center">
								<th>Date</th>
								<th>Product Name</th>
								<th>Price</th>
								<th>Quantity</th>
								<th>Sub Total</th>
								<th>Status</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$login = $_SESSION['idLogin'];
							$query = "SELECT * FROM detail_pesanan dp 
								inner join pesanan p on p.idPesanan = dp.idPesanan
								inner join konsumen k on k.idKonsumen = dp.idKonsumen
								inner join Barang b on b.idBarang = dp.idBarang
								where idLogin = $login
								order by p.TanggalJam desc
								";
							$result = mysqli_query($con, $query);

							if (mysqli_num_rows($result) > 0) {
								$index = 1;
								while ($row = mysqli_fetch_assoc($result)) {
									$idBarang = $row["idBarang"];
									$total = $row["jmlPesanan"] * $row["HargaBarang"];
									// $image = $row["foto"];
									// $image1 = $row["foto_galeri"];
									echo "
										<tr>
											<td >" . $row["TanggalJam"] . "</td>
											<td>" . $row["NamaBarang"] . "</td>
											<td>" . $row["HargaBarang"] . "</td>
											<td>" . $row["jmlPesanan"] . "</td>
											<td>" . $total . "</td>
											<td>" . $row["status"] . "</td>

										</tr>
										";
								}
							}
							mysqli_close($con);
							?>
						</tbody>
					</table>
				</div>
			</div>
		</div>

	</div>
</section>

<head>
	<?php include 'footer.php' ?>
</head>