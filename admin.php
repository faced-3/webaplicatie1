<?php

if (isset($_SESSION['username']))

    include('./dbcalls/conn.php');
include('./dbcalls/read.php');

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/style.css">

</head>

<body>


    <?php include('./include/header.php'); ?>
    <main>
    <section class="column">
        <h1>admin</h1>
      
        <form action="./dbcalls/create.php" method="post">
            <label for="">type hier uw gerecht:</label>
            <input type="text" name="gerechten" id="gerechten" required>
            <label for="prijs">Voer hier de prijs in</label>
            <input type="text" name="prijs" id="prijs" required>
            <label for="omschrijving">Voer hier de omschrijving in</label>
            <input type="text" name="omschrijving" id="omschrijving" required>
            <label for="">typ hier je imagelocatie in:</label>
                <input type="text" name="img" id="img">

            <input type="submit" value="submit">
        </form>
        <form action="./dbcalls/backToMenu.php" method="post">
        <input type="submit" value="terug naar menu">
        </form>
      
            <?php
            foreach ($result as $key => $value) {
?>
  <div>
   <form action="./dbcalls/update.php" method="post">
                    <input type="hidden" name="id" id="" value="<?php echo $value['id']; ?>" >
                    gerechten<input type="text" name="gerechten" id="" value="  <?php echo $value['gerechten']; ?>">
                    prijs<input type="text" name="prijs" id="" value=" <?php echo $value['prijs']; ?>">
                    img<input type="text" name="img" id="1" value="  <?php echo $value['img']; ?>">
                    omschrijving <input type="text" name="omschrijving" id="" value=" <?php echo $value['omschrijving']; ?>"> 
                    <button type="submit" class="update-button">Update</button>
                </form>
                
               
               <form action="./dbcalls/delete.php" method="POST">
               <input type="hidden" name="id" id="" value="<?php echo $value['id']; ?>" >
               <input type="submit" value="delete">
                </form>
                </div>
              <?php
                
            }
?>
    
    </section>
            

       
        
       

    </main>

    <?php include('./include/footer.php'); ?>

</body>

</html>