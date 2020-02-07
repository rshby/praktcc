<?php 
//awalan session
session_start();

//cek belum login tdk bisa akses file ini
if ( !isset($_SESSION["login"])) 
{
	header("location:index.php");
	exit;
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
					<a class="nav-item nav-link" href="index.php">Login <span class="sr-only">(current)</span></a>
					<a class="nav-item nav-link active" href="home.php">Home</a>
				</div>
			</div>
		</div>
	</nav>

	<div class="container">
		<div class="row mt-3">
			<div class="col">
				<a href="logout.php" class="badge badge-danger float-right">Logout</a>
			</div>
		</div>

		<div class="row">
			<div class="col">
				<h2>Daftar Menu</h2>
			</div>
		</div>

		<div class="row mt-3">
			<?php for ($i=1; $i <=6 ; $i++) 
			{ ?> 
				<div class="col-sm-4">
					<div class="card mb-3" style="box-shadow: 7px 7px 9px grey;">
						<img src="img/gambar<?=$i?>.jpg" class="card-img-top rounded" alt="...">
					</div>
				</div>
			<?php }  ?>
				
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