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

  <title>Eccentric portfolio V2 - Personal Category Bootstrap Responsive Website Template | Home : W3layouts</title>

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
        <a class="navbar-brand m-0" href="index.php"><span class="fa fa-gamepad"></span> My Web</a>
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
            <li class="nav-item mr-lg-4">
              <a class="nav-link pl-0 pr-0" href="services.php">Keahlian</a>
            </li>
            <li class="nav-item mr-lg-4">
              <a class="nav-link pl-0 pr-0" href="contact.php">Contact</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link pl-0 pr-0" href="dashboard.php">Dashboard</a>
            </li>
          </ul>
        </div>
      </nav>
    </div>
  </div>
</header>
<?php
        include_once "koneksi.php";
        include_once "header.php";
        ?>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Isi Contact</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <table id="listtable" class="table table-striped">
                        <thead>
                            <tr>
                                <th>Kode</th>
                                <th>Gambar</th>
                                <th>Judul</th>
                                <th>Isi</th>
                            </tr>
                        </thead>
                        <tbody>
<?php
//buat sql
    $query = "SELECT * FROM contact";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) < 0) {
    echo "<tr><td colspan='4'>Data profil tidak terdapat pada database</td></tr>";
} else {
  while ($row = mysqli_fetch_array($result)) {
?>
<tr>
  <td><?php echo $row["id"] ?></td>
  <td><?php echo $row["nama"] ?></td>
  <td><?php echo $row["email"] ?></td>
  <td><?php echo $row["isi"] ?></td>
  </tr>
<?php
        }
      } 
?>
          </tbody>
        </table>
        </div>
      </div>
    </div>
     <!-- JS, Popper.js, and jQuery -->
     <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
    <script src="//cdn.ckeditor.com/4.11.1/standard/ckeditor.js"></script>
    <script>
    $(document).ready(function() {
        $('#listtable').DataTable();
    } );
    </script>
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
                <li><a href="https://www.linkedin.com/in/alif-putra-dafianto-3440911aa/"><span class="fa fa-linkedin"></span></a></li>
                <li><a href="https://www.instagram.com/apd4499/"><span class="fa fa-instagram"></span></a></li>
                <li><a href="#twitter"><span class="fa fa-twitter"></span></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</footer>
</html>