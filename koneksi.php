<?php 
	//koneksi database
$conn = mysqli_connect("localhost","root","","praktcc");

//fungsi untuk query
function query($query)
{
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows = [];
	while ($row = mysqli_fetch_assoc($result)) 
	{
		$rows[] = $row;
	}
	return $rows;
}

//fungsi tambah data
function tambah($data)
{
	global $conn;
	$nama_barang = $data["nama_barang"];
	$harga_barang = $data["harga_barang"];
	$stock_barang = $data["stock_barang"];

 	//query insert
	$query = "INSERT INTO barang VALUES ('$nama_barang','$harga_barang','$stock_barang')";
	mysqli_query($conn, $query);
	return mysqli_affected_rows($conn);
}

function edit($data)
{
	global $conn;
	$nama_barang = $data["nama_barang"];
	$harga_barang = $data["harga_barang"];
	$stock_barang = $data["stock_barang"];


	//query edit
	$query = "UPDATE barang SET nama_barang='$nama_barang', harga_barang='$harga_barang', stock_barang='$stock_barang' WHERE nama_barang='$nama_barang'";
	mysqli_query($conn, $query);
	return 	mysqli_affected_rows($conn);
}

//fungsi tambah data
function daftar($data)
{
	global $conn;
	$username = $data["username"];
	$password = $data["password"];

 	//query insert
	$query = "INSERT INTO user VALUES ('$username','$password')";
	mysqli_query($conn, $query);
	return mysqli_affected_rows($conn);
}
?>