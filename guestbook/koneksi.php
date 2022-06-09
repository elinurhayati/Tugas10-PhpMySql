<?php
	$host="localhost";
	$username="root";
	$password="";
	$db = "myweb";

	//Membuat koneksi ke database
	$conn = mysqli_connect($host, $username, $password, $db) or die("Koneksi gagal dibangun");

	//Melakukan seleksi kondisi variable $conn
	if($conn){
		//Menampilkan pesan berhasil terkoneksi ke database 
		echo "<script> alert ('Success connected to database'); </script>";
	} else{
		echo 'Error : '.mysqli_connect_error($conn);
	}
?>