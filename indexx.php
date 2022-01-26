<?php
	//Koneksi Database
	$server = "localhost";
	$user = "root";
	$pass = "";
	$database = "tubeswebpro";

	$koneksi = mysqli_connect($server, $user, $pass, $database)or die(mysqli_error($koneksi));

	if(isset($_POST['bsimpan']))
	{
		
		if($_GET['hal'] == "edit")
		{
			
			$edit = mysqli_query($koneksi, "UPDATE users set
											 	username = '$_POST[username]',
											 	email = '$_POST[email]',
												password = '$_POST[password]'
											 WHERE id = '$_GET[id]'
										   ");
			if($edit) //jika edit sukses
			{
				echo "<script>
						alert('Edit data suksess!');
						document.location='indexx.php';
				     </script>";
			}
			else
			{
				echo "<script>
						alert('Edit data GAGAL!!');
						document.location='indexx.php';
				     </script>";
					 
			}
			
		}
		else
		{
			//Data akan disimpan Baru
			$simpan = mysqli_query($koneksi, "INSERT INTO users (username, email, password)
										  VALUES('$_POST[username]', '$_POST[email]','$_POST[password]')");
									
										 
									
			if($simpan) //jika edit sukses
			{
				echo "<script>
						alert('Simpan data suksess!');
						document.location='indexx.php';
				     </script>";
			}
			else
			{
				echo "<script>
						alert('Simpan data GAGAL!!');
						document.location='indexx.php';
				     </script>";
					 
			}
		}

		
	}

	if(isset($_GET['hal']))
	{
		
		if($_GET['hal'] == "edit")
		{
			
			$tampil = mysqli_query($koneksi, "SELECT * FROM users WHERE id = '$_GET[id]' ");
			$data = mysqli_fetch_array($tampil);
			if($data)
			{
				
				$username = $data['username'];
				$email = $data['email'];
				$password = $data['password'];
			}
		}
		else if ($_GET['hal'] == "hapus")
		{
			$hapus = mysqli_query($koneksi, "DELETE FROM users WHERE id = '$_GET[id]' ");
			if($hapus){
				echo "<script>
						alert('Hapus Data Suksess!!');
						document.location='indexx.php';
				     </script>";
			}
		}
	}

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <title>CRUD</title>
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
        <a class="navbar-brand" href="">
          <img src="Asset/img/logo.png" style="width: 120px; height: 35px;">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse nav justify-content-end" id="navbarNavAltMarkup">
          <div class="navbar-nav">
		  <a class="nav-link active float-end text-white" href="tampilgambar.php">Lapor diri Pengguna</a>
            <a class="nav-link active float-end text-white" href="LandingPage.php">Log Out</a>
          </div>
        </div>
      </div>
    </nav>

	<!-- Awal Card Form -->
	<div class="card mt-3">
	  <div class="card-header bg-primary text-white">
	    Form Input Data
	  </div>
	  <div class="card-body">
	    <form method="post" action="">
	    	<div class="form-group">
	    		<label>Username</label>
	    		<input type="text" name="username" value="<?=@$username?>" class="form-control" placeholder="Input username anda disini!" required>
	    	</div>
	    	<div class="form-group">
	    		<label>email</label>
	    		<input type="text" name="email" value="<?=@$email?>" class="form-control" placeholder="Input email anda disini!" required>
	    	</div>
	    	<div class="form-group">
	    		<label>password</label>
	    		<input type="password" name="password" value="<?=@$password?>" class="form-control" placeholder="Input password anda disini!" required>
	    	</div>

	    	<button type="submit" class="btn btn-success mx-auto" name="bsimpan">Simpan</button>
	    	<button type="reset" class="btn btn-danger" name="breset">Kosongkan</button>

	    </form>
	  </div>
	</div>
	<!-- Akhir Card Form -->

	<!-- Awal Card Tabel -->
	<!-- Awal Card Tabel -->
	<!-- Awal Card Tabel -->
	<div class="card mt-3">
	  <div class="card-header bg-success text-white">
	    Daftar Pengguna
	  </div>
	  <div class="card-body">
	    
	    <table class="table table-bordered table-striped">
	    	<tr>
	    		<th>No.</th>
	    		<th>Username</th>
	    		<th>Email</th>
	    		<th>Password</th>
	    	</tr>
	    	<?php
	    		$no = 1;
	    		$tampil = mysqli_query($koneksi, "SELECT * from users order by id desc");
	    		while($data = mysqli_fetch_array($tampil)) :

	    	?>
	    	<tr>
	    		<td><?=$no++;?></td>
	    		<td><?=$data['username']?></td>
	    		<td><?=$data['email']?></td>
	    		<td><?=$data['password']?></td>
	    		<td>
	    			<a href="indexx.php?hal=edit&id=<?=$data['id']?>" class="btn btn-warning"> Edit </a>
	    			<a href="indexx.php?hal=hapus&id=<?=$data['id']?>" 
	    			   onclick="return confirm('Apakah yakin ingin menghapus data ini?')" class="btn btn-danger"> Hapus </a>
	    		</td>
	    	</tr>
	    <?php endwhile; ?>
	    </table>

	  </div>
	</div>

</div>
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
<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>