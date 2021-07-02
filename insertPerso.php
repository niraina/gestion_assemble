<?php
include("dbConfig.php");

$nomP = $_POST['nomP'];
$prenomE = $_POST['prenomE'];
$dateN = $_POST['dateN'];
$lieu = $_POST['lieu'];
$situation = $_POST['situation'];
$nb_ef_vivant = $_POST['nb_ef_vivant'];
$nb_ef_charger = $_POST['nb_ef_charger'];
$corps = $_POST['corps'];
$dateE = $_POST['dateE'];
$classe = $_POST['classe'];
$dateClasse = $_POST['dateClasse'];
$echelon = $_POST['echelon'];
$dateEchelon = $_POST['dateEchelon'];



 	$query = "INSERT INTO `person`( `nomP`, `prenomE`, `dateN`, `lieu`, `situation`, `nb_ef_vivant`, `nb_ef_charger`, `corps`, `dateE`,`classe`,`dateClasse`,`echelon`,`dateEchelon`) VALUES ('$nomP','$prenomE','$dateN','$lieu','$situation','$nb_ef_vivant','$nb_ef_charger','$corps','$dateE','$classe','$dateClasse','$echelon','$dateEchelon')";


if($conn->query($query) === TRUE ){
	header("Location:liste.php");
}
else
{
	echo "Erreur tsy fanatra";
}

$conn->close();
?>