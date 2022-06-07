
<?php
session_start();
require_once 'connect.php';
include('connect.php');

$p_number = "Select sn From user Where username = '$_COOKIE[c_account]'";
$result = mysqli_query($link,$p_number);//執行sql
$rows=mysqli_fetch_row($result);
$pidnumber = $rows[0];//儲存會員id
// echo
//     $rows[0].
//     $pidnumber;
// $user_sn = $_COOKIE['c_account'];
// $user_sn = $_SESSION['sn'];
$sql = "SELECT * FROM record where id = '$pidnumber'";
$retval = mysqli_query( $link , $sql); 
// $sn = getenv("REMOTE_ADDR");
// echo "$sn"; 
while($row = mysqli_fetch_array($retval)) {
    
    echo 
        "使用者代號 :{$row['id']}  <br> ".
        "金額 : {$row['cash']} <br> ".
       "項目 : {$row['itemname']} <br> ".
       "--------------------------------<br>";
    
 }

?>