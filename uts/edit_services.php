<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>Eccentric portfolio V2 - Personal Category Bootstrap Responsive Website Template | Contact : W3layouts</title>

  <!-- google fonts -->
  <link href="//fonts.googleapis.com/css?family=Nunito:400,700&display=swap" rel="stylesheet">

  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/style-starter.css">
    </head>
<body>
    <?php   
    include_once "koneksi.php"; 
    $status = 2;  
    if (isset($_POST['id'])) {

        $nama = $_POST['nama'];
        $keahlian = $_POST['keahlian'];
        $id = $_POST["id"];
         //buat koneksi
         $strSQL = "UPDATE services SET 
         nama='$nama', 
         keahlian='$keahlian'
         WHERE id='$id'";
        // echo $strSQL;
       // die;
         $runSQL = mysqli_query($conn,$strSQL);        
         if ($runSQL) {
             $status = 1; //sukses
         }  
         else {
             $status = 0; //tidak sukses;
         }      
         header("refresh:3; url=services.php"); 
    }        
    else if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $strSQL = "SELECT * FROM services WHERE id=$id";
        $runStrSQL = mysqli_query($conn,$strSQL);
        $jmlRowData = mysqli_num_rows($runStrSQL);
        if ($jmlRowData > 0) {
            while ($row = mysqli_fetch_assoc($runStrSQL)) {
                $nama = $row["nama"];
                $keahlian = $row["keahlian"];
            }
        }
    }  
    else {       
        $nama = "";
        $keahlian = "";
        $id = "";
    } 

    ?>
    <div class="container">
        <h2>Edit Services</h2>   
        <?php 
        include "modalservices.php";
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
        <form id="myform" method="POST" action="edit_services.php">
            <div class="form-group">
                <label>id</label>
                <input id="id" class="form-control" type="text" name="id" value="<?php echo $id?>">
            </div>
            <div class="form-group">
                <label>nama</label>
                <input id="nama" class="form-control" type="text" name="nama" value="<?php echo $nama?>">
            </div>
            <div class="form-group">
                <label>keahlian</label>
                <input id="keahlian" class="form-control" type="text" name="keahlian" value="<?php echo $keahlian?>">
            </div>            
                <input class="btn btn-dark" type="submit" id="tombol" value="Simpan">   
                <a href="services.php" class="btn btn-danger">Kembali</a>
        </form>
        
    </div>
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
  $(document).ready(function() {
        $('#proses').click(function(){
            $('#myform').submit();
        });
        $('#tombol').click(function(){
            //ambil data dari form
            const id = $('#id').val();
            const nama = $('#nama').val();
            const keahlian = $('#keahlian').val();

            $('#id').text(id);
            $('#nama').text(nama);
            $('#keahlian').text(keahlian);
        
        });
    });
</script>
</body>
</html>