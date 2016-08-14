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

    $db = new product();
    $rs = $db->getProduct();
    
    echo "<table width='100%' border='1' class='table table-bordered' class='table_user' style='color: #fff;background-color:#262626;'>";
    echo "<a href='?action=product_add' class='btn btn-success' style='margin-bottom:20px;'>Insert Product</a>"; 
    echo "<tr>";
    echo "<td>ProductId</td>";
    echo "<td>ProductName</td>";
    echo "<td>ProductImage</td>";
    echo "<td>ProductPrice</td>";
    echo "<td>ProductDetails</td>";
    echo "</tr>";

//    for ($index = 0; $index < $rs->rowCount(); $index++) {
//            $row = $rs->fetch();
        foreach ($rs as $row){
    
            echo "<tr>";
            echo "<td>".$row['productId']."</td>";  
            echo "<td>".$row['productName']."</td>";
            echo "<td>".$row['productImage']."</td>"; 
            echo "<td>".$row['productPrice']."</td>"; 
            echo "<td>".$row['productDetails']."</td>"; 
            echo "<td>";
                    echo "<form method='post' action='?action=product_edit&productid=".$row['productId']."'>";
                    echo "<input type='hidden' name='ProductId' value='".$row['productId']."'/>";
                    echo "<input type='hidden' name='ProductName' value='".$row['productName']."'/>";
                    echo "<input type='hidden' name='ProductImage' value='".$row['productImage']."' <p/>";
                    echo "<input type='hidden' name='ProductPrice' value='".$row['productPrice']."'/>";
                    echo "<input type='hidden' name='ProductDetails' value='".$row['productDetails']."'/>";
                    echo "<input class='btn btn-success' type='submit' value='Edit' action='&productid=".$row['productId']."'/>";
                    
                    echo '</form>';            
                    
                    
            echo "</td>";  
           echo "<td ><a href='?action=delete_product&productid=".$row['productId']."' class='btn btn-danger' style='margin-top:15px;'>Delete</a></td>"; 
            
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
     
