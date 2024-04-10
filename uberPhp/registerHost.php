<?php
	include "config.php";
	
	$nome =$_POST['nome'];
	$cognome =$_POST['cognome'];	
	$email =$_POST['e-mail'];
	$numTel = $_POST['numTel'];
	$username =$_POST['username'];
	$password =$_POST['password'];
	$veicolo =$_POST['mezzo'];
	$confPass =$_POST['confermaPassword'];
	
	if($password == $confPass)
	{
	if(($nome == null)||($cognome == null)||($email == null)||($username == null)||($numTel == null)){
		
			echo"Ritenta.non sono stati riempiti tutti i campi.";
			echo"REGISTRAZIONE NON E' AVVENUTA CON SUCCESSO";
		}else{
		$sql = "INSERT INTO host(nome,cognome,email,numTel,hostId,password,mezzo)values('$nome','$cognome','$email','$numTel','$username','$password','$mezzo')";
		mysql_query($sql);
		echo"LA REGISTRAZIONE E' AVVENUTA CON SUCCESSO";
		}
	}else{
		echo"Ritenta.La password non e' stata confermata.";
		echo"REGISTRAZIONE NON E' AVVENUTA CON SUCCESSO";
	}
	
	
?>