<?php
	include"config.php";
	
	$invia = $_POST['scelta'];
	$sql = "SELECT *FROM Richieste WHERE id ='$invia'";
    $result = mysql_query($sql);
	echo "<table border='1' cellpadding='10'>";
	echo "<tr> <th>ID</th> <th>Città</th> <th>posizionePartenza</th> <th>indirizzoDestinazione</th> <th>descrizione</th> <th>metodoPagamento</th> <th>nomeClient</th></tr>";
    
	// loop tra i risultati della query del database, visualizzandoli in tabella
	while($row = mysql_fetch_array( $result )) {
 
	// emissione del contenuto di ogni riga in una tabella
	echo "<tr>";
	echo '<td>' . $row['id'] . '</td>';
	echo '<td>' . $row['città'] . '</td>';
	echo '<td>' . $row['posizionePartenza'] . '</td>';
	echo '<td>' . $row['indirizzoDestinazione'] . '</td>'; 
	echo '<td>' . $row['descrizione'] . '</td>';
	echo '<td>' . $row['metodoPagamento'] . '</td>';
	echo '<td>' . $nomeh = $row['nomeClient'].'</td>';
	echo "</tr>";
	}
	echo"</table>";
	
	echo"$nomeh";
	
	$sql = "SELECT email,numTel FROM host INNER JOIN richieste ON (host.hostId = richieste.nomeClient AND richieste.id = '$invia') WHERE nomeClient ='$nomeh'+' '";
	$result = mysql_query($sql);
	
	echo"<br><table border ='1' cellpadding ='10'>";
	echo"<tr> <th>email</th> <th>numero Telefonico</th> </tr>";
	
	while($row = mysql_fetch_array($result)) {	   
	echo "<tr>";
	echo '<td>' . $row[0] . '</td>';
	echo '<td>' . $row[1] . '</td>';
	echo "</tr>";
	}
	echo"</table>";
		
	
	
	echo"<br><form action = 'logout.php' method ='POST'> <input type = 'submit' name = 'out'value='logout' >";
	


?>