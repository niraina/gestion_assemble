<?php
 
include('dbConfig.php');

$id_av = $_POST['id_av'];

$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$classeD = $_POST['classeD'];
$dateDc = $_POST['dateDc'];
$DcEchelonU = $_POST['DcEchelonU'];
$dateDcEchelonU = $_POST['dateDcEchelonU'];
$DcEchelonD = $_POST['DcEchelonD'];
$dateDcEchelonD = $_POST['dateDcEchelonD'];
$DcEchelonT = $_POST['DcEchelonT'];
$dateDcEchelonT = $_POST['dateDcEchelonT'];


$query = " UPDATE `avancement` SET  `nom` = '$nom', `prenom` = '$prenom', `classeD` = '$classeD', `dateDc` = '$dateDc', `DcEchelonU` = '$DcEchelonU', `dateDcEchelonU` = '$dateDcEchelonU', `DcEchelonD` = '$DcEchelonD', `dateDcEchelonD` = '$dateDcEchelonD', `DcEchelonT` = '$DcEchelonT', `dateDcEchelonT` = '$dateDcEchelonT'  WHERE `id_av`='$id_av'";

if($conn->query($query) === TRUE){
	header("Location:class2.php");
}
else
{
	echo "Erreur tsy fanatatra";
}
$conn->close();
?>