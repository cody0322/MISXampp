<?php
session_start();
require_once 'connect.php';
include('connect.php');
header("Content-Type: text/html; charset=utf8");
if (!isset($_POST['submit'])) {
  exit("錯誤執行");
}
$year = $_POST['year'];
$school_name = $_POST['school_name'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- CSS only -->
  <!--
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0-beta1/css/bootstrap.min.css ">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.14.0-beta3/css/bootstrap-select.min.css">
  <link href="./css/css/fresh-bootstrap-table.css" rel="stylesheet" />

  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet" />

  <!-- Fonts and icons -->
  <link href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" rel="stylesheet">
  <link href="http://fonts.googleapis.com/css?family=Roboto:400,700,300" rel="stylesheet" type="text/css">
  <!-- jQuery Datatable -->
  <link rel="stylesheet" href="//cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
  <script src="//cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
  <link rel="stylesheet" href="css/preloader.css">
  <link rel="stylesheet" href="css/edit.css">
  <!-- <link rel="stylesheet" href="css/search.css"> -->

  
  <title>查詢結果</title>

</head>
<style>
  footer {
    color: white;
  }


  /* #main {
    margin-top: 20px;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 80v;
  } */

  .content {
    /* margin-bottom: 5em; */
    /* height: 95vh; */
    width: 100%;
  }
</style>


<body>
  <div id="preloader">
    <div id="status"></div>
  </div>



  