<?php


if(!isset($_POST['submit'])){
return;
}

include './DB.php';
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$email=$_POST['email'];


$sql = "INSERT INTO `visiteurs`(`ID_VISITEUR`,`nom`, `prenom`,`email`) VALUES (null,'".$nom."', '".$prenom."', '".$email."')";

var_dump($conn);
if (!$conn->query($sql)) {
    die( "Error: " . $sql . "<br>" . $conn->error);
 } 
  $conn->close();
header("Location: $path/affichage.php");
