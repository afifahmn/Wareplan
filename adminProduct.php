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
			<h2 class="mb-4">Product List</h2></br>
		</div>

		<div class="row">
			<div class="col-md-12 ftco-animate">
				<div class="cart-list">
					<p><a href="adminAddProduct.php" class="btn btn-primary py-3 px-4">Add Product</a></p>
					<table id="barang" class="table table-strped">
						<thead class="thead-primary">
							<tr class="text-center">
								<th>Image</th>
								<th>Product Name</th>
								<th>Category</th>
								<th>Quantity</th>
								<th>Price</th>
								<th>Supplier</th>
								<th>Update</th>
								<th>Delete</th>
							</tr>
						</thead>

						<tbody>
							<?php
							$query = "SELECT * FROM barang order by idBarang desc";
							$result = mysqli_query($con, $query);

							if (mysqli_num_rows($result) > 0) {
								$index = 1;
								while ($row = mysqli_fetch_assoc($result)) {
									$idBarang = $row["idBarang"];
									echo "
									<tr>
										<td>" . "<img src='process/imgBarang/" . $row["foto"] . "' width=\"150\"   alt=\"gambar\">" . "</td>
										<td>" . $row["NamaBarang"] . "</td>
										<td>" . $row["idKategori"] . "</td>
										<td>" . $row["JumlahBarang"] . "</td>
										<td>" . $row["HargaBarang"] . "</td>
										<td>" . $row["supplier"] . "</td>
										<td>
											<a href='adminUpdateProduct.php?id=$idBarang&idcat=" . $row["idKategori"] . "'  class='btn btn-warning'>Update</a>
										</td>
										<td> <a href='process/deleteBarang.php?idBarang=$idBarang' class='btn btn-danger'>Delete</a> </td>

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
<?php include 'script.php' ?>
</body>

</html>