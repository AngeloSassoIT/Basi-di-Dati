<?php
include"config.php";
session_start();
$us = $_SESSION['clientId'];


echo"Puoi rimuovere le seguenti richieste: ";
$sql = "SELECT *FROM Richieste WHERE nomeHost = '$us'";
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
echo '<td>' . $row['nomeHost'] . '</td>';
echo "</tr>";
}

echo"</table>";
echo"<BR><form action = 'selezionaRimozione.php' method ='POST'><input type = 'text' value ='' name ='rimuovi'>ID Richiesta da rimuovere<BR><BR><input type ='submit' value ='rimuovi' name ='seleziona'></form>";



?>