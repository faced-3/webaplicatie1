<?php

include('./dbcalls/conn.php');
include('./dbcalls/read.php');

?>
<!-- <form action="dbcalls/create.php" method="post">
    <input type="text" name="productnaam" />
    <input type="submit" />
    <select name="list" >
        <option value="soep">soep</option>
        <option value="friet">friet</option>

    </select>
    <input type= "checkbox" name="check"/>
</form> -->
<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<header>

    <!--begin van navagatie balk in de top-->

    <nav>
        <ul>
            <li><a href="index.php">menu</a></li>
            <li><a href="login.php">login</a></li>
        </ul>
    </nav>
    <form action="./dbcalls/search.php" method="GET">
        <input type="text" name="searchresult">
        <input type="submit" value="Search">
    </form>

    <!--einde van navagatie balk in de top-->
</header>

<body>
    <main>
        <section class="stroke">
            <section class="special">
                <h1>speciliateid</h1>

            </section>



            <section class="special_burger">
                <section class="burger_container">
                    <h1 class="burgername">Truffel Wagyu Burger</h1>
                    <img src="assets/img/truffelwagyuburger.png" alt="truffelwagyuburger" height="150px" width="150px">
                    <section class="Ingrediënten">
                        <h2>Ingrediënten</h2>
                        <h4> Wagyu-rundvlees
                        </h4>
                        <h4>
                            Gegrilde tijgergarnalen
                        </h4>
                        <h4>
                            Knoflook-limoenaioli
                        </h4>
                        <h4>
                            Avocado
                        </h4>
                        <h4>
                            Briochebroodje
                        </h4>
                        <h4>
                            Little gem sla
                        </h4>
                    </section>
                    <h2>Prijs</h2>
                    <h2>€8,50</h2>
                </section>


                <section class="burger_container2">
                    <h1 class="burgername">Black Truffle Burger</h1>
                    <img src="assets/img/blacktruffleburger.png" alt="blacktruffleburger" height="150" width="150">
                    <section class="Ingrediënten">
                        <h2>Ingrediënten</h2>
                        <h4>
                            Dry-aged rundvlees
                        </h4>
                        <h4>
                            Truffelmayonaise
                        </h4>
                        <h4>
                            Geschaafde zwarte truffel
                        </h4>
                        <h4>
                            Gruyère kaas
                        </h4>
                        <h4>
                            Gekarameliseerde ui
                        </h4>
                        <h4>
                            Briochebroodje
                        </h4>
                    </section>
                    <h2>Prijs</h2>
                    <h2>€9,00</h2>
                </section>
            </section>
        </section>


        <section class="right_stroke">
            <section class="order_list">


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


           
        </section>



    </main>
 
</body>

</html>