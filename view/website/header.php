<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Product</title>
<link rel="stylesheet" type="text/css" href="../view/website/style/css.css"/>
<link rel="stylesheet" type="text/css" href="../view/website/style/bootstrap-theme.min.css"/>
<link rel="stylesheet" type="text/css" href="../view/website/style/bootstrap.min.css"/>
<link rel="stylesheet" type="text/css" href=../view/website/css/bootstrap.min.css" rel="stylesheet">
<script type="text/javascript">
            function Show()
            {
                document.getElementById('imgUpload').click();
            }
</script>

</head>

<body>
        
        <!– Begin Menu –>
			<nav class="navbar navbar-default" id="floating_menu">
              <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand" href="#"><img src="../view/website/images/logo2.png" height="35" width="35" /></a>
                </div>
            
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                  <ul class="nav navbar-nav">
                    <li><a href="#">Home <span class="sr-only">(current)</span></a></li>
                    <li class="active"><a href="?action=home">Product</a></li>
                    <li><a href="#">About Us</a></li>
                    
                  </ul>
                  <form class="navbar-form navbar-left" role="search">
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Search product">
                    </div>
                    <button type="submit" class="btn btn-default">Search</button>
                  </form>
                    <ul class="nav navbar-nav navbar-right">
                        <?php
                         if(isset($_SESSION['cus_id']))
                        {
                            $user = $_SESSION['cus_id'];
                            $name =$_SESSION['nAme'];
                            echo '<li><a href="?action=giohang_view"><img src="../view/website/images/cart1.png" height="18px" width="18px"/></a></li>';
                            echo "<li><a href='?action=home'> Xin chào <span>$name</span>!</a></li>";
                            echo '<li><a href="?action=userdetail">Change Info</a></li>';
                            echo '<li><a href="?action=logout">Logout</a></li>';
                        }
                        else
                        {     
                           echo '<li><a href="?action=home">Welcome <span>Guest</span>!</a></li>';
                           echo '<li><a href="?action=login">Login</a></li>';
                           echo '<li><a href="#">Register</a></li>';
                        }
                        
                            ?>    
                    </ul>
                
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->      
        </nav><br /><br />
       
        
        <!– End Menu–>
        
        
        <!-Start Banner-> 
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                  <!-- Indicators -->
                  <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"> </li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                  </ol>

                  <!-- Wrapper for slides -->
                  <div class="carousel-inner" role="listbox">
                    <div class="item active">
                      <img src="../view/website/images/banner3.jpg" alt="...">
                    </div>
                    <div class="item">             
                      <img src="../view/website/images/banner2.jpg" alt="...">
                    </div>
                    <div class="item">             
                      <img src="../view/website/images/banner4.jpg" alt="...">
                    </div>
                    <div class="item">             
                      <img src="../view/website/images/banner1.jpg" alt="...">
                    </div>

                  </div>

                  <!-- Controls -->
                  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
        <!-End Banner->
