<?php

include"config.php";
	$dataInizio = $_POST['dataInizio'];
	$dataFine = $_POST['dataFine'];
	
	echo"Ricerca da '$dataInizio' a '$dataFine'";
	
	
		
    $sql ="SELECT * FROM Annunci WHERE((dataInizio BETWEEN '$dataInizio' AND  '$dataFine')AND (dataFine BETWEEN '$dataInizio' AND '$dataFine'))"; 
	$result =mysql_query($sql);
// visualizza i dati in tabella

echo "<table border='1' cellpadding='10'>";
echo "<tr> <th>ID</th> <th>Città</th> <th>dataInizio</th> <th>dataFine</th> <th>descrizione</th> <th>costo</th> <th>nomeHost</th></tr>";
 
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

echo"<BR> Se si vuole selezionare una richiesta si scriva l'ID della stessa nella casella qui accanto <BR> <form action = 'selezionaRichiesta.php' method ='POST'> <input type = 'text' name = 'scelta'> <input type = 'submit' value ='invia' name ='invia'> </form>";
?>