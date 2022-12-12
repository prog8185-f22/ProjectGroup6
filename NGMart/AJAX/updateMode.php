<?php
include("../php/dbconnection.php");
    $reg_id = $_SESSION['reg_id'];
    $mode = $_GET['checked'];
    $sql1 = "update customerreg_tbl SET is_dark= $mode WHERE customerreg_id = $reg_id";
    if(mysqli_query($con,$sql)){
        echo "sucess";
    }
?>
