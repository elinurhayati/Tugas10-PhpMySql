<?php 
	/* Membuat koneksi database*/
	$host = 'localhost';
	$user = 'root';
	$pass = '';
	$db = 'myweb';

	$conn = mysqli_connect($host, $user, $pass, $db) or die(mysqli_error($conn));


	/* Ketika button submit diklik */
	if(isset($_POST['btnsubmit'])){
		/* Fungsi untuk insert data ke tabel */
		$submit = mysqli_query($conn, "INSERT INTO user( Name, Address, Email, Homepage, Username, Password) VALUES ('$_POST[name]', '$_POST[address]', '$_POST[email]', '$_POST[homepage]', '$_POST[username]', '$_POST[password]')");

		/* Ketika submit berhasil*/
		if($submit){
			echo "<script> 
					alert('Data Registrasi User Berhasil Tersimpan');
					document.location = 'signup_user.php';
				</script>";
		}
		/* Ketika submit gagal*/
		else{
			echo "<script> 
					alert('Oops Data Registrasi User Gagal Tersimpan');
					document.location = 'signup_user.php';
				</script>";
		}
	}
?>

<DOCTYPE HTML>
<html>
<head>
	<link rel="stylesheet" href="css/bootstrap.min.css" crossorigin="anonymus">
	<style>
		/*Mengatur warna background header*/
		.block{
			background-color:  #c24229;
		}
		/*Mengatur warna background body*/
		.body{
			background-color:  #efb758;
		}
		/*Mengatur warna background laman*/
		body{
			background-color: #e4e7e6;
		}
	</style>
</head>

<body>
	
	<div class = " container mt-3 w-50">
		<h1 class="text-center "> SIGN UP USER</h1>

		<!-- Awal Card Form -->
		<div class="card mt-4 mb-5">
			<!--Header-->
			<div class=" block card-header text-white fs-5 fw-semibold">
	    		Fill the data below !
	  		</div>
	  		<!--body-->
	  		<div class=" body card-body">
	    		<form method = "post" action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
	    			<div class = "form-group">
		    			<label class="fw-semibold">Name</label>
		    			<input type = "text" name="name"  class="form-control " placeholder="" value=""> </input>
	    			</div>
	    			<div class = "form-group">
		    			<label class="fw-semibold">Address</label>
		    			<input type = "text" name="address"  class="form-control " placeholder="" value=""> </input>
	    			</div>
	    			<div class = "form-group">
		    			<label class="fw-semibold">Email</label>
		    			<input type = "text" name="email"  class="form-control " placeholder="" value=""> </input>
	    			</div>
	    			<div class = "form-group">
		    			<label class="fw-semibold">Homepage</label>
		    			<input type = "text" name="homepage" class="form-control " placeholder="" value=""> </input>
	    			</div>
	    			<div class = "form-group">
		    			<label class="fw-semibold">Username</label>
		    			<input type = "text" name="username" class="form-control " placeholder="" value=""> </input>
	    			</div>
	    			<div class = "form-group">
		    			<label class="fw-semibold">Password</label>
		    			<input type = "text" name="password"  class="form-control " placeholder="" value=""> </input>
	    			</div>
	    			
	    			<br>
	    			<!--Membuat button submit & reset-->
	    			<button type = "submit" class = "btn btn-success" name = "btnsubmit">Submit</button>
	    			<button type = "reset" class = "btn btn-danger" name = "btnreset">Reset</button>
	    		</form>
	  		</div>

		</div>
		<!-- Akhir Card Form -->
	</div>

	<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>