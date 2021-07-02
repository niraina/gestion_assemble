<?php
 
include('dbConfig.php');

$id_av = $_POST['id_av'];

$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$classeU = $_POST['classeU'];
$datePc = $_POST['datePc'];
$PcEchelonU = $_POST['PcEchelonU'];
$datePcEchelonU = $_POST['datePcEchelonU'];
$PcEchelonD = $_POST['PcEchelonD'];
$datePcEchelonD = $_POST['datePcEchelonD'];
$PcEchelonT = $_POST['PcEchelonT'];
$datePcEchelonT = $_POST['datePcEchelonT'];


$query = " UPDATE `avancement` SET  `nom` = '$nom', `prenom` = '$prenom', `classeU` = '$classeU', `datePc` = '$datePc', `PcEchelonU` = '$PcEchelonU', `datePcEchelonU` = '$datePcEchelonU', `PcEchelonD` = '$PcEchelonD', `datePcEchelonD` = '$datePcEchelonD', `PcEchelonT` = '$PcEchelonT', `datePcEchelonT` = '$datePcEchelonT'  WHERE `id_av`='$id_av'";

if($conn->query($query) === TRUE){
	header("Location:class1.php");
}
else
{
	echo "Erreur tsy fanatatra";
}
$conn->close();
?>