<?php
 
 include"config.php";
	$città = $_POST['città'];
	
	
	echo"Ricerca per localita : '$città'";
	
 $sql ="select * from richiesta where città = '$città'";
 
	$result = mysql_query($sql);
// visualizza i dati in tabella

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
echo '<td>' . $row['nomeClient'] . '</td>';
echo "</tr>";
}
echo"</table>";

echo"<BR> Se si vuole selezionare una richiesta si scriva l'ID della richiesta nella casella qui accanto <BR> <form action = 'selezionaRichiesta.php' method ='POST'> <input type = 'text' name ='scelta'> <input type = 'submit' value ='manda richiesta' name ='button'> </form>";
?>