
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




// for($x = 0 ; $x<count($year) ; $x++)
// {
//     for($i = 0 ; $i<count($school_name) ; $i++)
//     {
//         $sql = "SELECT * FROM `$year[$x]` WHERE `school_name` = '$school_name[$i]'";
//         $retval = mysqli_query( $link , $sql); 

//         // echo
//         //     $retval;
//         while($row = mysqli_fetch_array($retval)) {
        
//         echo 
//         "學年度 : {$year[$x]}  <br> ".
//         "學校 :{$row['school_name']}  <br> ".
//         "醫學系 : {$row['medical_science']} <br> ".
//         "牙醫學系 : {$row['dentist']} <br> ".
//         "醫學院 : {$row['medical']} <br> ".
//         "工學院 : {$row['institute']} <br> ".
//         "理農學院 : {$row['College_of_Agriculture']} <br> ".
//         "商學院 : {$row['schools']} <br> ".
//         "文法學院 : {$row['Grammar_School']} <br> ".
//         "其他 : {$row['items']} <br> ".
//         "--------------------------------<br>";
        
//         }

//     }
// }





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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>查詢結果</title>
    
    <a href="home.html"><button name="home" style="margin-top:10px"class="btn btn-primary">首頁</button></a>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0-beta1/css/bootstrap.min.css ">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.14.0-beta3/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="search.css">
</head>
<body>
    
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                <th scope="col">學年度</th>
                <th scope="col">學校名稱</th>
                <th scope="col">醫學系</th>
                <th scope="col">牙醫學系</th>
                <th scope="col">醫學院</th>
                <th scope="col">工學院</th>
                <th scope="col">理農學院</th>
                <th scope="col">文法學院</th>
                </tr>
            </thead>
        <?php
        for($x = 0 ; $x<count($year) ; $x++)
        {
            for($i = 0 ; $i<count($school_name) ; $i++)
            {
                $sql = "SELECT * FROM `$year[$x]` WHERE `school_name` = '$school_name[$i]'";
                $retval = mysqli_query( $link , $sql); 
        
                // echo
                //     $retval;
                while($row = mysqli_fetch_array($retval)) {
                
                echo 
                "<tbody>".
                    "<tr>".
                        "<td>".
                        "{$year[$x]}  <br> ".
                        "</td>".
                        "<td>".
                        "{$row['school_name']}  <br> ".
                        "</td>".
                    "</tr>".
                "</tbody>";
                
                
                
                }
        
            }
        }
        
        ?>
</table>
 
    </div>


</body>
</html>