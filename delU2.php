<?php
include("dbConfig.php");
$id = $_GET['id'];

$q = "DELETE FROM `user` WHERE `id`= '$id'";

if($conn->query($q) === TRUE){
	header("Location:admin.php");
}
else
{
	echo "Erreur tsy fanatatra";
}
$conn->close();
?>