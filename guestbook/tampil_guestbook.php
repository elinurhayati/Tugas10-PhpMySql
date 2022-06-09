<?php
	/* Include file koneksi.php untuk menghubungkan file php dg database*/
	include 'koneksi.php';

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
	<div class = "container mt-3 w-75">
		<h1 class="text-center "> LIST OF GUESTBOOK </h1>

		<!-- Awal Card Tabel -->
		<div class="card mt-4 mb-5">
			<!--Header-->
			<div class="block card-header btn-danger text-white fs-5 fw-semibold">
	    		Daftar Guestbook
	  		</div>
	  		<!--body-->
	  		<div class="body card-body">
	    		<table class = "table table-bordered table striped">
	    		<thead>
	    			<tr> <!--Membuat kolom tabel-->
	    				<th>ID</th>
	    				<th>Posted</th>
	    				<th>Name</th>
	    				<th>Email</th>
	    				<th>Address</th>
	    				<th>City</th>
	    				<th>Message</th>
	    				<th>Action</th>
	    			</tr>
	    		</thead>

	    		<tbody> 
	    			<?php
	    				//Kueri untuk memanggil seluruh data dalam tabel
	    				$show = mysqli_query($conn, "SELECT * FROM guestbook");
	    				while ($row = mysqli_fetch_array($show)){
	    					//Pemanggilan data dari tabel guestbook
			                echo "<tr>";
			                echo "<td>".$row['id']."</td>";
			                echo "<td>".$row['posted']."</td>";
			                echo "<td>".$row['name']."</td>";
			                echo "<td>".$row['email']."</td>";
			                echo "<td>".$row['address']."</td>";
			                echo "<td>".$row['city']."</td>";
			                echo "<td>".$row['message']."</td>";
			                echo "<td>";
			                //Mengarahkan button edit ke laman edit_guestbook.php
			                echo "<a href='edit_guestbook.php?id=".$row['id']."' class= 'btn btn-success'>Edit</a>&ensp;";
			                //Mengarahkan button delete ke laman delete_guestbook.php
			                echo "<a href='delete_guestbook.php?id=".$row['id']."' class= 'btn btn-danger'>Hapus</a>";
			                echo "</td>";
			                echo "</tr>";
            			}
	    			?>
	    		</tbody>
	    		</table>

	    		<!--membuat tombol untuk kembali ke halaman beranda-->
	    		<button type = "" class = "btn btn-success" name = "btnback" href="beranda_user.php">Back</button>

	  		</div>

		</div>
		<!-- Akhir Card Tabel -->
	</div>

	<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>