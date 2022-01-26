<?php
    include "koneksi.php";
    $nama_file = $_FILES['gambar']['name'];
    $ukuran_file = $_FILES['gambar']['size'];
    $tipe_file = $_FILES['gambar']['type'];
    $tmp_file = $_FILES['gambar']['tmp_name'];

    $path = "images/".$nama_file;

    if($tipe_file == "image/jpeg" || $tipe_file == "image/png"){ 
        if($ukuran_file <= 3000000){ 


          if(move_uploaded_file($tmp_file, $path)){ 
            
            $sql = mysqli_query($mysqli,"insert into gambar set nama='$nama_file', ukuran='$ukuran_file', tipe='$tipe_file'");
          
            if($sql){ 
			echo "<script>
						alert('Selamat! Gambar anda berhasil di upload !. Stay Safe and Stay Healthy dimanapun anda berada. ');
						document.location='lapordiri.html';
				     </script>"; 
            }else{
             echo "<script>
						alert('Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.');
						document.location='lapordiri.html';
				     </script>";
            }
          }else{
			   echo "<script>
						alert('Maaf, Gambar gagal untuk diupload.!');
						document.location='lapordiri.html';
				     </script>";
          }
        }else{
				 echo "<script>
						alert('Maaf, Ukuran gambar yang diupload tidak boleh lebih dari 3MB!');
						document.location='lapordiri.html';
				     </script>";
        }
      }else{
		   echo "<script>
						alert('Maaf, Tipe gambar yang diupload harus JPG / JPEG / PNG!');
						document.location='lapordiri.html';
				     </script>";
      }
?>
