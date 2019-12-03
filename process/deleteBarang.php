<?php
session_start();

include 'conSQL.php';

$idBarang = $_GET['idBarang'];

$query = "DELETE FROM barang WHERE idBarang = $idBarang";

if (mysqli_query($con, $query)) {
    header("Location: ../adminProduct.php");
} else {
    header("Location: ../adminProduct.php?error=Tidak berhasil");
}
