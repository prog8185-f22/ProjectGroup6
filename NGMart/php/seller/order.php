<?php

session_start();
if(isset($_SESSION['reg_id']))
{
    include("../dbconnection.php");
    $reg_id=$_SESSION['reg_id'];
    $order_id=$_GET['o_id'];
    

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check Out</title>
    <link href="../../style/order.css" rel="stylesheet"/> 
</head>
<body>
<div class="order_main">
        <img src="../../images/logo.png" id="d_logo" onclick="location.href='../../index.php'"/>

        <!-- // CURRENT STATUS -->
        <div class="status">
            <hr class="logo_hr">
            <hr class="hr_progress">
            <p>SIGN IN </p>
            <p>DELIVERY & PAYMENT</p>
            <p>PLACE ORDER</p>
            <p>COMPLETE PAYMENT</p>
        </div>
        <!-- CURRENT STATUS ENDS HERE  -->
        <br>

        <div class="ship_add">
        <div class="box_div" style="padding:20px">
            <h4>Shipping Address</h4>
                <table width=100%>
                    <tr>
                        <td width=70px><div class="loca_logo"><img src="../../images/logo_loca.png" width="20px" height="25px"></div></td>
            
           

            <?php
                $sql_o="SELECT * FROM order_tbl WHERE order_id=$order_id ";
                $result_o=mysqli_query($con,$sql_o);
                $order=mysqli_fetch_array($result_o);
                $add_id=$order['order_add_id'];

                $sql="SELECT * FROM address_tbl WHERE add_id=$add_id ";
                $result=mysqli_query($con,$sql);
                $row=mysqli_fetch_array($result);
                
                    $country_id=$row['add_country_id'];
                    $state_id=$row['add_state_id'];
                    $cities_id=$row['add_cities_id'];
                   

                    $sql2="SELECT co.*,st.*,ci.* FROM countries_tbl AS co,states_tbl AS st,cities_tbl AS ci,address_tbl AS ad  WHERE ci.cities_state_id=st.state_id AND ci.cities_country_id=co.country_id AND ci.cities_id=$cities_id ";
                    $result2=mysqli_query($con,$sql2);
                    $row2=mysqli_fetch_array($result2);
                    echo '<td><div class="addr_box"><p style="font-weight:bold;">'.$row['add_full_name'].'</p> 
                    <p>'.$row['add_mobile_no'].'</p>
                    <p>'.$row['add_house_name'].', '.$row['add_area'].', '.$row2['cities_name'].'</p>
                    <p>'.$row2['state_name'].', '.$row2['country_name'].', '.$row['add_pincode'].'</p>
                    </div></td>
                    <td >';
                    echo '<a href="editAdd.php?add_id='.$row['add_id'].'"><button  class="deliver_btn">Edit</button></a>';
                    echo'</td></tr></table>';

                        // echo '<div class="addr_box">';
                           
                                // echo '<p style="font-weight:bold;">'.$row['add_full_name'].'</p>';
                                // echo "<p>".$row['add_mobile_no']."</p>";
                                // echo "<p>".$row['add_house_name'].", ".$row['add_area'].", ".$row2['cities_name']."</p>";
                                // echo "<p>".$row2['state_name'].", ".$row2['country_name'].", ".$row['add_pincode']."</p>";
                            
                        // echo "</div>";

                        // echo "<div class='edit_btn'>";
                            // echo '<a href="editAdd.php?add_id='.$row['add_id'].'"><button  class="deliver_btn">Edit</button></a>';
                        // echo "</div>";   
                
                 ?>
        </div>
    </div>
        
    <div class="orders">
        <div class="box_div" style="padding:20px;">

        
            <h4>Order Summary</h4>
            <?php
            $subtotal=0;
            $item_count=0;
            $delivery_charge=20;
            echo "<table width=100%>";
            
            $sql="SELECT * FROM order_tbl WHERE order_id=$order_id";
            $result=mysqli_query($con,$sql);
            while($row=mysqli_fetch_array($result))
            {
        
                $item_id=$row["order_ps_id"];
                $sql2="select *,p.prod_name as prod,s.seller_name as seller from sellerreg_tbl as s,product_seller_tbl as ps,login_tbl as l,product_tbl as p where ps.ps_seller_id=l.login_id and p.product_id=ps.ps_product_id and s.seller_login_id=l.login_id and ps_id=$item_id";

                $resulti=mysqli_query($con,$sql2);
                $rowi=mysqli_fetch_array($resulti);
                $image="../../images/".$rowi['ps_image'];
                ?>
                <tr height=150px>
                    <td width=150px><a href=""><img class="table_image" src="../../images/<?php echo $rowi['ps_image'] ?>"></td>
                    <td><h2 style="margin-bottom:0px;"><?php echo $rowi['prod'] ?></h2><div class="seller">Sold by <?php echo $rowi['seller'] ?></div></td>
                    <td>&#8377 <?php echo $row['order_price']?></td>
                    <td width=100px>x <?php echo $row['order_quantity'] ?></td>
                    <td width=150px>
                        <a href="delete_cartitems.php?add_id=<?php echo $add_id ?> &order_final=true&id=<?php echo $row['cart_id'] ?>"><button class="carttablebuttons">Delete from cart</button></a><br><BR>
                        <a href="deleteupdate.php?add_id=<?php echo $add_id ?> &order_final=true&id=<?php echo $row['cart_id']?>&ps_id=<?php echo $row['ps_id'] ?>"><button class="carttablebuttons">Save for later</button></a>
                    </td>
                </tr> 
                
        <?php 
        $item_count+=$row['cart_qty'];
        $subtotal+= $rowi['ps_price']*$row['cart_qty'];
        } 
        $tax = (10/100) * $subtotal; 
        $total =  $subtotal + $delivery_charge + $tax;
        $paise_total=$total*100;
        $_SESSION['paise_total']=$paise_total;
        ?>
        </table>
        </div>
    </div>

    <div class="box_div" style="padding:20px 20px 0px 20px; margin-top:80px">
        <h4>Payment Summary</h4>
        <table width=100%>
            <tr>
                <td class="pay_head">Subtotal <label class="sub_head">(<?php echo $item_count?> items) </label></td>
                <td class="pay_price" style="text-align:right">&#8377 <?php echo $subtotal ?></td> <!-- &#8377 - ruppee symbol-->
            </tr>
            <tr>
                <td class="pay_head">Delivery</td>
                <td style="text-align:right">&#8377 20.00</td>
            </tr>
            <tr>
                <td class="pay_head">Tax <label class="sub_head"> GST 10% (included)</label></td>
                <td style="text-align:right">&#8377 <?php echo $tax ?></td>
            </tr>
            <tr>
                <td class="pay_head">Total paid by customer</td>
                <td style="text-align:right">&#8377 <?php echo $total ?></td>
            </tr>
        </table>
        <div class="color_bottom">
            <table width=100%><tr>
                <td class="pay_head">Total paid by customer</td>
                <td style="text-align:right">&#8377 <?php echo $total ?></td>
            </tr></table>
        </div>
        
    </div>

    <!-- no error only shows the pay button -->
    <?php 
    if($response){
        ?>
        <div class="pay_btn">
            <form action="../payment/submit.php" method="post" style="font-size: 11px; width:150px;height:35px;position:relative; left:922px; margin-top:30px;">
	           <script
	        	src="https://checkout.stripe.com/checkout.js" class="stripe-button"
	        	data-key="<?php echo $publishableKey?>"
	        	data-amount="<?php echo $paise_total ?>"
	        	data-name="Payment"
	        	data-description="Purchace with NGMart"
	        	data-currency="inr"
	        	data-email="anubenoy@mca.ajce.in">
	            </script>
            </form>
            <!-- <a href="place_order.php?add=<?php //echo $add_id;?>"><button class="deliver_btn1" style="font-size: 11px; width:150px;height:35px;position:relative; left:890px">Proceed to Pay</button></a> <br><br> -->
        </div>
        <?php
   }
    ?>
    
</div>
<?php require_once("footer.php"); ?>
    
</body>
</html>
<?php 
}
else
{?>
   <script>
   alert("Already Logout! \n Login to continue.");
   window.location.href="../../login_reg.php";
   </script>
   
   <?php
}?>
