<?php
$servername = "localhost";
$database = "mis";
$username = "Roy";
$password = "123";
try{

    $conn = new PDO("mysql:host=$servername;dbname=$database;charset=utf8", $username, $password);
    
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    } catch(PDOException $e){
    
    die("ERROR: Could not connect. " . $e->getMessage());
    
    }
?>