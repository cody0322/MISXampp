<?php

$servername = "localhost";
$username = "user";
$password = "123";
$dbname = "mis";
$dbport = "3306";

$link=mysqli_connect($servername,$username,$password,$dbname,$dbport);
if(!@mysqli_connect($servername,$username,$password,$dbname,$dbport))
        die("無法連線資料庫");
mysqli_query($link,"SET NAMES UTF8");
mysqli_query($link,$dbname);


?>