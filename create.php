<!--<h1>test</h1>-->
<h1>create</h1>

<?php 
    include ('./conn.php');

    $gerechten = $_POST['gerechten'];
    $prijs = $_POST['prijs'];
    $omschrijving = $_POST['omschrijving'];
    $img = $_POST['img'];

$sql = 'INSERT INTO menuitems(gerechten, prijs, omschrijving, img) VALUES (:gerechten, :prijs, :omschrijving, :img);';
$stmt = $conn->prepare(query: $sql);
$stmt->bindParam(param:":gerechten", var: $gerechten);
$stmt->bindParam(":prijs", $prijs);
$stmt->bindParam(":omschrijving", $omschrijving);
$stmt->bindParam(":img", $img);




$stmt->execute();
header(header:'location: ../index.php');

// $result = $stmt->fetchAll();
// header(header:'location: ../index.php');


// var_dump($_POST['productnaam']);
// var_dump($_POST['check']);
// var_dump($_POST['list']);
?>