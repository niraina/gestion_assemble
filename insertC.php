<?php
 
include('dbConfig.php');



$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$classeD = $_POST['classeD'];
$dateDc = $_POST['dateDc'];
$DcEchelonU = $_POST['DcEchelonU'];
$dateDCEchelonU = $_POST['dateDCEchelonU'];
$DcEchelonD = $_POST['DcEchelonD'];
$dateDCEchelonD = $_POST['dateDCEchelonD'];
$DcEchelonT = $_POST['DcEchelonT'];
$dateDCEchelonT = $_POST['dateDCEchelonT'];


$query = "INSERT INTO `avancement`( `nom`, `prenom`, `classeD`, `dateDc`, `DcEchelonU`, `dateDCEchelonU`, `DcEchelonD`, `dateDCEchelonD`, `DcEchelonT`, `dateDCEchelonT`) VALUES ('$nom','$prenom','$classeD','$dateDc','$DcEchelonU','$dateDCEchelonU','$DcEchelonD','$dateDCEchelonD','$DcEchelonT','$dateDCEchelonT')";

if($conn->query($query) === TRUE){
	header("Location:class2.php");
}
else
{
	echo "Erreur tsy fanatatra";
}
$conn->close();
?>