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
              <a class="nav-link pl-0 pr-0" href="about.php">About me</a>
            </li>
            <li class="nav-item mr-lg-4">
              <a class="nav-link pl-0 pr-0" href="services.php">Services</a>
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
<body>
    <?php   
    
    $status = 2;  
    if (isset($_POST['kodemk'])) {
        include_once "koneksi.php"; 
        $kodemk = $_POST['kodemk'];
        $namamk = $_POST['namamk'];
        $kategori = $_POST['kategori'];
        $sks = $_POST['sks']; 

         //buat koneksi
         $strsql = "INSERT INTO matakuliah (kodemk, namamk, kategori, sks) 
         VALUES ('$kodemk','$namamk','$kategori','$sks')";
         
         $runSQL = mysqli_query($conn,$strsql);        
         if ($runSQL) {
             $status = 1; //sukses
         }  
         else {
             $status = 0; //tidak sukses;
         }       
    }            
    ?>
    <div class="container">
        <h2>Input Data</h2>   
    <!-- Ini Modal -->
        <div class="modal" id="pesan">
            <div class="modal-dialog">
                <div class="modal-content">
                    <!-- ini header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Konfirmasi Pendaftaran</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- body -->
                    <div class="modal-body">
                        <div class="container">
                            <div class="row">
                                <div class="col-6"><b>Kode Halaman</b></div>
                                <div class="col-6"><span id="id"></span></div>
                            </div>
                            <div class="row">
                                <div class="col-6"><b>Gambar Halaman</b></div>
                                <div class="col-6"><span id="gambar"></span></div>
                            </div>
                            <div class="row">
                                <div class="col-6"><b>Judul Halaman</b></div>
                                <div class="col-6"><span id="judul"></span></div>
                            </div>
                            <div class="row">
                                <div class="col-6"><b>Isi Halaman</b></div>
                                <div class="col-6"><span id="Isi"></span> sks</div>
                            </div>
                        </div>
                    </div>

                    <!-- footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-info" data-dismiss="modal">Edit</button>
                        <button id="proses" type="button" class="btn btn-primary" data-dismiss="modal">Submit</button>
                    </div>
                </div>
            </div>
        </div>

    <!-- ini end modal -->
        <?php 
            if ($status == 1) {
        ?>    
            <div class="alert alert-success alert-dismissible fade show">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                Data berhasil diinput ke dalam database.
            </div>
        <?php 
            }
            else if ($status == 0){
        ?>
            <div class="alert alert-danger alert-dismissible fade show">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                Data tidak berhasil diinput ke dalam database.
            </div>
        <?php 
            }
        
        ?>
        <form id="myform" method="post" action="registrasi_mk2.php">
            <div class="form-group">
                <label>Kode Halaman</label>
                <input id="id" class="form-control" type="text" name="id">
            </div>
            <div class="form-group">
                <label>Gambar Halaman</label>
                <input id="gambar" class="form-control" type="text" name="gambar">
            </div>
            <div class="form-group">
                <label>Judul Halaman</label>
                <input id="judul" class="form-control" type="text" name="judul">
            </div>
            <div class="form-group">
                <label>Isi</label>
                <input id="isi" class="form-control" type="text" name="isi">
        </div>           
                <input class="btn btn-primary" type="button" id="tombol" value="Simpan">   
        </form>
    </div>
    <?php 

    ?>
    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script>
    $(document).ready(function() {
        $('#proses').click(function(){
            $('#myform').submit();
        });
        $('#tombol').click(function(){
            //ambil data dari form
            const kodemk = $('#kodemk').val();
            const namamk = $('#namamk').val();
            const kategori = $('#kategori').val();
            const sks = $('#sks').val();

            $('#kdmk').text(kodemk);
            $('#nmmk').text(namamk);
            $('#kat').text(kategori);
            $('#sksmk').text(sks);
         
            //buka modal
            $('#pesan').modal({
                show: true
            });
        });
    });
    </script>
</body>
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