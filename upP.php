<?php
 
include('dbConfig.php');

$id_av = $_POST['id_av'];

$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$classeP = $_POST['classeP'];
$dateCp = $_POST['dateCp'];
$CpEchelonU = $_POST['CpEchelonU'];
$dateCpEchelonU = $_POST['dateCpEchelonU'];
$CpEchelonD = $_POST['CpEchelonD'];
$dateCpEchelonD = $_POST['dateCpEchelonD'];
$CpEchelonT = $_POST['CpEchelonT'];
$dateCpEchelonT = $_POST['dateCpEchelonT'];


$query = " UPDATE `avancement` SET  `nom` = '$nom', `prenom` = '$prenom', `classeP` = '$classeP', `dateCp` = '$dateCp', `CpEchelonU` = '$CpEchelonU', `dateCpEchelonU` = '$dateCpEchelonU', `CpEchelonD` = '$CpEchelonD', `dateCpEchelonD` = '$dateCpEchelonD', `CpEchelonT` = '$CpEchelonT', `dateCpEchelonT` = '$dateCpEchelonT'  WHERE `id_av`='$id_av'";

if($conn->query($query) === TRUE){
	header("Location:classP.php");
}
else
{
	echo "Erreur tsy fanatatra";
}
$conn->close();
?>