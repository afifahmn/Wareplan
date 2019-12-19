<?php
error_reporting(0);
include 'process/conSQL.php';
session_start();
if (!isset($_SESSION['idLogin'])) {
	header("Location: index.php");
}

if (isset($_SESSION['loginLevel'])) {
	if ($_SESSION['loginLevel'] == 1) {
		header("Location: adminHome.php");
	}
}
if (isset($_SESSION['idKonsumen'])) {
	$userid = $_SESSION['idKonsumen'];
}
include 'header.php'
?>

<section class="ftco-section ftco-cart">
	<div class="container">
		<div class="col-md-12 heading-section text-center ftco-animate">
			<h2 class="mb-4">Order List</h2>
		</div>

		<div class="row">
			<div class="col-md-12 ftco-animate">
				<div class="cart-list">
					<table id="barang" class="table">
						<thead class="thead-primary">
							<tr class="text-center">
								<th>Product Name</th>
								<th>Price</th>
								<th>Quantity</th>
								<th>Total</th>
								<th>Delete</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$login = $_SESSION['idLogin'];
							$query = "SELECT * FROM detail_pesanan dp 
								inner join konsumen k on k.idKonsumen = dp.idKonsumen
								inner join Barang b on b.idBarang = dp.idBarang
								where idLogin = $login AND status ='0'
								";
							$result = mysqli_query($con, $query);

							if (mysqli_num_rows($result) > 0) {
								$index = 1;
								while ($row = mysqli_fetch_assoc($result)) {
									$idBarang = $row["idBarang"];
									$total = $row["jmlPesanan"] * $row["HargaBarang"];
									echo "
										<tr>
											<td>" . $row["NamaBarang"] . "</td>
											<td>" . $row["HargaBarang"] . "</td>
											<td>" . $row["jmlPesanan"] . "</td>
											<td>" . $total . "</td>
											<td> <a href='process/deleteBrgUser.php?idBarang=$idBarang' class='btn btn-danger'>Delete</a> </td>

										</tr>
										";
								}
							}
							?>
						</tbody>

					</table>
				</div>
			</div>
		</div>
		<div class="row justify-content-end">
			<div class="col-lg-8 mt-5 cart-wrap ftco-animate">
			</div>

			<div class="col-lg-4 mt-5 cart-wrap ftco-animate">
				<div class="cart-total mb-3">
					<!-- ///disiini -->
					<?php
					$login = $_SESSION['idLogin'];
					$queryyy = "SELECT SUM(bat) FROM (SELECT SUM(jmlPesanan * HargaBarang) 
			              as bat FROM barang b  INNER JOIN 
			                detail_pesanan o ON b.idBarang  = o.idBarang 
			                WHERE idKonsumen = '$userid' AND status = '0' GROUP BY b.idBarang
			              ) AS bat";
					$resulttt = mysqli_query($con, $queryyy);
					$rowww = mysqli_fetch_array($resulttt);
					?>
					<p class="d-flex total-price">
						<span>Total</span>
						<span>Rp <?= $rowww[0] ?></span>
					</p>

					<form action="process/Checkout.php" method="POST" enctype="multipart/form-data">
						<p class="d-flex total-price">

						</p>

						<button class="d-flex total-price btn btn-primary py-3 px-4" type="submit" name="submit">PROCESS</button>
						</p>
					</form>
					</span>
				</div>
			</div>
		</div>
</section>

<?php include 'footer.php' ?>