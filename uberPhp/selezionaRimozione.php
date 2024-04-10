<?php
include"config.php";
$annuncio = $_POST['rimuovi'];
$sql ="DELETE FROM ANNUNCI WHERE ID = '$annuncio'";
mysql_query($sql);
echo"Rimosso l'annuncio selezionato.";

?>