<?php
session_start();
include 'conSQL.php';
$error = '';

if (isset($_POST["submit"])) {
    if (!empty($_POST["idLogin"]) || !empty($_POST["Password"]) || !empty($_POST["Username"])) {
        # Get username and password from user
        $Username = $_POST["Username"];
        $Password = $_POST["Password"];

        # Write MySql Query
        $query = "SELECT * FROM login l 
        left join konsumen k on k.idLogin = l.idLogin 
        WHERE l.Username='$Username' AND l.Password='$Password'";
        # Get the query result
        $result = mysqli_query($con, $query);
        if (mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_assoc($result);
            // var_dump($row);
            // return;
            $loginLevel = $row["loginLevel"];

            if ($loginLevel == 1) {
                # code...

                $_SESSION["idLogin"] = 1;
                $_SESSION["Username"] = $Username;
                $_SESSION["loginLevel"] = $loginLevel;
                header("Location: ../adminHome.php");
            } else if ($loginLevel == 2) {
                $_SESSION["idLogin"] = $row['idLogin'];
                $_SESSION["idKonsumen"] = $row['idKonsumen'];
                $_SESSION["Username"] = $Username;
                $_SESSION["loginLevel"] = $loginLevel;
                header("Location: ../index.php");
            }
        } else {
            $error = urlencode("Username atau password salah!");
            header("Location: ../login.php?pesan=$error");
        }

        # Close connection to database
        mysqli_close($con);
    } else {
        $error = urlencode("Username atau password kosong!");
        header("Location: ../login.php?pesan=$error");
    }
}
