<?php include 'admin_header.php';?>
<?php include 'sidemenu.php';?>


<div id="main" >
            
            <div class="col-md-12">
                <div style="margin-left: 0px auto;">
                <div class="col-lg-12" style="color: #737373;background-color:#262626;">
                    <table width="100%" border="1" class="table table-bordered">
                        <form method="POST" enctype="multipart/form-data" action='?action=insertProduct'>
                    <table>

                    <tr>
                        <td>
                            <label for="txtProductId">ProductId</label>
                        </td>
                        <td>
                            <input type="text" name="txtProductId" id="txtProductId" style="margin-left: 20px"/>
                        </td>
                    </tr>

                    
                    <tr>
                        <td>
                            <label for="txtProductName">ProductName</label>
                        </td>
                        <td>
                            <input type="text" name="txtProductName" id="txtProductName" style="margin-left: 20px"/>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="txtProductPrice">ProductPrice</label>
                        </td>
                        <td>
                            <input type="text" name="txtProductPrice" id="txtProductPrice" style="margin-left: 20px"/>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="txtProductDetails">ProductDetails</label>
                        </td>
                        <td>
                            <input type="text" name="txtProductDetails" id="txtProductDetails" style="margin-left: 20px"/>
                        </td>
                    </tr>       
                    <tr>
                        <td>
                            <label for="txtProductImage">ProductImage</label>
                        </td>
                        <td>
                            <input type="text" value="<?php if(isset($uSers)) echo $uSer['productImage']?>" name="avtlink" hidden/>
                            <input type="file" name="imgUpload1" hidden id="imgUpload"/>
                            <img src="<?php if(isset($uSer)) echo "../view/website/images/".$uSer['productImage']?>" alt="" width="200px" id="ChangeAVT" onclick="Show()" class="point"/>
                        </td>
                    </tr>
                    
                    <tr>
                    
                        <td colspan="2">
                            <input class="btn btn-success" type="submit" name="submit_product" value="Submit"/>
                            <input  class="btn btn-success"type="reset" name="reset_product" value="Reset"/>
                        </td>
                    </tr>
                </table>
            </form>
                    </table>        
            </div>
            
        </div>

</div>
    <!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->




<?php include'admin_footer.php';?>

