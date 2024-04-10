<?php
include"config.php";
$citta = $_POST['citta'];
$dataInizio = $_POST['posizionePartenza'];
$dataFine = $_POST['indirizzoDestinazione'];
$descrizione = $_POST['descrizione'];
$costo = $_POST['metodoPagamento'];
session_start();
$nomeHost = $_SESSION['ClientId'];
print $_SESSION['ClientId'];

$sql = "insert into ricerche(città,posizionePartenza,indirizzoDestinazione,descrizione,metodoPagamento,nomeClient)values('$citta','$posizionePartenza','$indirizzoDestinazione','$descrizione','$metodoPagamento','$nomeClient')";

mysql_query($sql);

?>