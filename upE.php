<?php
 
include('dbConfig.php');

$id_av = $_POST['id_av'];

$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$classeE = $_POST['classeE'];
$dateCe = $_POST['dateCe'];
$CeEchelonU = $_POST['CeEchelonU'];
$dateCeEchelonU = $_POST['dateCeEchelonU'];
$CeEchelonD = $_POST['CeEchelonD'];
$dateCeEchelonD = $_POST['dateCeEchelonD'];



$query = " UPDATE `avancement` SET  `nom` = '$nom', `prenom` = '$prenom', `classeE` = '$classeE', `dateCe` = '$dateCe', `CeEchelonU` = '$CeEchelonU', `dateCeEchelonU` = '$dateCeEchelonU', `CeEchelonD` = '$CeEchelonD', `dateCeEchelonD` = '$dateCeEchelonD'  WHERE `id_av`='$id_av'";

if($conn->query($query) === TRUE){
	header("Location:classE.php");
}
else
{
	echo "Erreur tsy fanatatra";
}
$conn->close();
?>