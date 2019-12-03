
<?php 
include 'process/conSQL.php' ;
session_start();

if (!isset($_SESSION['idLogin'])) {
    header("Location: index.php");
}

if (isset($_SESSION['loginLevel'])) {
    if ($_SESSION['loginLevel'] == 2) {
        header("Location: index.php");
    }
}


include 'adminHeader.php' ;
?>
	
    <!-- END nav -->



  <section id="home" class="hero">
		  <div class="home-slider owl-carousel">
	      <div class="slider-item" style="background-image: url(images/admin.png);">
	      </div>

	      <div class="slider-item" style="background-image: url(images/admin.png);">
	      </div>
	    </div>
    </section>

 <head>
<?php include 'footer.php' ?>
</head>