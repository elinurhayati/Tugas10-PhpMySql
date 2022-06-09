<?php
	/* Include file koneksi.php untuk menghubungkan file php dg database*/
	include 'koneksi.php';
	error_reporting(0);

	//Ketika button submit diklik
	if(isset($_POST['btnsubmit'])){
		/* Fungsi untuk insert data ke tabel */
		$submit = mysqli_query($conn, "INSERT INTO guestbook(posted, name, email, address, city, message) VALUES ('$_POST[posted]', '$_POST[name]', '$_POST[email]', '$_POST[address]', '$_POST[city]', '$_POST[message]')");

		/* Ketika submit berhasil*/
		if($submit){
			echo "<script> 
					alert('Registration data successfully saved');
					document.location = 'signup_guestbook.php';
				</script>";
		}
		/* Ketika submit gagal*/
		else{
			echo "<script> 
					alert('Oops Registration data failed to save');
					document.location = 'signup_guestbook.php';
				</script>";
		}
	}
	mysqli_close($conn);

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
		<h1 class="text-center "> SIGN UP GUESTBOOK </h1>

		<!-- Awal Card Form -->
		<div class="block card mt-4 mb-5">
			<!--Header-->
			<div class="card-header  text-white fs-5 fw-semibold">
	    		Silakan isi data berikut dengan benar !
	  		</div>
	  		<!--body-->
	  		<div class="body card-body">
	    		<form method = "post" action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
	    			
	    			<div class = "form-group">
		    			<label class="fw-semibold">Posted</label>
		    			<input type = "date" name="posted" value ="<?=@$eposted?>" class="form-control " placeholder="" value=""> </input>
	    			</div>
	    			<div class = "form-group">
		    			<label class="fw-semibold">Name</label>
		    			<input type = "text" name="name" value ="<?=@$ename?>" class="form-control " placeholder="" value=""> </input>
	    			</div>
	    			<div class = "form-group">
		    			<label class="fw-semibold">Email</label>
		    			<input type = "text" name="email" value ="<?=@$eemail?>" class="form-control " placeholder="" value=""> </input>
	    			</div>
	    			<div class = "form-group">
		    			<label class="fw-semibold">Address</label>
		    			<input type = "text" name="address" value ="<?=@$eaddress?>" class="form-control " placeholder="" value=""> </input>
	    			</div>
	    			<div class = "form-group">
		    			<label class="fw-semibold">City</label>
		    			<input type = "text" name="city" value ="<?=@$ecity?>" class="form-control " placeholder="" value=""> </input>
	    			</div>
	    			<div class = "form-group">
		    			<label class="fw-semibold">Message</label>
		    			<input type = "text" name="message" value ="<?=@$emessage?>" class="form-control " placeholder="" value=""> </input>
	    			</div>
	    			
	    			<br>
	    			<button type = "submit" class = "btn btn-success" name = "btnsubmit">Submit</button>
	    			<button type = "reset" class = "btn btn-warning" name = "btnreset">Reset</button>
	    		</form>
	  		</div>

		</div>
		<!-- Akhir Card Form -->
	</div>

	<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>