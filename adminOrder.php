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

<section class="ftco-section ftco-cart">
	<div class="container">
		<div class="col-md-12 heading-section text-center ftco-animate">
			<h2 class="mb-4">Order List</h2></br>
		</div>

		<div class="row">
			<div class="col-md-12 ftco-animate">
				<div class="cart-list">
					<p><a href="adminOrder.php" class="btn btn-primary py-3 px-4">Refresh</a></p>
					<table id="barang" class="table table-strped">
						<thead class="thead-primary">
							<tr class="text-center">
								<th>No</th>
								<th>Username</th>
								<th>Date</th>
								<th>Order</th>
								<th>Quantity</th>
								<th>Sub Total</th>
								<th>Alamat</th>
								<th>Status</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$query = "SELECT * FROM detail_pesanan dp 
							inner join pesanan p on p.idPesanan = dp.idPesanan
							inner join konsumen k on k.idKonsumen = dp.idKonsumen
							inner join Barang b on b.idBarang = dp.idBarang
							order by p.idPesanan desc
							";
							$result = mysqli_query($con, $query);

							if (mysqli_num_rows($result) > 0) {
								$index = 1;
								while ($row = mysqli_fetch_assoc($result)) {
									$idPesanan = $row["idPesanan"];
									$idKonsumen = $row["idKonsumen"];
									$total = $row["jmlPesanan"] * $row["HargaBarang"];
									echo "
									<tr>
										<td>" . $index++ . "</td>
										<td>" . $row["NamaKonsumen"] . "</td>
										<td>" . $row["TanggalJam"] . "</td>
										<td>" . $row["NamaBarang"] . "</td>
										<td>" . $row["jmlPesanan"] . "</td>
										<td>" . $total . "</td>
										<td>" . $row["AlamatKonsumen"] . "</td>";
									if ($row["status"] == 'Process') {
										echo "
										<td> <a href='process/statusProcess.php?idPesanan=$idPesanan&idKonsumen=$idKonsumen' class='btn btn-danger py-3 px-4'> " . $row["status"] . "</a></td>";
									} else if ($row["status"] == 'Done') {
										echo "
										<td> <a href='' class='btn btn-primary disabled py-3 px-4'> " . $row["status"] . "</a></td>";
									} else if ($row["status"] == 'Accept') {
										echo "
										<td> <a href='process/statusAccept.php?idPesanan=$idPesanan&idKonsumen=$idKonsumen' class='btn btn-info  py-3 px-4'> " . $row["status"] . "</a></td>";
									}
									echo "
									</tr>
									";
								}
							}
							//Accept,Process,done
							mysqli_close($con);
							?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</section>
<?php include 'script.php' ?>
</body>

</html>