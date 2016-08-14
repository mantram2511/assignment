<?php include 'admin_header.php';?>
<?php include 'sidemenu.php';?>


<div id="main" >
            
            <div class="col-md-12">
                <div style="margin-left: 0px auto;">
                <div class="col-lg-12" style="color: #737373;background-color:#262626;">
                    <table width="100%" border="1" class="table table-bordered">
                        <form method="POST" enctype="multipart/form-data" action='?action=insertProcess'>
                    <table>

                    <tr>
                        <td>
                            <label for="txtId">UserId</label>
                        </td>
                        <td>
                            <input type="text" name="txtId" id="txtId" style="margin-left: 20px"/>
                        </td>
                    </tr>

                    
                    <tr>
                        <td>
                            <label for="txtUser">UserName</label>
                        </td>
                        <td>
                            <input type="text" name="txtUser" id="txtUser" style="margin-left: 20px"/>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="txtPass">Password:</label>
                        </td>
                        <td>
                            <input type="password" name="txtPass" id="txtPass" style="margin-left: 20px"/>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="txtFullname">Full Name</label>
                        </td>
                        <td>
                            <input type="tect" name="txtFullname" id="txtFullname" style="margin-left: 20px"/>
                        </td>
                    </tr>
                    
                    <tr>
                        <td>
                            <span style="margin-left: 20px;margin-top: 15px">Role:</span>
                        </td>
                        <td>
                            <input type="radio" name="rdbRole" id="rdbAdmin" value="1" style="margin-left: 20px"
                                   <?php
                                        if(isset($uSers))
                                            if($uSer['role']==1)
                                                echo "checked='checked'";
                                   ?>
                                   />
                            <label for="rdbadmin">Admin</label>
                            <input type="radio" name="rdbRole" id="rdbUser" value="0" style="margin-left: 20px"/>
                            <label for="rdbUser">User</label>
                        </td>
                    </tr>
                    
                    <tr>
                        <td>
                            <span style="margin-left: 20px;margin-top: 15px">Sex:</span>
                        </td>
                        <td>
                            <input type="radio" name="rdbGender" id="rdbMale" value="1" style="margin-left: 20px"/>
                            <label for="rdbMale">Male</label>
                            <input type="radio" name="rdbGender" id="rdbFeMale" value="0" style="margin-left: 20px"/>
                            <label for="rdbMale">Female</label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="txtEmail">Email</label>
                        </td>
                        <td>
                            <input type="text" name="txtEmail" id="txtEmail" style="margin-left: 20px"/>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="txtDateofBirth">Date of Birth:</label>
                        </td>
                        <td>
                            <input type="date" name="txtDateofBirth" id="txtDateofBirth"  style="margin-left: 20px"/>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="txtTelephone">Telephone:</label>
                        </td>
                        <td>
                            <input type="text" name="txtTelephone" id="txtTelephone" style="margin-left: 20px"/>
                        </td>
                    </tr>
                    
                    <tr>
                        <td>
                            <label for="txtAvatar">Avatar</label>
                        </td>
                        <td>
                            <input type="text" value="<?php if(isset($uSers)) echo $uSer['avatar']?>" name="avtlink" hidden/>
                            <input type="file" name="imgUpload" hidden id="imgUpload"/>
                            <img src="<?php if(isset($uSer)) echo "../view/website/images/".$uSer['avatar']?>" alt="" width="200px" id="ChangeAVT" onclick="Show()" class="point"/>
                        </td>
                    </tr>
                    
                    <tr>
                    
                        <td colspan="2">
                            <input class="btn btn-success" type="submit" name="submit_user" value="Submit"/>
                            <input  class="btn btn-success"type="reset" name="reset_user" value="Reset"/>
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

