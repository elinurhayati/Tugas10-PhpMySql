<?php
	/* Include file koneksi.php untuk menghubungkan file php dg database*/
	include 'koneksi.php';

	// Mengecek apakah id yang dipilih ada di dalam daftar guestbook
	if(!isset($_GET['id']) ){
	    header('location: tampil_guestbook.php');
	}

	// Variabel untuk mengambil data id dari dalam daftar guestbook
	$id = $_GET['id'];

	// Mengambil data dari database myweb berdasarkan id guestbook
	$ambil = mysqli_query($conn, "SELECT * FROM guestbook WHERE id=$id");
	$row = mysqli_fetch_assoc($ambil);

	// Ketika data yang di-edit tidak ditemukan
	if(mysqli_num_rows($ambil) < 1 ){
	    die("Oops... data not found");
	}	
?>


<DOCTYPE HTML>
<html>
<head>
	<link rel="stylesheet" href="css/bootstrap.min.css" crossorigin="anonymus">
	<style>
		/*Mengatur warna background header*/
		.block{
			background-color:  #5564b9;
		}
		/*Mengatur warna background body*/
		.body{
			background-color:  #c9cef4;
		}
		/*Mengatur warna background laman*/
		body{
			background-color: #e4e7e6;
		}
	</style>
</head>

<body>
	<div class = "container mt-3 w-50">
		<h1 class=" text-center "> EDIT DATA GUESTBOOK </h1>

		<!-- Awal Card Form -->
		<div class="card mt-4 mb-5">
			<!--Header-->
			<div class="block card-header bg-danger text-white fs-5 fw-semibold">
	    		Please fill the data below correctly !
	  		</div>
	  		<!--body-->
	  		<div class="body card-body">
	    		<form method = "post" action = "editing_step.php">
	    			
	    			<div class = "form-group">
		    			<label class="fw-semibold">Posted</label>
		    			<input type = "date" name="posted" value="<?php echo $row['posted']?>" class="form-control " placeholder="" > </input>
	    			</div>
	    			<div class = "form-group">
		    			<label class="fw-semibold">Name</label>
		    			<input type = "text" name="name" value="<?php echo $row['name']?>" class="form-control " placeholder="" > </input>
	    			</div>
	    			<div class = "form-group">
		    			<label class="fw-semibold">Email</label>
		    			<input type = "text" name="email" value="<?php echo $row['email']?>" class="form-control " placeholder="" > </input>
	    			</div>
	    			<div class = "form-group">
		    			<label class="fw-semibold">Address</label>
		    			<input type = "text" name="address" value="<?php echo $row['address']?>" class="form-control " placeholder="" > </input>
	    			</div>
	    			<div class = "form-group">
		    			<label class="fw-semibold">City</label>
		    			<input type = "text" name="city" value="<?php echo $row['city']?>" class="form-control " placeholder=""> </input>
	    			</div>
	    			<div class = "form-group">
		    			<label class="fw-semibold">Message</label>
		    			<input type = "text" name="message" value="<?php echo $row['message']?>" class="form-control " placeholder=""> </input>*
	    			</div>
	    			
	    			<br>
	    			<button type = "submit" class = "btn btn-success" name = "submit">Submit</button>
	    			<button type = "reset" class = "btn btn-warning" name = "btnreset">Reset</button>
	    		</form>
	  		</div>

		</div>
		<!-- Akhir Card Form -->
	</div>

	<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>