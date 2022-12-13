<?php
require_once("php/dbconnection.php");
$loc=$_GET['loc'];
$query="select * from states_tbl where state_country_id = $loc";
$result=mysqli_query($con,$query);
echo "<option value=0> Province </option>";
while($row=mysqli_fetch_array($result)){
    echo "<option value=".$row['state_id'].">".$row['state_name']."</option>";
}
?>