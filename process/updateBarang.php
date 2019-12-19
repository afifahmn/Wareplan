<?php
include 'conSQL.php';

$id_Barang = $_POST["id_Barang"];
$NamaBarang = $_POST["NamaBarang"];
$JumlahBarang = $_POST["JumlahBarang"];
$HargaBarang = $_POST["HargaBarang"];
$idKategori = $_POST["idKategori"];

$code = $_FILES['file']['error'];
if ($code === 0) {

    $destination_path = getcwd();

    $error = "";
    $tmp = $_FILES['file']['tmp_name'];
    $nama_folder = "imgBarang";
    $nama_file = $_FILES['file']['name'];
    $path = $destination_path . "\\$nama_folder\\$nama_file";

    if (file_exists($path)) {
        $error = urldecode("File dengan nama yang sama sudah tersimpan, coba lagi");
        header("Location:../daftarBarangAdmin.php?error=$error");
    }


    $tipe_file = array('image/jpeg', 'image/gif', 'image/png');
    if (!in_array($_FILES['file']['type'], $tipe_file)) {
        $error = urldecode("Cek Kembali Ekstensi File Anda (*jpeg, *jpg, *gif, *png)");
        header("Location:../adminAddProduct.php?error=$error");
    }

    if (move_uploaded_file($tmp, $path)) {
        $query = "UPDATE Barang SET NamaBarang = '$NamaBarang',JumlahBarang ='$JumlahBarang',HargaBarang = '$HargaBarang',idKategori='$idKategori',foto='$nama_file' where idBarang ='$id_Barang'";


        if (mysqli_query($con, $query)) {
            header("Location:../adminProduct.php?id=$id_Barang");
        } else {
            $error = urldecode("Data tidak berhasil ditambahkan");
            header("Location:../adminUpdateProduct.php?id=$id_Barang&error=$error");
        }
    }
} else {
    $error = urldecode("Foto tidak berhasil terupload");
    header("Location:../adminUpdateProduct.php?id=$id_Barang&error=$error");
}



mysqli_close($con);
