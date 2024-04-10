<?php
	
	
	
	/*session_start();	
	
    unset($_SESSION['hostId']);
	
	session_destroy();
	session_write_close();
	die;
    header("Location:login.html");
*/
	session_start();
	$_SESSION = array();
	session_destroy();
	$msg = "LOG-OUT EFFETTUATO.";
	$msg = urlencode($msg); 
	header("location: accesso.php?msg=$msg");
	exit();

	
?>