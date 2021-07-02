<?php
 
include('dbConfig.php');

$id_personnel = $_POST['id_personnel'];
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

$query = " UPDATE `person` SET `nomP` = '$nomP ', `prenomE` = '$prenomE', `dateN` = '$dateN', `lieu` = '$lieu', `situation` = '$situation', `nb_ef_vivant` = '$nb_ef_vivant', `nb_ef_charger` = '$nb_ef_charger',  `corps` = '$corps', `dateE` = '$dateE',`classe` = '$classe', `dateClasse` = '$dateClasse', `echelon` = '$echelon', `dateEchelon` = '$dateEchelon'  WHERE `id_personnel`='$id_personnel'";

if($conn->query($query) === TRUE){
	header("Location:liste.php");
}
else
{
	echo "Erreur tsy fanatatra";
}
$conn->close();
?>