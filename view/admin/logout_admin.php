<?php include 'admin_header.php';?>
<?php include 'sidemenu.php';?>


    <div id="page-wrapper">

        <div class="container-fluid">

<?php
//        if (isset($_SESSION['cus_id'])){
//        $_SESSION = array();
        session_destroy();
        echo "<center>";
        echo "<h3>Chúc mừng bạn đã đăng xuất thành công</h3>";
        echo "<br/>";
        echo "<a href='index.php'>Trở về trang chủ</a>";
//        }
//        else {
//            echo "
//            <center>
//            <h1>Bạn chưa đăng nhập.</h1>
//              <p><a href='?action=login_admin'>Đăng nhập</a> </p>
//            </center>
//              ";
//        }
//        echo "</center>";
?> 
        </div>
    </div>

