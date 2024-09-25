<?php
#include("connection.php"); #error - localhost id redirecting too many times
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title></title>
</head>
<style type="text/css">
    header{
        font-size: 15px;
    }
    body{
        margin-top: 60px;
        font-size: 15px;
    }
    .middle{
        padding: 15px;
    }
    .menubar{
        display: grid;
        grid-template-columns: auto auto auto auto;
        grid-gap: 20px;
        padding: 15px;
    }
    .item{
        border: 1px solid black;
        padding: 20px;
        text-align: center;
    }
    .item:hover{
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    }
    caption{
        text-transform: uppercase;
        text-align: center;
    }
</style>

  