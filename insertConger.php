<?php
include("dbConfig.php");

$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$dateS = $_POST['dateS'];
$dateR = $_POST['dateR'];


$query = "INSERT INTO `conge`( `nom`, `prenom`, `dateS`, `dateR`) VALUES ('$nom','$prenom','$dateS','$dateR')";
if($conn->query($query) === TRUE){
	header("Location:conger.php");
}
else
{
	echo "Erreur tsy fanatra";
}

$conn->close();
?>