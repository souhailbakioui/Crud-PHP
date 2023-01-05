<?php

include './DB.php';
$id = $_GET['id'];
$sql = "DELETE FROM `visiteurs` where ID_VISITEUR = $id";
if(!$conn->query($sql)){
    die("err dans suppresion");
}
header("Location: " . $_SERVER["HTTP_REFERER"]); // Back To to Previous Page (Affichage)