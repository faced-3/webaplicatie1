<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/style.css">

</head>
<body>
    <?php
       session_start();

if(isset($_SESSION['logged_in'])){
    
    header('location: ./admin.php');
}
else{
 
}
    ?>
    <section class="login_page">
        <h1>login to admin </h1>

    <form method="post" action="./dbcalls/checklogin.php">
        <div>
        <input type="text" name="username">
        <input type="text" name="password">
        </div>
        <div class="login_input">
        <input type="submit" value="login" class="input_box">
        </div>
    </form>
    </section>

</body>
</html>