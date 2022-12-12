<?php
session_start();
include("../php/dbconnection.php");
    $reg_id = $_SESSION['reg_id'];
    if (isset($_GET['checked'])){
        $mode = $_GET['checked'];
        $sql = "update customerreg_tbl SET is_dark='$mode' WHERE customerreg_id = $reg_id";
        if(mysqli_query($con,$sql)){
            echo "sucess";
        }
    }
    if(isset($_GET['checkData'])){
        $sql = "SELECT is_dark FROM customerreg_tbl WHERE customerreg_id = $reg_id";
        if($result = mysqli_query($con,$sql)){
            $row = mysqli_fetch_array($result);
            echo $row['is_dark'];
        }
    }
   
?>
