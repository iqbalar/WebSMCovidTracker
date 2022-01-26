<?php 
 
include 'config.php';
 
error_reporting(0);
 
session_start();
 
if (isset($_SESSION['username'])) {
    header("Location: index.php");
}
 
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $cpassword = md5($_POST['cpassword']);
 
    if ($password == $cpassword) {
        $sql = "SELECT * FROM users WHERE email='$email'";
        $result = mysqli_query($conn, $sql);
        if (!$result->num_rows > 0) {
            $sql = "INSERT INTO users (username, email, password)
                    VALUES ('$username', '$email', '$password')";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                echo "<script>
						alert('Selamat, Registrasi Anda Berhasil!.');
						document.location='index.php';
				     </script>";
				
                $username = "";
                $email = "";
                $_POST['password'] = "";
                $_POST['cpassword'] = "";
            } else {
                echo "<script>alert('Woops! Terjadi kesalahan.')</script>";
            }
        } else {
            echo "<script>alert('Woops! Email Sudah Terdaftar.')</script>";
        }
         
    } else {
        echo "<script>alert('Password Tidak Sesuai')</script>";
    }
}
 
?>
 
<!DOCTYPE html>
<html>
<head>
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

      #login .container #login-row #login-column #login-box {
        margin-top: 120px;
        max-width: 600px;
        height: 400px;
        background-color: #FFFFFF;
      }
      #login .container #login-row #login-column #login-box #login-form {
        padding: 20px;
      }
      #login .container #login-row #login-column #login-box #login-form #register-link {
        margin-top: -85px;
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
  
            <a class="nav-link active float-end text-white" href="index.php">Sign In</a>
          </div>
        </div>
      </div>
    </nav>
</head>
<body>
    <<div id="login">
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="" method="post">
						<h3 class="text-center text-dark"><strong>Sign Up</strong></h3>
            <div class="form-group">
            <label for="username" class="text-dark">Username:</label><br>
                <input type="text" placeholder="Username" name="username" class="form-control" value="<?php echo $username; ?>" required>
            </div>
            <div class="form-group">
            <label for="password" class="text-dark">Email:</label><br>
                <input type="email" placeholder="Email" name="email" class="form-control" value="<?php echo $email; ?>" required>
            </div>
            <div class="form-group">
            <label for="password" class="text-dark">Password:</label><br>
                <input type="password" placeholder="Password" name="password" class="form-control" value="<?php echo $_POST['password']; ?>" required>
            </div>
            <div class="form-group">
            <label for="password" class="text-dark">Confirm Password:</label><br>
                <input type="password" placeholder="Confirm Password" name="cpassword" class="form-control" value="<?php echo $_POST['cpassword']; ?>" required>
            </div>
                <br>
            <div class="input-group">
                <button name="submit" class="rounded btn btn-primary mx-auto ps-5 pe-5">Sign In</button>
            </div>
        </form>
    </div>
</body>
</html>