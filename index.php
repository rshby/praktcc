<?php 
//awalan session
session_start();

//bukan file koneksi
require 'koneksi.php';

//cek jika sudah login tdk bisa akses file ini
if ( isset($_SESSION["login"])) 
{
	header("location:home.php");
	exit;
}

//jika tombol login di klik
if( isset($_POST["login"]) )
{
	$email = $_POST["email"];
	$password = $_POST["password"];

	$result = mysqli_query($conn, "SELECT * FROM user WHERE email ='$email' AND password='$password'");

	//hitung jumlah data yg ditemukan
	$cek = mysqli_num_rows($result);

	//cek jika data ditemukan
	if( $cek == 1 )
	{
		//set session boolean
		$_SESSION['login'] = true;

		//pindah ke halaman index.php
		header("location:home.php");
		exit;
	}
	else
	{
		echo '<script language="javascript">';
 		echo 'alert("Username dan Password salah")'; 
 		echo '</script>';
 	}	

 }
 ?>


<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  <title>Halaman Login RM</title>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #bcbabe;">
    <div class="container">
      <a class="navbar-brand" href="home.php">RM Padang</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-item nav-link active" href="index.php">Login <span class="sr-only">(current)</span></a>
          <a class="nav-item nav-link" href="home.php">Home</a>
        </div>
      </div>
    </div>
  </nav>

  <div class="container isi-tengah">


    <div class="row mt-3">
      <div class="col-sm-4 putih">
        <h2 >RM. Murah Meriah</h2>
        <h4 >Harap Login Terlebih Dahulu</h4>

        <form method="post" action="">
          <div class="form-group">
            <label >Email address</label>
            <input type="text" class="form-control" name="email">
          </div>
          <div class="form-group">
            <label >Password</label>
            <input type="password" class="form-control" name="password">
          </div>
          <button type="submit" class="btn btn-primary" name="login">Login</button>
        </form>

        <p >Belum punya Akun? <a href="daftar.php">Daftar Disini</a></p>
      </div>
    </div>

  <!-- Batas Div Container -->  
  </div>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>

