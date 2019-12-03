<?php
include 'conSQL.php';
session_start();
if (isset($_SESSION['idKonsumen'])) {
    $userid = $_SESSION['idKonsumen'];
}
// if (isset($_SESSION['id'])) {
//     $userid = $_SESSION['user'];
// } 

$Deliver = $_POST["Deliver"];

//untuk nampilin waktu now saat pesen (udh bisa tampil waktu now, tp blm bisa mengambil idPesanan u/ mengisi detail_pesanan)
$time = "INSERT INTO pesanan (TanggalJam) VALUES (now())";
if (mysqli_query($con, $time)) {
    $id_pesanan = mysqli_insert_id($con);
    $query = "UPDATE detail_pesanan SET  idPesanan = $id_pesanan, status = 'Accept', deliverto='$Deliver' WHERE idKonsumen='$userid' and status = '0'";
    if (mysqli_query($con, $query)) {


        //stok


        header("Location: ../status.php");
    }
}
