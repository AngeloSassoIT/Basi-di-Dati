<?php
include"config.php";
$idAnn =$_POST['id'];
$text =$_POST['testo'];
$sql ="UPDATE richieste
	   SET recensione='$text'
	   WHERE id='$idRichiesta'";
	   mysql_query($sql);
$sql ="select id,recensione from annunci where id = '$idRichiesta'";
$result = mysql_query($sql);
	
	echo "<table border='1' cellpadding='10'>";
	echo "<tr> <th>id</th> <th>recensione</th> </tr>";
 
	// loop tra i risultati della query del database, visualizzandoli in tabella
	while($row = mysql_fetch_array( $result )) {
 
	// emissione del contenuto di ogni riga in una tabella
	echo "<tr>";
	echo '<td>' . $row['id'] . '</td>';
	echo '<td>' . $row['recensione'] . '</td>';
	echo "</tr>";
	
	}
	echo"</table>";

?>