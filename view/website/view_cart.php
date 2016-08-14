<?php include "../view/website/header.php";?>

<div class="container-fluid">
  
            <div class="col-row">
                 
                
                <div class="col-lg-12" style="color: #eee;background-color:#191c21;">
                   <?php if(!isset($_SESSION['cart']) || count($_SESSION['cart'])== 0 ): ?>
                   <p style="color: red;">Bạn chưa chọn hàng</p>
                   <?php else: ?> 
                  <h2 style="color: #269abc;">Danh sách giỏ hàng </h2>
                  <form action="index.php" method="POST">
                  <input type="hidden" name="action" value="update_cart"/>
                  <table class="table table-bordered">
                      
                    <thead>
                       
                      <tr>
                    <div class="col-lg-3">
                        <th>Tên</th
                    </div>
                    <div class="col-lg-2">
                        <th>Giá </th>
                    </div>
                    <div class="col-lg-4">
                        <th>Số lượng</th>
                        </div>
                    <div class="col-lg-3">
                        <th>Thành tiền</th>
                    </div>
                        
                      </tr>
                      
                     
                    </thead>
                    <tbody>
                        <?php 
                        foreach ($_SESSION['cart'] as $productId =>$item):
                           
                            $cost = number_format($item['cost'],2);
                            $total = number_format($item['total'],2);
                      
                       ?>  
                      <tr>
                        <td><?php echo $item['name'];?></td>
                        <td>$<?php echo $cost ?></td>
                        <td><input type="text" name ="newqty[<?php echo $productId; ?>]" value ="<?php echo $item['qty']; ?>" style="color: #191c21;"/></td>
                        <td><?php echo $total; ?></td>
                        
                      </tr>
                      <?php endforeach; ?>
                       <tr>
                        <td> </td>
                        <td>  </td>
                        <td> Tổng tiền </td>
                        <td>  <p style="font-weight: bold; font-size:18px">$<?php echo get_subtotal(); ?></p> </td>
                      </tr>
                      <tr>
                        <td> </td>
                        <td>  </td>
                        <td> <input  class="btn btn-info confirm" type="submit" value="Cập nhật giỏ hàng"/>
                         </td>
                        <td> <a class="btn btn-info confirm" href="?action=order">Thanh toán</a> </td>
                      </tr>
                      
                    </tbody>
                  </table>
                  </form>
                  <p>Chọn Cập nhật giỏ hàng để nhập số lượng mới. Nhập 0 để xóa sản phẩm khỏi giỏ hàng </p>
                  <?php endif; ?>
                    <p><a href="?action=home">Chọn thêm sản phẩm</a></p>
                    <p><a href="?action=empty_cart">Xóa giỏ hàng</a></p>
                 </div>
                
                
                
            </div>
</div>
    
<?php include "../view/website/footer.php";?>