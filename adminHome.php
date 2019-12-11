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


include 'adminHeader.php';
?>

<body class="admin-bg">
    <?php include 'script.php' ?>
</body>

</html>