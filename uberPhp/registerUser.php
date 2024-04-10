<?php
	include "config.php";
	
	$nome =$_POST['nome'];
	$cognome =$_POST['cognome'];	
	$email =$_POST['e-mail'];
	$username =$_POST['username'];
	$password =$_POST['password'];
	$confPass =$_POST['confermaPassword'];
	$metodoPagamento =$_POST['metodoPagamento'];
	
	if($password == $confPass){
		
		if(($nome == null)||($cognome == null)||($email == null)||($username == null))
		{
			echo"Ritenta.non sono stati riempiti tutti i campi.";
			echo"REGISTRAZIONE NON E' AVVENUTA CON SUCCESSO";
		}else{
			$sql = "INSERT INTO ospiti(nome,cognome,email,userId,password,metodoPagamento)values('$nome','$cognome','$email','$username','$password','$metodoPagamento')";
			mysql_query($sql);
			echo"LA REGISTRAZIONE E' AVVENUTA CON SUCCESSO";
		}
	}else{
		echo"Ritenta.La password non e' stata confermata.";
		echo"REGISTRAZIONE NON E' AVVENUTA CON SUCCESSO";
	}
	
?>