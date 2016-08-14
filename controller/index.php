<?php
    error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);
    include "../model/connect.php";
    include "../model/product.php";
    include "../model/order.php";
    include "../model/cart.php";
    include "../model/customer.php";
    
    // Khởi tạo session
     session_start();
     
     
      if(!isset($_SESSION['cart']))
         $_SESSION['cart'] = array();
     
     
     if(isset($_GET["action"]))
         $action=$_GET["action"]; 
     elseif (isset($_POST["action"]))
     {
         $action=$_POST["action"];
     }
     else
         $action="home";
     
     //Xóa dữ liệu của biến Messages
unset($_SESSION['messages']); 

     switch($action)
     {
            // Gọi trang chủ
        case "home":
//            session_destroy();
//        print_r($_SESSION['cus_id']);
            include "../view/website/home.php";
            break;
        
        case "login":
            include "../view/website/login.php";
            break;
        
        case "userdetail":
            include '../view/website/userdetail.php';
            break;
        
        case 'login_process':
        if(isset($_POST['login'])){
        $user = $_POST['user'];
        $_SESSION['username'] = $user;
        $pass = $_POST['pass'];
        $_SESSION['password'] = $pass;
        if ($user=="" || $pass=="")
        {
            // Tạo mặc định biến Session cho người dùng sau khi đăng nhập thành công
            echo '<script>';
            echo "alert('Bạn phải nhập thông tin đầy đủ')";
            echo '</script>' ;
            include "../view/website/login.php";
            break;
        }
        else 
        {
            $u = new customer();
            $result = $u->check($user);
            $results = $result->fetch();
            $pass_sql = $results[0];
            $role = $results['role'];
            if($pass == $pass_sql & $role == 0)     
            {
                $user = $results['customerId'];
                $_SESSION['cus_id']=$user;
                $name = $results['username'];
                $_SESSION['nAme']=$name;
                header ("Location:index.php");
            }
            elseif($pass == $pass_sql & $role == 1)
            {
                $user = $results['customerId'];
                $_SESSION['role'] = TRUE;
                 echo '<script>';
                echo "alert('Bạn đăng nhập thành công')";
                echo '</script>' ;
                header("Location:admin.php");
            }
        else {
            echo '<script>';
            echo "alert('Bạn đăng nhập thất bại')";
            echo '</script>' ;
            include "../view/website/login.php";}
            break;
            
        }}
        
        
        
        case"users_update_ok":
        $id = $_POST['txtId'];
        $user = $_POST['txtUser'];
        $pass = $_POST['txtPass'];
        $name = $_POST['txtFullname'];
        if(isset($_POST['rdbGender']))
            $gender = $_POST['rdbGender'];
        $email = $_POST['txtEmail'];
        $date = $_POST['txtDateoBirth'];
        $phone = $_POST['txtTelephone'];
        
        $users = new customer();
        $users ->updateUser($id, $name, $gender, $user, $pass, $email, $date, $phone);
        echo "Update thành công";
        header("Location:./index.php");
//        $user = new customer();
//        $user ->insertUser($name, $user, $pass, $gender, $email, $date, $phone, $avata);
//        echo "Tạo tài khoản thành công!";
//        header("Location:./index.php");
        break;
        
        //Gọi trang xóa User
           case "delete_user":
           $id= $_GET['txtId'];
          $del = new customer();
          $del->deleteUser($id);
          echo 'Delete success';
         header("Location:./index.php");
          break;

       
        case "products_details":
            include "../view/website/products_details.php";
            break;
        
        /**GIỎ HÀNG**/
        case "show_cart":
	include "../view/website/view_cart.php";
        break;
        
        case "add_cart":
        add_item($_POST['productId'], $_POST['itemqty']);
        header("Location:index.php?action=giohang_view");
        break;
    
        case "giohang_view":
        include "../view/website/view_cart.php";        
        break;
        
        case "update_cart":
            $new_list = $_POST['newqty']; 
            foreach ($new_list as $productId => $qty) {  
                if ($_SESSION['cart'][$productId] != $qty) {
                    update_item($productId, $qty);
                }
            }
            include '../view/website/view_cart.php';
            break;
            
            case "cart":
            echo $productId = $_GET["productId"];
            echo $quantity = $_GET["ProQuantity"];
            add_item($productId, $quantity);
            include "../view/website/view_cart.php";
            break;
            
            case "empty_cart":
            unset($_SESSION['cart']);
            include "../view/website/view_cart.php";
            break;
        
            case "order":
            if (!isset($_SESSION['cus_id'])) {
                echo '<script> alert("Ban phai dang nhap moi duoc thanh toan!");</script>';
                include '../view/website/login.php';
            } else {
                $total = get_subtotal();
                $o = new Order();
                $orderId = $o->CreateOder($_SESSION['cus_id'][0], $total);
                $_SESSION['oder_id'] = $orderId;
                $_SESSION['productId'] = $productId;
                
                
                foreach ($_SESSION['cart'] as $productId => $item) {
                    $o->insertOderDetail($orderId, $productId, $item['cost'], $item['qty'], $item['total']);
                    $total+=$item['total'];
                }
                $o->updateOderTotal($orderId, $total);
                include '../view/website/order.php';
            }
            break;
            
            case "Cancel":
            unset($_SESSION['cart']);
            include "../view/website/home.php";
            break;
            
            case "logout":
            include "../view/website/logout.php";
            break; 
                break;

     }
?>