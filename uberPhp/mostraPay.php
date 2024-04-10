<?php
	include"config.php";
    $sql = "SELECT* FROM idRichieste";
    $result = mysql_query($sql);
	
	echo "<table border='1' cellpadding='10'>";
	echo "<tr> <th>idRichiesta</th> <th>metodoPagamento</th> <th>data</th> </tr>";
 
	// loop tra i risultati della query del database, visualizzandoli in tabella
	while($row = mysql_fetch_array( $result )) {
 
	// emissione del contenuto di ogni riga in una tabella
	echo "<tr>";
	echo '<td>' . $row['idRichiesta'] . '</td>';
	
	echo '<td>' . $row['metodoPagamento'] . '</td>';
	echo '<td>' . $row['data'] . '</td>'; 
	echo "</tr>";
	
	}
	echo"</table>";
	?>