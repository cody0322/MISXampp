
session_start();
require_once(connect.php);
include('connect.php');
header("Content-Type: text/html; charset=utf8");
if(!isset($_POST['submit'])){
    echo( {"success":'true'}) ;
}
