<?php
$tytul = $_POST['tytul'];
$rok = $_POST['rok'];
$ocena = $_POST['ocena'];
$rezyser = $_POST['rezyser'];
$gatunek = $_POST['gatunek'];

$con = new mysqli("127.0.0.1","root","","filmy");
 
$q="INSERT INTO filmy (gatunki_id, rezyserzy_id, tytul, rok, ocena)
VALUES ($gatunek, $rezyser, '$tytul', $rok, $ocena)";

if($con->query($q)){}
else echo $con->errno . " " . $con->error;

header("location: index.php");
?>