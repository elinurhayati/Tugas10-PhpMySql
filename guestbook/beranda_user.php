<?php 
	/* Membuat koneksi database*/
	$host = 'localhost';
	$user = 'root';
	$pass = '';
	$db = 'myweb';

	$conn = mysqli_connect($host, $user, $pass, $db) or die(mysqli_error($conn));

	session_start();
	if (!isset($_SESSION['username'])) {
		header("Location: login_user1");
	}
?>
<DOCTYPE HTML>
<html>
<head>
	<link rel="stylesheet" href="css/bootstrap.min.css" crossorigin="anonymus">
	<style>
		body{
			background-color:  #efb758;
		}
		.div{
			background-color: #e4e7e6;
		}
		
	</style>
</head>

<body>
	<div class = "container mt-5 w-50 align-middle">
		<!-- Awal Card Form -->
		<div class="card mt-4 mb-5">
	  		<!--body-->
	  		<div class=" div body card-body ml-5 ">
	    		<form method="POST" action="">
					<div class="mb-3 ml-5">
					    <?php echo "<h1>Selamat Datang User " . $_SESSION['username'] ."!". "</h1>"; ?>
						<?php echo date('D - m - Y'); ?> 
					</div>
					<!--Button-->
					<a class="btn btn-success" href="signup_guestbook.php" role="button">Input Guestbook</a>
					<a class="btn btn-success" href="tampil_guestbook.php" role="button">Lihat Guestbook</a>
					<a class="btn btn-success" href="logout_user.php" role="button">Logout</a>
				</form>
	  		</div>

		</div>
		<!-- Akhir Card Form -->
	</div>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>