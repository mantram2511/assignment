<?php include "../view/website/header.php";?>

<?php
        if (isset($_SESSION['cus_id'])){
        $_SESSION = array();
        session_destroy();
        echo "<center>";
        echo "<h3>Chúc mừng bạn đã đăng xuất thành công</h3>";
        echo "<br/>";
        echo "<a href='?action=home'>Trở về trang chủ</a>";
        }
        else {
            echo "
            <center>
            <h1>Bạn chưa đăng nhập.</h1>
              <p><a href='?action=login'>Đăng nhập</a> </p>
            </center>
              ";
        }
        echo "</center>";
?> 
<?php include "../view/website/footer.php";?>