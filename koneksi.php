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
function daftar($data)
{
	global $conn;
	$email = $data["email"];
	$password = $data["password"];

 	//query insert
	$query = "INSERT INTO user VALUES ('$email','$password')";
	mysqli_query($conn, $query);
	return mysqli_affected_rows($conn);
}
?>