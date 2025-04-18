<?php
 
include("conn.php");
 
$gerechten = $_POST['gerechten'];
$prijs = $_POST['prijs'];


$img = $_POST['img'];
$omschrijving = $_POST['omschrijving'];
$id = $_POST['id'];
 
$sql = 'UPDATE menuitems SET gerechten = :gerechten, prijs = :prijs, img = :img, omschrijving = :omschrijving WHERE id = :id;';
$stmt = $conn->prepare($sql);
$stmt->bindParam(":gerechten", $gerechten );
$stmt->bindParam(":prijs", $prijs );
$stmt->bindParam(":img", $img );
$stmt->bindParam(":omschrijving", $omschrijving );
 
$stmt->bindParam(":id", $id );


$stmt->execute();
 
header("location: ../admin.php");       