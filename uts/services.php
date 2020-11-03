<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>Eccentric portfolio V2 - Personal Category Bootstrap Responsive Website Template | Services : W3layouts</title>

  <!-- google fonts -->
  <link href="//fonts.googleapis.com/css?family=Nunito:400,700&display=swap" rel="stylesheet">

  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/style-starter.css">

</head>

<body>
<!-- header -->
<header>
  <div class="w3l-header" id="home">
    <div class="container">
      <nav class="navbar navbar-expand-lg navbar-dark pl-0 pr-0">
        <a class="navbar-brand m-0" href="index.php"><span class="fa fa-gamepad"></span> My Web </a>
        <!-- if logo is image enable this   
            <a class="navbar-brand" href="#index.php">
                <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
            </a> -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
          aria-label="Toggle navigation">
          <span class="navbar-toggler-icon fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item mr-lg-4">
              <a class="nav-link pl-0 pr-0" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item mr-lg-4">
              <a class="nav-link pl-0 pr-0" href="about.php">Tentang Saya</a>
            </li>
            <li class="nav-item active mr-lg-4">
              <a class="nav-link pl-0 pr-0" href="services.php">Keahlian</a>
            </li>
            <li class="nav-item mr-lg-4">
              <a class="nav-link pl-0 pr-0" href="contact.php">Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link pl-0 pr-0" href="dashboard.php">Dashboard</a>
            </li>
          </ul>
        </div>
      </nav>
    </div>
  </div>
</header>
<!-- //header -->
<!-- services block1 -->
<div class="w3-services py-5" id="services">
    <div class="container py-lg-3">
        <div class="title-section">
            <h3 class="main-title-w3">Keahlian</h3>
            <div class="title-line">
            </div>
        </div>

      <?php
     // ?>
      <?php
    include_once "koneksi.php";
    $sql = "SELECT * FROM services WHERE id";
    $runSQL = mysqli_query($conn, $sql);

    if (isset($_POST["id"])) {
        $id = $_POST["id"];
        $nama = $_POST["nama"];
        $keahlian = $_POST["keahlian"];
        $sql = "UPDATE services SET nama='".$nama."', keahlian='".$keahlian."',";
        $runSQL = mysqli_query($conn, $sql);

    }
      ?>
      <?php
        if ($runSQL) {
            $jmlRowData = mysqli_num_rows($runSQL);
            if ($jmlRowData < 0) {
                echo "<tr><td colspan='5'>Data Tidak Terdapat Dalam Database</td></tr>";
                }
              else {
            while($row = mysqli_fetch_assoc($runSQL)) {
     ?>
      <!-- Isi Service !-->
        <section class="w3-services">
         <div class="container py-md-3">
         <h5><?php echo $row["id"]?>. <?php echo $row["nama"]?></h5>
          <p> <?php echo $row["keahlian"]?> </p>    
    </div>
      <?php
      ?>
      <div class="container py-md-3">
       <a href="edit_services.php?id=<?php echo $row["id"]?>" class="btn-style btn-secondary btn mt-lg-5 mt-4 ml-1">Edit</a>
      </div>
      <?php
                }
            }
        }
        ?>
<!-- Footer -->
<footer>
  <section class="w3l-footers-1">
    <div class="footer py-3">
      <div class="container">
        <div class="footer-content">
          <div class="row">
            <div class="col-lg-8 footer-left">
              <p class="m-0">&copy; 2020 Eccentric Portfolio. All Rights Reserved | Design by <a href="https://w3layouts.com">W3layouts</a></p>
            </div>
            <div class="col-lg-4 footer-right text-lg-right text-center mt-lg-0 mt-3">
              <ul class="social m-0 p-0">
                <li><a href="#facebook"><span class="fa fa-facebook"></span></a></li>
                <li><a href="#linkedin"><span class="fa fa-linkedin"></span></a></li>
                <li><a href="#instagram"><span class="fa fa-instagram"></span></a></li>
                <li><a href="#twitter"><span class="fa fa-twitter"></span></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</footer>
<!-- //Footer -->

<!-- move top -->
<button onclick="topFunction()" id="movetop" class="editContent" title="Go to top">
  <span class="fa fa-angle-up"></span>
</button>
<script>
  // When the user scrolls down 20px from the top of the document, show the button
  window.onscroll = function () {
    scrollFunction()
  };

  function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
      document.getElementById("movetop").style.display = "block";
    } else {
      document.getElementById("movetop").style.display = "none";
    }
  }

  // When the user clicks on the button, scroll to the top of the document
  function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
  }
</script>
<!-- /move top -->

<!-- common jquery -->
<script src="assets/js/jquery-3.3.1.min.js"></script>
<!-- //common jquery -->

<!-- disable body scroll which navbar is in active -->
<script>
  $(function () {
    $('.navbar-toggler').click(function () {
      $('body').toggleClass('noscroll');
    })
  });
</script>
<!-- disable body scroll which navbar is in active -->


<!-- for blog carousel slider -->
<script src="assets/js/owl.carousel.js"></script>
<script>
  $(document).ready(function () {
    var owl = $('.owl-carousel');
    owl.owlCarousel({
      stagePadding: 20,
      margin: 15,
      nav: false,
      loop: false,
      responsive: {
        0: {
          items: 1
        },
        600: {
          items: 2
        },
        1000: {
          items: 3
        }
      }
    })
  })
</script>
<!-- //for blog carousel slider -->


<!-- stats number counter-->
<script src="assets/js/jquery.waypoints.min.js"></script>
<script src="assets/js/jquery.countup.js"></script>
<script>
  $('.counter').countUp();
</script>
<!-- //stats number counter -->

<!-- jQuery-Photo-filter-lightbox-portfolio-plugin -->
<script src="assets/js/jquery-1.7.2.js"></script>
<script src="assets/js/jquery.quicksand.js"></script>
<script src="assets/js/script.js"></script>
<script src="assets/js/jquery.prettyPhoto.js"></script>
<!-- //jQuery-Photo-filter-lightbox-portfolio-plugin -->

<!--  bootstrap js -->
<script src="assets/js/bootstrap.min.js"></script>
<!--  //bootstrap js -->

</body>

</html>