<?php
include("dbConfig.php");

$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$classeD = $_POST['classeD'];
$dateDc = $_POST['dateDc'];
$DcEchelonU = $_POST['DcEchelonU'];
$dateDcEchelonU = $_POST['dateDcEchelonU'];



$query = "INSERT INTO `avancement`( `nom`, `prenom`, `classeD`,`dateDc`,`DcEchelonU`, `dateDcEchelonU`) VALUES ('$nom','$prenom','$classeD','$dateDc','$DcEchelonU','$dateDcEchelonU')";
if($conn->query($query) === TRUE){
	header("Location:avancement.php");
}
else
{
	echo "Erreur tsy fanatra";
}

$conn->close();
?>