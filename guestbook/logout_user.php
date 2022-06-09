<?php 
	// Mulai session
	session_start();
	session_destroy();
	// Ketika memilih logout
	header("Location: login_user.php");
 
?>