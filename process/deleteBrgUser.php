<?php
session_start();

include 'conSQL.php';

$idBarang = $_GET['idBarang'];
$query2 = "Select * from detail_pesanan WHERE idBarang = $idBarang AND status = '0'";
$query = "DELETE FROM detail_pesanan WHERE idBarang = $idBarang";

$result2 = mysqli_query($con, $query2);

$jumlah_barang_pesanan = 0;
if (mysqli_num_rows($result2) > 0) {
	while ($row = mysqli_fetch_assoc($result2)) {
		$jumlah_barang_pesanan += $row["jmlPesanan"];
		echo "tes";
	}
	if (mysqli_query($con, $query)) {
			$update_query = "UPDATE barang SET JumlahBarang = JumlahBarang + $jumlah_barang_pesanan where idBarang = $idBarang	";
			if (mysqli_query($con, $update_query)) {
			    return header("Location: ../pesan.php");
			}

	    // $hasil = $stokBrg - $jumlahBrg;
	    // $query2 = "UPDATE barang SET JumlahBarang = '$hasil' where idBarang = $idBarang ";
	} else {
	    return header("Location: ../pesan.php?error=Tidak berhasil dihapus");
	}
}
