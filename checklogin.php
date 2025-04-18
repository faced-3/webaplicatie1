<?php
include("conn.php");
session_start();
$stmt = $conn->prepare("SELECT * FROM Users WHERE username = :username AND password = :password;");
$stmt->bindParam(":username", $_POST['username']);
$stmt->bindParam(":password", $_POST['password']);
$stmt->execute();
$result = $stmt->fetch();


if ($result) {
    $_SESSION['username'] = $result['username'];
    $_SESSION['logged_in'] = true;

    header('location: ../admin.php');
    exit;  
}else {
    
    echo 'boehoe';
}