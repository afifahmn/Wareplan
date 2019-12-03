<?php
session_start();

$_SESSION["idLogin"] = $row['idLogin'];
// $_SESSION["username"] = $Username;
// $_SESSION["level"] = $level;
unset($_SESSION["idLogin"]);
session_unset();
session_destroy();
header("location:../index.php")
?>