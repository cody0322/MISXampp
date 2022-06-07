
<?php
session_start();
require_once 'connect.php';
include('connect.php');
header("Content-Type: text/html; charset=utf8");
if(!isset($_POST['submit'])){
    exit("錯誤執行");
}
$year = $_POST['year'];
$school_name = $_POST['school_name'];
// $sql = "SELECT * FROM $year WHERE `school_name` = '$school_name'";
// $sql = "SELECT * FROM year110 WHERE `school_name` = '國立中興大學'";

// $retval = mysqli_query( $link , $sql); 


for($x = 0 ; $x<count($year) ; $x++)
{
    for($i = 0 ; $i<count($school_name) ; $i++)
    {
    $sql = "SELECT * FROM `$year[$x]` WHERE `school_name` = '$school_name[$i]'";
    $retval = mysqli_query( $link , $sql); 

    // echo
    //     $year[$i];
    while($row = mysqli_fetch_array($retval)) {
    
    echo 
       "學年度 : {$year[$x]}  <br> ".
       "學校 :{$row['school_name']}  <br> ".
       "醫學系 : {$row['medical_science']} <br> ".
       "牙醫學系 : {$row['dentist']} <br> ".
       "醫學院 : {$row['medical']} <br> ".
       "工學院 : {$row['institute']} <br> ".
       "理農學院 : {$row['College_of_Agriculture']} <br> ".
       "商學院 : {$row['schools']} <br> ".
       "文法學院 : {$row['Grammar_School']} <br> ".
       "其他 : {$row['items']} <br> ".
       "--------------------------------<br>";
    
    }

    }
}





// while($row = mysqli_fetch_array($retval)) {
    
//     echo 
//        "學校 :{$row['school_name']}  <br> ".
//        "醫學系 : {$row['medical_science']} <br> ".
//        "牙醫學系 : {$row['dentist']} <br> ".
//        "醫學院 : {$row['medical']} <br> ".
//        "工學院 : {$row['institute']} <br> ".
//        "理農學院 : {$row['College_of_Agriculture']} <br> ".
//        "商學院 : {$row['schools']} <br> ".
//        "文法學院 : {$row['Grammar_School']} <br> ".
//        "其他 : {$row['items']} <br> ".
//        "--------------------------------<br>";
    
//  }

?>