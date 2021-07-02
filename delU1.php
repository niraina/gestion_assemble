<?php
include("dbConfig.php");
$id = $_GET['id'];

$q = "DELETE FROM `membres` WHERE `id`= '$id'";

if($conn->query($q) === TRUE){
	header("Location:admin.php");
}
else
{
	echo "Erreur tsy fanatatra";
}
$conn->close();
?>