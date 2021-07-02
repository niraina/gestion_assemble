<?php
include("dbConfig.php");
$id_personnel = $_GET['id_personnel'];

$q = "DELETE FROM `person` WHERE `id_personnel`= '$id_personnel'";

if($conn->query($q) === TRUE){
	header("Location:liste.php");
}
else
{
	echo "Erreur tsy fanatatra";
}
$conn->close();
?>