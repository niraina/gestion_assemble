<?php
include("dbConfig.php");

$nom = $_POST['nom'];
$dateN = $_POST['dateN'];
$retraite = $_POST['retraite'];
$dateR = $_POST['dateR'];
$age = $_POST['age'];
$avancement = $_POST['avancement'];
$echelon = $_POST['echelon'];


$query = "INSERT INTO `retraite`( `nom`, `dateN`, `retraite`, `dateR`, `age`, `avancement`, `echelon`) VALUES ('$nom', '$dateN', '$retraite', '$dateR','$age' ,'$avancement','$echelon')";
if($conn->query($query) === TRUE){
	header("Location:retraite.php");
}
else
{
	echo "Erreur tsy fanatra";
}

$conn->close();
?>