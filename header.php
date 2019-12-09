<?php
// session_start();
include 'process/conSQL.php';
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>WarePlan</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
  <link rel="stylesheet" href="css/animate.css">

  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/magnific-popup.css">

  <link rel="stylesheet" href="css/aos.css">

  <link rel="stylesheet" href="css/ionicons.min.css">

  <link rel="stylesheet" href="css/bootstrap-datepicker.css">
  <link rel="stylesheet" href="css/jquery.timepicker.css">


  <link rel="stylesheet" href="css/flaticon.css">
  <link rel="stylesheet" href="css/icomoon.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="wareplan.css">


</head>

<nav class="navbar fixed-top navbar-expand-lg ftco-navbar-light" id="ftco-navbar">
  <div class="container">
    <a class="navbar-brand" href="index.php">
      <img src="images/NavLogo.png" width="80">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="oi oi-menu"></span> Menu
    </button>

    <div class="collapse navbar-collapse" id="ftco-nav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active"><a href="index.php" class="nav-link hvr-underline-from-left">Home</a></li>
        <li class="nav-item">
          <a class="nav-link hvr-underline-from-left" href="shop.php" aria-haspopup="true" aria-expanded="false">Shop</a>
        </li>

        <?php
        if (isset($_SESSION['idLogin'])) {
          ?>
          <li class="nav-item"><a href="pesan.php" class="nav-link hvr-underline-from-left">Order List</a></li>
        <?php } ?>

        <?php
        if (isset($_SESSION['idLogin'])) {
          ?>
          <li class="nav-item"><a href="history.php" class="nav-link hvr-underline-from-left">History</a></li>
        <?php } ?>
        <!-- <li class="nav-item"><a href="about.php" class="nav-link hvr-underline-from-left">About</a></li> -->
        <?php
        if (!isset($_SESSION['idLogin'])) {
          ?>
          <li class="nav-item"><a href="login.php" class="nav-link hvr-underline-from-left">Login</a></li>
        <?php } ?>
        <?php
        if (isset($_SESSION['idLogin'])) {
          ?>
          <li class="nav-item"><a href="process/userLogout.php" class="nav-link hvr-underline-from-left">Logout</a></li>
        <?php } ?>
      </ul>
    </div>
  </div>
</nav>