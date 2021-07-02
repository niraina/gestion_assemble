<?php
include("dbConfig.php");

$nom 	= $_POST['nom'];
$prenom = $_POST['prenom'];
$classeD = $_POST['classeD'];
$dateDc = $_POST['dateDc'];
$DcEchelonU = $_POST['DcEchelonU'];
$dateDCEchelonU = $_POST['dateDCEchelonU'];



$query = "INSERT INTO `avancement`( `nom`, `prenom`, `classeD`, `dateDc`, `DcEchelonU`, `dateDCEchelonU`) VALUES 
('$nom','$prenom','$classeD','$dateDc','$DcEchelonU','$dateDCEchelonU')";

if($conn->query($query) === TRUE){
	header("Location:liste.php");
}
else
{
	echo "Erreur tsy fanatra";
}

$conn->close();
?>