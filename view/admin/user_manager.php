<?php include 'admin_header.php';?>
<?php include 'sidemenu.php';?>


    <div id="page-wrapper" style="background:#262626;margin-left: -25px;" >

        <div class="container-fluid">
            <div id="main" >
            
            <div class="col-md-12">
                <div style="margin-left: 0px auto;">
                <div class="col-lg-12" >
                    <table width="100%" border="1" class="table table-bordered" >
            
            <?php

    $db = new customer();
    $rs = $db->showUser();
    
    echo "<table width='100%' border='1' class='table table-bordered' class='table_user' style='color: #fff;background-color:#262626;'>";
    echo "<a href='?action=user_add' class='btn btn-success' style='margin-bottom:20px;'>Insert Users</a>"; 
    echo "<tr>";
    echo "<td>UserID</td>";
    echo "<td>FullName</td>";
    echo "<td>Role</td>";
    echo "<td>Gender</td>";
    echo "<td>UserName</td>";
    echo "<td>Password</td>";
    echo "<td>Email</td>";
    echo "<td>Date Of Birth</td>";
    echo "<td>Phone</td>";
    echo "<td>Avata</td>";
    
    echo "</tr>";

//    for ($index = 0; $index < $rs->rowCount(); $index++) {
//            $row = $rs->fetch();
        foreach ($rs as $row){
    
            echo "<tr>";
            echo "<td>".$row['customerId']."</td>";  
            echo "<td>".$row['name']."</td>";
            if($row['role'] == "0")
            {
            echo "<td>Member</td>";
            }
            else
            {
            echo "<td>Admin</td>";
            }
            if($row['gender'] == "1")
            {
            echo "<td>Male</td>";
            }
            else
            {
            echo "<td>Female</td>";
            }
            echo "<td>".$row['username']."</td>"; 
            echo "<td>".$row['pass']."</td>"; 
            echo "<td>".$row['email']."</td>"; 
            echo "<td>".$row['date']."</td>"; 
            echo "<td>".$row['phone']."</td>";
            echo "<td>".$row['avatar']."</td>";

            echo "<td>";
                    echo "<form method='post' action='?action=user_edit&userid=".$row['customerId']."'>";
                    echo "<input type='hidden' name='UserID' value='".$row['customerId']."'/>";
                    echo "<input type='hidden' name='FullName' value='".$row['name']."'/>";
                    echo "<input type='hidden' name='Role' value='".$row['role']."' <p/>";
                    echo "<input type='hidden' name='Gender' value='".$row['gender']."'/>";
                    echo "<input type='hidden' name='UserName' value='".$row['username']."'/>";
                    echo "<input type='hidden' name='Password' value='".$row['pass']."'/>";
                    echo "<input type='hidden' name='Email' value='".$row['email']."'/>";
                    echo "<input type='hidden' name='Date Of Birth' value='".$row['date']."'/>";
                    echo "<input type='hidden' name='Phone' value='".$row['phone']."'/>";
                    echo "<input type='hidden' name='Avata' value='".$row['avatar']."'/>";
                    echo "<input class='btn btn-success' type='submit' value='Edit' action='&userid=".$row['customerId']."'/>";
                    
                    echo '</form>';            
                    
                    
            echo "</td>";  
           echo "<td ><a href='?action=delete_user&userid=".$row['customerId']."' class='btn btn-danger' style='margin-top:15px;'>Delete</a></td>"; 
            
            echo "</tr>";
    
        }
    echo "</table>";
    ?>
            
                    </table>
                </div>
                </div>
            </div>
            
            
        </div>
    <!-- /#page-wrapper -->

    </div>
<!-- /#wrapper -->







<?php include'admin_footer.php';?>
     