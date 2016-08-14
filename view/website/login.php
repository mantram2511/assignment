<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Product</title>

<link rel="stylesheet" type="text/css" href="../view/website/style/normalize_menu.css">
<link rel="stylesheet" type="text/css" href="../view/website/style/style_menu.css">
<script src="../view/website/js/prefixfree.min.js"></script>
</head>

<div class="login">

	<h1>Login</h1>
    <form action="index.php?action=login_process" method="POST">
    	<input type="text" name="user" id="txtuser" placeholder="Username" required="required" />
        <input type="password" name="pass" id="txtpass" placeholder="Password" required="required" />
        <button type="submit" class="btn btn-primary btn-block btn-large" name="login" value="login">Login</button>
        <br/>     
        <button type="submit" class="btn btn-primary btn-block btn-large">Resigter</button>
        <br/>
        <center><input name="remember" type="checkbox" style="width: 13px;">Remember</input></center>
        <div class="login_field">
            <center><p><a href="?action=forgot_password" style="color: gray;">Quên mật khẩu?</a></p></center>
        </div>
        
    </form>
 
<script src="../view/website/js/index.js"></script>
</div>

        