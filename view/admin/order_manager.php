<?php include 'admin_header.php';?>
<?php include 'sidemenu.php';?>


    <div id="page-wrapper" style="background:#262626;margin-left: -25px;" >

        <div class="container-fluid">
            <div id="main" >
            
            <div class="col-md-12">
                <div style="margin-left: 0px auto;">
                <div class="col-lg-12" >
                    <table width="100%" border="1" class="table table-bordered" >
            
            <?php

    $db = new Order();
//    $rs =$db->getlistOrder();
    $rs=$db->getlistdetailOrder();
    echo "<table width='100%' border='1' class='table table-bordered' class='table_user' style='color: #fff;background-color:#262626;'>";
    echo "<tr>";
    echo "<td>OrderId</td>";
    echo "<td>DateCreate</td>";
    echo "<td>CustomerId</td>";
    echo "<td>Quanlity</td>";
    echo "<td>Product Price</td>";
    echo "<td>Total</td>";

    echo "</tr>";

        foreach ($rs as $row){
    
            echo "<tr>";
            echo "<td>".$row['orderId']."</td>";  
            echo "<td>".$row['datecreate']."</td>";
            echo "<td>".$row['customerId']."</td>";
            echo "<td>".$row['quanlity']."</td>";  
            echo "<td>".$row['price']."</td>";
            echo "<td>".$row['total']."</td>"; 
//            echo "<td>";
//                    echo "<form method='post' action='?action=product_edit&productid=".$row['productId']."'>";
//                    echo "<input type='hidden' name='ProductId' value='".$row['productId']."'/>";
//                    echo "<input type='hidden' name='ProductName' value='".$row['productName']."'/>";
//                    echo "<input type='hidden' name='ProductImage' value='".$row['productImage']."' <p/>";
//                    echo "<input class='btn btn-success' type='submit' value='Edit' action='&productid=".$row['productId']."'/>";                   
//                    echo '</form>';            
//                    
//                    
//            echo "</td>";  
//           echo "<td ><a href='?action=delete_product&productid=".$row['productId']."' class='btn btn-danger' style='margin-top:15px;'>Delete</a></td>"; 
//            
            echo "</tr>";
    
        }
    echo "</table>";
    ?>
            
                    </table>
                </div>
                </div>
            </div>
            
            
        </div>
    <!-- /#page-wrapper -->

    </div>
<!-- /#wrapper -->







<?php include'admin_footer.php';?>
     
