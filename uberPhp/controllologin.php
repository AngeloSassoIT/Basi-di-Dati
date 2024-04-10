<?php
	include "config.php";

	$username = $_POST['username'];
	
	$password = $_POST['password'];
	$selectedGruppo = $_POST['gruppo'];
	

	if(!isset($_SESSION['hostId']) && !isset($_SESSION['userId'])){
	
		

	if($selectedGruppo == "host")
	{
	$sql = "SELECT* FROM host where ((hostId = '$username')&&(password = '$password'))";
    $result = mysql_query($sql);
	
	$num = mysql_num_rows($result);
	if($num == 1){
		
		session_start();
		session_register("username");
		$utEntrato=1;
		$_SESSION['hostId'] = $username;
		$messaggio = urlencode("Login avvenuto con successo '$username'");		
		header("Location: appHost.html ?msg = $messaggio");
		
	
	}else{
		
		echo"LoginFailed";
		header("Location: login.html");
	}
	}else{		
	$sql = "SELECT* FROM ospiti where ((userId = '$username')AND(password = '$password'))";
    $result = mysql_query($sql);
	$num = mysql_num_rows($result);
	if($num == 1){
		session_start();
		session_register("username");
		$utEntrato=1;
		$_SESSION['userId'] = $username;
		$messaggio = urlencode("Login avvenuto con successo '$username'");
		echo"Login Succesfull";
		header("Location: appUser.html ?msg = $messaggio");
	}else{
		echo"LoginFailed";
		header("Location: login.html");
		
	}
		
		
	

  }
}else{
	header("Location:login.html");
	
}
	 


	
	
	

	?>