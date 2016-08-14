<?php include "../view/website/header.php";?>

        
        <!– Begin Manin–>
        
                
        <div id="main">
            <div class="row">
                <?php
                 $prd = new product();
                 $result = $prd->getListPro();
                 
                 while ($set = $result->fetch()):  
                 ?>
                <form action="../Controller/index.php" method="post">
                    <input type="hidden" name="action" value="add_cart"/>
                    <input type="hidden" name="productId" value="<?php echo $productId;?>"/>
                    <div class="col-md-3">
                    <div class="main_inner">
                    <h3><?php echo $set[1];?></h3>
                    <a href="?action=products_details&productId=<?php echo $set['productId'] ?>"><img src="../view/website/images/<?php echo $set[2];?>"></a>
                    <br /><br />
                    <button type="button" class="btn btn-primary" id="primary2">$<?php echo $set[3];?></button>
                    <a href="?action=products_details&productId=<?php echo $set['productId'] ?>"><button type="button" class="btn btn-primary" id="primary1">Details</button></a>
                    </div>
                    </div>  
                <?php endwhile; ?> 
            </div>
        </div>
                
        <!– End Main–>



<?php include "../view/website/footer.php";?>
