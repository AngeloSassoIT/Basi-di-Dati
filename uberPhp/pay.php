<?php 
include"config.php";
$mitt = $_POST['pagamento'];
$topic = $_POST['topic'];
$testo = $_POST['testo'];


if(($mitt == null)){
	echo"inserire l'id del viaggio.Torna indietro e reinserisci";
	}else{	
	$sql = "insert into pagamento(pagamento,idRichiesta)values('$idRichiesta','$metodoPagamento')";
	
	mysql_query($sql);
	
	echo"$idRichiesta";
	echo"metodoPagamento";
	}




?>