<?php include "../view/website/header.php";?>
   
        <!– Begin Manin–>
        
                
        <div id="main">
            <div class="row">
                    <?php
                    $pro = new product();
                    $productId = $_GET['productId'];
                    $result=$pro->showbyID($productId);
                    
                    foreach ($result as $row)
                    {
                    ?>
                <form action="../Controller/index.php" method="post">
                    <input type="hidden" name="action" value="add_cart"/>
                    <input type="hidden" name="productId" value="<?php echo $productId;?>"/>
                    <div class="col-md-5">
                    <div class="main_inner">
                    
                        <img src="../view/website/images/<?php echo $row[2];?>" >
                    
                    </div>
                    </div>  
                    
                    <div class="col-md-7">
                    <div class="main_inner">
                    <div class="title_product"><?php echo $row[1];?></div>
                    <div class="price_product"><p>$<?php echo $row[3];?></p></div>
                    <br/>
                    <input type ="submit" class="btn btn-primary" value="Buy"/>
                    <br/><br/>
                    <select name="itemqty">
                        <?php 
                        for ($i=1; $i<=10;$i++):
                        ?>
                        <option value="<?php echo $i; ?>">
                        <?php echo $i; ?>
                        </option>
                        <?php endfor; ?>
                    </select>
                    <br/><br/><br/><br/>
                    <div class="details_product">$<?php echo $row[4];?></div>
                    </div>
                    </div>
                    </form>
                    <?php
                    }
                    ?>
            </div>
        </div>
                
        <!– End Main–>



<?php include "../view/website/footer.php";?>
