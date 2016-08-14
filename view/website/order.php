<?php include "../view/website/header.php";?>

<div style="margin-left: 0px auto;">
    <div class="col-lg-12" style="color: #eee;background-color:#191c21;">
            <table width="100%" border="1" class="table table-bordered">
            <?php 
//            echo '<pre>';
//            echo $_SESSION['oder_id'];
//            echo '</pre>';
            $o = new Order();
            $result=$o->getOrder($_SESSION['oder_id']);
//            print_r($result);
            $odi=$result[0];
            $dc=$result[1];
            $ctid=$result[3];
            $ctn=$result[4];
            $d=new DateTime($dc);
            echo '<h1>Hoa don:'.$odi.'</h1>';
            $name =$_SESSION['nAme'];
            echo '<h5>Khach hang: '.$name.' </h5>';
            echo '<h5>Ngay lap:'.$d->format('d/m/Y').'</h5>';
            ?>
            
                <tr>
<!--                    <td>Product ID</td>-->
                    <td>Ma hang</td>
                    <td>Product Name</td>
                    <td>Quanlity</td>
                    <td>Product Price</td>
                    <td>Total</td>
                </tr>
                <?php 
                $result=$o->getOderDetail($_SESSION['oder_id']);
                //print_r($result);die;
//                foreach((array)$result as $item){
                foreach($_SESSION['cart'] as $key=>$item){    
//                while($set=$result->fetch()):
                ?>
                <tr>
                    <td><?php echo  $item["productId"]; ?></td>
                    <td><?php echo  $item["name"]; ?></td> 
                    <td><?php echo  $item["qty"]; ?></td> 
                    <td><?php echo  $item["cost"]," $"; ?></td> 
                    <td><?php echo  $item["total"]," $"; ?></td> 
                </tr>
                <?php } ?>
                <tr>
                    <td colspan='4' style="text-align: right; font-weight: bold;"> Tong hoa don:</td>
                    <td style="color: red; font-weight: bold;"><?php echo get_subtotal()." $"; ?></td>
                </tr>
                
            </table>
                <div class="pull-right">
                    <input type="submit" class="btn btn-success" value="Confirm">
                    <a href="?action=Cancel"><input type="reset" class="btn btn-danger" value="Cancel" name="Cancel"></a>
                </div>
        </div>
</div>

<?php include "../view/website/footer.php";?>