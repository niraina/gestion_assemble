<?php
include("dbConfig.php");
$id = $_GET['id'];

$q = "DELETE FROM `retraite` WHERE `id`= '$id'";

if($conn->query($q) === TRUE){
	header("Location:retraite.php");
}
else
{
	echo "Erreur tsy fanatatra";
}
$conn->close();
?>