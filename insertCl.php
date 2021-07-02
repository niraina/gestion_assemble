<?php
include("dbConfig.php");

$nom 	= $_POST['nom'];
$prenom = $_POST['prenom'];
$classD = $_POST['classD'];
$echelU = $_POST['echelU'];
$classU = $_POST['classU'];
$echelD = $_POST['echelD'];
$classP = $_POST['classP'];
$echelT = $_POST['echelT'];
$classE = $_POST['classE'];




$query = "INSERT INTO `avacement` ( `nom`, `prenom`, `classD`,`echelU`, `classU`,`echelD`, `echelT`,`classP`, `classE`) VALUES 
('$nom','$prenom','$classD','$echelU','$classU','$echelD','$classP','$echelT,'$classE','$echelD'')";

if($conn->query($query) === TRUE){
	header("Location:avancement.php");
}
else
{
	echo "Erreur tsy fanatra";
}

$conn->close();
?>
