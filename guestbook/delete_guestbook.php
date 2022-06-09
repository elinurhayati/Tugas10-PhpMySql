<?php
	/* Include file koneksi.php untuk menghubungkan file php dg database*/
	include 'koneksi.php';

	// Mengecek apakah id yang dipilih ada di dalam daftar guestbook
	if(isset($_GET['id']) ){

	    // Variabel untuk mengambil data id dari dalam daftar guestbook
		$id = $_GET['id'];
;
		// Mengambil data dari database myweb berdasarkan id guestbook
		$delete = mysqli_query($conn, "DELETE FROM guestbook WHERE id=$id");

		// Seleksi kondisi ketika proses delete berhasil
	    	if($delete) {
		        // Menampilkan pesan sukses
		        echo "<script> alert ('Data successfully deleted'); </script>";
		        // Mengarahkan kembali ke laman daftar guestbook
		        header('Location: tampil_guestbook.php');
	    	} else {
		        // Menampilkan pesan gagal delete
		        die("Oops... Data failed to delete");
	   		}

	} else{
		die("Sorry... access denied");
	}	

?>
