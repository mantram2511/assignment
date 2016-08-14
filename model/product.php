<?php

class product
 {
    //Khởi tạo thuộc tính cho lớp product
       
        var $ProductId = null;
        var $ProductName = null;
        var $ProductImage = "../view/website/images/";
        var $ProductPrice = null;
        var $ProductDetails = null;
         
         public function getListPro(){
        $db = new connect();
        $select = "select * from products";
        $result = $db->getList($select);
        return $result;
    }
        
        //Khai báo phương thức lấy danh sách product
        function getProduct() 
        { 
            $db = new connect();
            $select = "select * from products";
            $result = $db ->getList($select);
            return $result;
        }   
        
        function getProductById($ProductId)
        {
        $db = new connect();
        $select = "select * from products where productId ='$ProductId'";
        $result=$db->getInstance($select);
        return $result;
        }
                
         function getList()
    {
         $db = new connect();
         $select = "select * from adidas";
         $result = $db->getList($select);
         return $result;
     }
     
     function getList_DESC()
    {
         $db = new connect();
         $select = "select * from products ORDER BY productId DESC";
         $result = $db->getList($select);
         return $result;
     }
        
        //Khai báo phương thức thêm sản phẩm
         function insertProduct($ProductName,$ProductImage,$ProductPrice,$ProductDetails)
          { 
            $db = new connect();
            $query = "INSERT INTO products(productName,productImage,productPrice,productDetails) VALUES ('$ProductName','$ProductImage','$ProductPrice','$ProductDetails')";
            $result = $db ->exec($query);
            return $result;
          } 
          
        //Khai báo phương thức chỉnh sửa sản phẩm
        function updateProduct($id,$ProductName,$ProductImage,$ProductPrice,$ProductDetails)
         { 
         $db = new connect();
         $query = "update products set productName='$ProductName',productImage='$ProductImage',productPrice='$ProductPrice',productDetails='$ProductDetails' where productId='$id'";
         $db->exec($query);
         }
          
        
          
         function CountProduct($ProductName)
    {
        $db = new connect();
        $select = "select Count(*) from products WHERE ProductCategory='$ProductName'";
        $result = $db->getInstance($select);
        return $result; 
    }
    
        function showbyID($ProductId){
    $db=new connect();
    $select="select * from products where productId =$ProductId";
    $result=$db->getList($select);
    return $result;
    }
    
    //Khai báo phương thức xoá sản phẩm
    function deleteProducts($id)
         {
            $db = new connect();
            $query = "DELETE FROM `products` WHERE `productId` = '$id'";
            $db->exec($query);
         }
    
 }
?>