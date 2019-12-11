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
                <?php if (isset($_SESSION['idLogin'])) { ?>
                    <li class="nav-item"><a href="pesan.php" class="nav-link hvr-underline-from-left">Order List</a></li>
                    <li class="nav-item"><a href="history.php" class="nav-link hvr-underline-from-left">History</a></li>
                    <li class="nav-item"><a href="process/userLogout.php" class="nav-link hvr-underline-from-left">Logout</a></li>
                <?php } ?>
                <?php if (!isset($_SESSION['idLogin'])) { ?>
                    <li class="nav-item"><a href="login.php" class="nav-link hvr-underline-from-left">Login</a></li>
                <?php } ?>
            </ul>
        </div>
    </div>
</nav>