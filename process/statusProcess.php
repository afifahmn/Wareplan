<?php
session_start();

include 'conSQL.php';

$idPesanan = $_GET['idPesanan'];
$idKonsumen = $_GET['idKonsumen'];


$query = "UPDATE detail_pesanan SET status = 'Done' where idPesanan='$idPesanan'AND idKonsumen='$idKonsumen'";

if (mysqli_query($con, $query)) {
    header("Location: ../adminOrder.php");
} else {
    header("Location: ../adminOrder.php?error=Tidak berhasil");
}
