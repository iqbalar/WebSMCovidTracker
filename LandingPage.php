<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <title>Landing Page</title>
    <style type="text/css" href="css">
      
      body {
        background-color: #CDD9F8;
      }
    </style>
  </head>
  <body>
    <!-- NAVIGASI -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top nav justify-content-end" style="background-color: #2D3142;">
      <div class="container">
        <a class="navbar-brand" href="LandingPage.php">
          <img src="Asset/img/logo.png" style="width: 120px; height: 35px;">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse nav justify-content-end" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-link active float-end text-white pe-5" href="#scrollspyHeading1">Developer</a>
            <a class="nav-link active float-end text-white pe-5"" href="index.php">Sign In</a>
          </div>
        </div>
      </div>
    </nav>

    <br>
    <!-- KOTAK PERTAMA -->
    <div class="container">
    <div class="row align-items-center">
      <div class="col">
        <h1 class="fw-bold pt-5">Covid Tracker</h1>
        <h3>Social Media-Based</h3>
        <p class="text-justify">
          Social Media-based COVID Tracker merupakan aplikasi yang dapat membantu seseorang untuk melacak dan mencatat riwayat perjalanan melalui postingan media sosialnya. Melalui informasi mengenai lokasi dan waktu postingan, pengguna dapat mengecek apakah pernah berkontak dengan pasien COVID-19 dan akan diberi peringatan jika pernah kontak erat dengan pasien COVID-19 yang berada di tempat dan waktu yang sama.
        </p>
      </div>
      <div class="col">
        <img class=" d-block float-end" src="Asset/img/illus1.png" style="width: 800px; ">
      </div>
    </div>
  </div>

    <!-- KOTAK KEDUA -->
    <div data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-offset="0" class="scrollspy-example" tabindex="0">
    <div class="p-0 m-0" id="scrollspyHeading1" style="background-color: #E6ECFB;">
      <h1 class="fw-bold text-center pt-5">Our Team</h1>
      <img class="mx-auto d-block img-fluid" src="Asset/img/ourteam1.png" style="width: 70%;">
    </div>
    </div>

    
    
    <!-- FOOTER -->
    <footer
            class="text-center text-lg-start text-white"
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