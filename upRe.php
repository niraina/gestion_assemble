<?php
 
include('dbConfig.php');

$id = $_POST['id'];

$nom = $_POST['nom'];
$dateN = $_POST['dateN'];
$age = $_POST['age'];
$retraite = $_POST['retraite'];
$dateR = $_POST['dateR'];

$avancement = $_POST['avancement'];
$echelon = $_POST['echelon'];




$query = " UPDATE `retraite` SET  `nom` = '$nom',`dateN` = '$dateN',`age` = '$age', `retraite` = '$retraite', `dateR` = '$dateR',  `avancement` = '$avancement',  `echelon` = '$echelon' WHERE `id`='$id'";

if($conn->query($query) === TRUE){
	header("Location:retraite.php");
}
else
{
	echo "Erreur tsy fanatatra";
}
$conn->close();
?>