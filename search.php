<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/style.css">

    <title>Document</title>
</head>

    

<main><?php
include ('./conn.php');
$searchResult = $_GET["searchresult"];
$var = '%' . $searchResult . '%';

$stmt = $conn->prepare("SELECT * FROM menuitems WHERE gerechten LIKE :gerechten;");
$stmt->bindParam( ":gerechten", $var);
$stmt->execute();
$result = $stmt->fetchAll();
?>
 <section class="search">
            <section class="search_list">


                <?php
               
               
               foreach ($result as $key => $value) {

                   echo '<section class="order_item">' . '<div class="product">' . $value['gerechten'] . '</div>';
                   echo '<div class="placement_row">';
                   echo '<div class="top_row">';
                   echo    '<img class="img_box" src="'. ($value['img']) .'" '
                           . 'alt="'. ($value['gerechten']) .'"  />';
                   echo '</div>';                    
                   echo '<div class="omschrijving_box">' . $value['omschrijving'] . '</div>';
                   echo '</div>';
                   echo '<div class="bottom_row">'.'prijs €' . $value['prijs'] . '</div>';

                   echo '</section>';


               }


               

                ?>
            </section>
</main>
</body>
</html>