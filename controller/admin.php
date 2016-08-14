<?php
    error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);
    include "../model/connect.php";
    include "../model/product.php";
    include "../model/order.php";
    include "../model/cart.php";
    include "../model/customer.php";
session_start();
//($_SESSION);die;
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include '../model/admin_check.php';


if(isset($_GET["action"]))
    $action=$_GET["action"]; 
elseif (isset($_POST['action']))
{
    $action=$_POST["action"];
}
else
    $action="home";

switch ($action)
{
    case "home":
        isAdmin();
        include '../view/admin/dashboard.php';
        break;
    case "charts":
        include '../view/admin/charts/charts.php';
        break;
    case "tables":
        include '../view/admin/tables/table.php';
        break;
    case "admin_order":
        include '../view/admin/order_manager.php';
        break;
    case "log_out":
        session_destroy();
//        print_r($_SESSION['cus_id']);
            include "../view/website/home.php";
            break;
    
    case "user_edit":
        $id= $_GET['txtId'];
        include '../view/admin/user_edit.php';
        break;
    
    case "user_manager":
            include "../view/admin/user_manager.php";
            break;
        
    case "user_add":
        include '../view/admin/user_add.php';
        break;
    
    case "insertProcess":    
        $id = $_POST['txtId'];
        $user = $_POST['txtUser'];
        $pass = $_POST['txtPass'];
        $name = $_POST['txtFullname'];
        $role= $_POST['rdbRole'];
        $gender = $_POST['rdbGender'];
        $email = $_POST['txtEmail'];
        $date = $_POST['txtDateofBirth'];
        $phone = $_POST['txtTelephone'];
        move_uploaded_file($_FILES['imgUpload']['name'], '../view/website/images/'.$_FILES['imgUpload']['name']);
        $avatar = $_FILES['imgUpload']['name'];
        $users1 = new customer();
        $users1->insertUser($id, $name, $role, $gender, $user, $pass, $email, $date, $phone, $avatar);
        echo "Insert success";
        include '../view/admin/user_manager.php';
        break;
        
    case"users_update_ok":
        $id = $_POST['txtId'];
        $user = $_POST['txtUser'];
        $pass = $_POST['txtPass'];
        $name = $_POST['txtFullname'];
        $role= $_POST['rdbRole'];
        $gender = $_POST['rdbGender'];
        $email = $_POST['txtEmail'];
        $date = $_POST['txtDateofBirth'];
        $phone = $_POST['txtTelephone'];
//        $avatar=$_POST['ChangeAVT'];
        if (isset($_FILES['imgUpload']))
        {
            // Nếu file upload không bị lỗi,
            // Tức là thuộc tính error > 0
            if ($_FILES['imgUpload']['error'] > 0)
            {
                echo 'File Upload Fail';
            }
            else{
                // Upload file
                move_uploaded_file($_FILES['imgUpload']['name'], '../view/website/images/'.$_FILES['imgUpload']['name']);
                $avatar = $_FILES['imgUpload']['name'];
            }
        }
        else {
            $n = new customer();
            $news = $n->getUserById($id);
            $avatar = $news[9];
        }
        $users = new customer();
        $users ->updateUser($id, $name, $role, $gender, $user, $pass, $email, $date, $phone, $avatar);
        echo "Update success";
        include '../view/admin/user_manager.php';
//        $user = new customer();
//        $user ->insertUser($name, $user, $pass, $gender, $email, $date, $phone, $avata);
//        echo "Tạo tài khoản thành công!";
//        header("Location:./index.php");
        break;
        
        //Gọi trang xóa User
           case "delete_user":
          $id= $_GET['userid'];
          $del = new customer();
          $del->deleteUser($id);
          echo 'Delete success';
         include '../view/admin/user_manager.php';
          break;

      
        //Gọi trang product_manager
    case "product_manager":
        include '../view/admin/product_manager.php';
        break;
    
        //Gọi trang thêm product
    case "product_add":
        include '../view/admin/product_add.php';
        break;
    
    case "insertProduct":    
        $id = $_POST['txtProductId'];
        $ProductName = $_POST['txtProductName'];
        $ProductPrice = $_POST['txtProductPrice'];
        $ProductDetails = $_POST['txtProductDetails'];      
        move_uploaded_file($_FILES['imgUpload1']['name'], '../view/website/images/'.$_FILES['imgUpload1']['name']);
        $ProductImage = $_FILES['imgUpload1']['name'];
        $product1 = new product();
        $product1->insertProduct($ProductName, $ProductImage, $ProductPrice, $ProductDetails);
        echo "Insert success";
        include '../view/admin/product_manager.php';
        break;
    
        //Gọi trang update product
    case "product_edit":
        $id= $_GET['txtId'];
        include '../view/admin/product_edit.php';
        break;
    case"product_update_ok":
        $id = $_POST['txtProductId'];
        $ProductName = $_POST['txtProductName'];
        $ProductPrice = $_POST['txtProductPrice'];
        $ProductDetails = $_POST['txtProductDetails'];  
        if (isset($_FILES['imgUpload1']))
        {
            // Nếu file upload không bị lỗi,
            // Tức là thuộc tính error > 0
            if ($_FILES['imgUpload1']['error'] > 0)
            {
                echo 'File Upload Fail';
            }
            else{
                // Upload file
                move_uploaded_file($_FILES['imgUpload1']['name'], '../view/website/images/'.$_FILES['imgUpload1']['name']);
                $ProductImage = $_FILES['imgUpload1']['name'];
            }
        }
        else {
            $p = new product();
            $news = $p->getProductById($ProductId);
            $ProductImage = $news[2];
        }
        $product2 = new product();
        $product2 ->updateProduct($id, $ProductName, $ProductImage, $ProductPrice, $ProductDetails);
        echo "Update success";
        include '../view/admin/product_manager.php';
//        $user = new customer();
//        $user ->insertUser($name, $user, $pass, $gender, $email, $date, $phone, $avata);
//        echo "Tạo tài khoản thành công!";
//        header("Location:./index.php");
        break;
    
        //Gọi trang xóa products
    case "delete_product":
    $id= $_GET['productid'];
    $del = new product();
    $del->deleteProducts($id);
    echo 'Delete success';
   include '../view/admin/product_manager.php';
    break;
    
    
}
?>