<html>
<head>
  <title>Data Gambar</title>
  <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <title>Covid Tracker Social Media-Based</title>
    <style type="text/css" href="css">
      
      body {
        background-color: #E6ECFB;
      }
    </style>

</head>
    <body>
        <!-- NAVIGASI -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top nav justify-content-end" style="background-color: #2D3142;">
      <div class="container">
        <a class="navbar-brand" href="MainMenu.html">
          <img src="Asset/img/logo.png" style="width: 120px; height: 35px;">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse nav justify-content-end" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-link active float-end text-white pe-5" href="indexx.php">Data Akun Pengguna</a>
            <a class="nav-link active float-end text-white" href="index.php">Log Out</a>
          </div>
        </div>
      </div>
    </nav>

        <br><br>

        <h1 class="fw-bold pt-5 text-center">Data Gambar</h1>
    
        <table class="table table-hover text-center" border="1" cellpadding="8" style="background-color: #FFFFFF;">
         <thead style="background-color: #CDD9F8;">
            <tr>
            <th>Gambar</th>
            <th>Nama File</th>
            <th>Ukuran File</th>
            <th>Tipe File</th>
            </tr>
        </thead>
            <?php
          
            include "koneksi.php";
            $tampil = mysqli_query($mysqli,"select * from gambar");
            $sql = mysqli_num_rows($tampil);
                while($hasil = mysqli_fetch_array($tampil)){
            ?>
            <tr>
            <td><img width="50" height="50" src="<?php echo "images/".$hasil['nama'];?>"></td>
            <td><?php echo $hasil['nama'];?></td>
            <td><?php echo $hasil['ukuran'];?></td>
            <td><?php echo $hasil['tipe'];?></td>
            </tr>
            <?php
                
                }
            ?>
        </table>

        <div class="input-group">
        <button name="submit" class="rounded btn btn-primary mx-auto ps-5 pe-5">
            <a href="uploadgambar.php" class="text-white" style="text-decoration: none;">New Upload</a>
        </button>
        </div>
        <br><br>

        <!-- FOOTER -->
    <footer
            class="text-center text-lg-start text-white fixed-bottom"
            style="background-color: #2D3142"
            >
      <!-- Grid container -->
      <div class="container p-4 pb-0">
        <section class="">
          <div class="row">
            <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
              <h6 class="text-uppercase mb-4 font-weight-bold">
                Address
              </h6>
              <p>
                Jl. Sukamulus 96, Cigugur Girang, Kec. Parongpong, Kabupaten Bandung Barat, Jawa Barat 40559
              </p>
            </div>
            
            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
              <h6 class="text-uppercase mb-4 font-weight-bold">Products</h6>
              <p>
                <a class="text-white">Facebook</a>
              </p>
              <p>
                <a class="text-white">Instagram</a>
              </p>
              <p>
                <a class="text-white">Twitter</a>
              </p>
            </div>
            
            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
              <h6 class="text-uppercase mb-4 font-weight-bold">Contact</h6>
              <p><i class="fas fa-phone mr-3"></i> +082-121676700</p>
              <p><i class="fas fa-print mr-3"></i> +081-342220000</p>
            </div>

          </div>
        </section>
      </div>
      <div
           class="text-center p-3"
           style="background-color: rgba(0, 0, 0, 0.2)"
           >
            2021 Copyright CovidTracker Social Media-Based
      </div>
    </footer>



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="js/bootstrap.js"></script>

    <!-- Option 2: Separate Popper and B ootstrap JS -->
    <script src="js/popper.min.js"></script>

    </body>
</html>