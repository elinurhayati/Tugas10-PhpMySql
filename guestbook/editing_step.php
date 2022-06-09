<?php 
	//Include file koneksi.php untuk menghubungkan file php dg database //
	include 'koneksi.php';

	// Seleksi kondisi ketika button simpan diklik
	if(isset($_POST['submit'])){
		//Mengambil data dari isian form
		$vid = $_REQUEST['id'];
		$posted=$_REQUEST['posted'];
		$name=$_REQUEST['name'];
		$email=$_REQUEST['email'];
		$address=$_REQUEST['address'];
		$city=$_REQUEST['city'];
		$message=$_REQUEST['message'];

	// Variabel penampung nilai edit data
		$edit = mysqli_query($conn, "UPDATE guestbook SET posted='$posted', name='$name', email='$email', address='$address', city='$city', message='$message' WHERE id=$vid");

	// Seleksi kondisi ketika proses edit data berhasil
		if($edit){
			// Menampilkan pesan sukses
	        echo "<script> alert ('Data successfully updated'); </script>";
	        // Mengarahkan kembali ke laman daftar guestbook
	        header('Location: tampil_guestbook.php');
		} else{
			// Menampilkan pesan gagal edit
	        die("Oops... Data failed to update".$edit. mysqli_error($conn));
		}

	}
?>