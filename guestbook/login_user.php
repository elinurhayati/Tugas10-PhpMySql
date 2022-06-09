<?php
	/* Include file koneksi.php untuk menghubungkan file php dg database*/
	include 'koneksi.php';

	//Ketika button submit diklik
	if(isset($_POST['submit'])){
		//Menampung isian username & passoword yg diinputkan
		$username = $_POST['username'];
		$password = $_POST['password'];
		$error="";
		//Query untuk select data dari tabel user
		$sql="SELECT * FROM user WHERE username='$username' and password='$password';";
		$qry=mysqli_query($conn, $sql) or die("Proses Login gagal");
		$cek = mysqli_num_rows($qry);
		//Seleksi kondisi apakah login berhasil / gagal
		if($cek>0){
			session_start();
			$_SESSION['username'] = $username;
			$_SESSION['status'] = 'login';
			//Menampilkan pesan login sukses
			echo "<script> alert ('Login success'); </script>";
			//Mengarahkan ke laman beranda_user
			header("location:beranda_user.php");

		}else{
			//Menampilkan pesan login berhasil
			echo "<script> alert ('Login failed'); </script>";
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
	<div class = "container mt-3 w-50">
		<h1 class="text-center ">  LOGIN </h1>

		<!-- Awal Card Form -->
		<div class="card mt-4 mb-5">
			<!--Header-->
			<div class="block card-header  text-white fs-5 fw-semibold">
	    		Silakan input username dan password anda !
	  		</div>
	  		<!--body-->
	  		<div class=" body card-body">
	    		<form method="POST" action="">
	    			<?php if (isset($_GET['error'])) { ?>
                    	<p class="error"><?php echo $_GET['error']; ?></p>
                	<?php } ?>

					<div class="mb-3">
					    <label class="form-label">Username</label>
					    <input type="text" class="form-control" name = "username" id="username">
					</div>
					<div class="mb-3">
					    <label for="exampleInputPassword1" class="form-label">Password</label>
					    <input type="password" class="form-control" name = "password" id="exampleInputPassword1">
					</div>
					<div class="mb-3 form-check">
					    <input type="checkbox" class="form-check-input" id="exampleCheck1">
					    <label class="form-check-label" for="exampleCheck1">Check me out</label>
					</div>

					<button type="submit" name = "submit" class="btn btn-success">Login</button>
				</form>
	  		</div>

		</div>
		<!-- Akhir Card Form -->
	</div>

	<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>