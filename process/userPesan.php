<?php
include 'conSQL.php';
session_start();
$userid;
if (isset($_SESSION['idKonsumen'])) {
	$userid = $_SESSION['idKonsumen'];
}

$semua_jml = $_POST['jml'];
$semua_id_barang = $_POST['id_brg'];
$semua_nama_barang = $_POST['nama_brg'];
$semua_harga_barang = $_POST['harga_brg'];
$semua_stok_barang = $_POST['stok'];
$error = "";

// var_dump($semua_jml);
// return;

$semua_jml_tidak_nol = [];
$semua_update_query = [];

// var_dump($semua_jml[]);
// return;
$query = "INSERT INTO detail_pesanan(idPesanan,idKonsumen,idBarang,jmlPesanan,status) VALUES ";
for ($i = 0; $i < count($semua_jml); $i++) {
	for ($j = 0; $j < count($semua_jml[$i]); $j++) {
		if ($semua_jml[$i][$j] > 0) {
			$id_brg = $semua_id_barang[$i][$j];
			$stok_brg = $semua_stok_barang[$i][$j];
			$nama_brg = $semua_nama_barang[$i][$j];
			$harga_brg = $semua_harga_barang[$i][$j];
			$jumlah_brg = $semua_jml[$i][$j];
			$data = (object)array(
				"id_barang" => $id_brg,
				"stok_barang" => $stok_brg,
				"nama_barang" => $nama_brg,
				"harga_barang" => $harga_brg,
				"jumlah" => $jumlah_brg
			);

			// var_dump($data);
			// return;

			array_push($semua_jml_tidak_nol, $data);
			//ketika memanggil idKonsumen yang di ambil itu idUsernya
			if (is_numeric($userid) && is_numeric($id_brg) && is_numeric($jumlah_brg)) {
				$query = $query . "(0,$userid,$id_brg,$jumlah_brg,0),";
			}

			if ($jumlah_brg > $stok_brg) {
				$error = urldecode("ketersediaan $nama_brg tidak cukup");
				return header("Location:../index.php?error=$error");
			} else {
				// header("Location: ../index.php?error=barang tidak cukup $nama_brg");
				// echo "<script type='text/javascript'>alert('ketersediaan $nama_brg tidak cukup');</script>";
				$hasil = $stok_brg - $jumlah_brg;
				$update_query = "UPDATE barang SET JumlahBarang = '$hasil' where idBarang = $id_brg";
				array_push($semua_update_query, $update_query);
			}
		}
	}
}

if (empty($semua_jml_tidak_nol)) {
	$error = urldecode("tidak ada barang yang dipesan");
	return header("Location:../index.php?error=$error");
}

// var_dump($semua_jml_tidak_nol);
$query = substr($query, 0, -1);
var_dump($query);
if (mysqli_query($con, $query)) {
	foreach ($semua_update_query as $update_query) {
		mysqli_query($con, $update_query);
	}
}

return header("Location:../pesan.php");


mysqli_close($con);