<?php include "../view/website/header.php";?>
  
<?php
            $users = new customer();
            $user = $users ->getUserByUserName($_SESSION['username']);
            echo '<h1>Cập nhật thông tin thành viên</h1>';
?>

        <div id="main">
            
            <div class="col-md-12">
                <form method="POST" enctype="multipart/form-data" action='?action=users_update_ok'>
                    <table>
                    <?php if(isset($users)):?>
                    <tr>
                        <td>
                            <label for="txtId">UserId</label>
                        </td>
                        <td>
                            <input type="text" name="txtId" id="txtId"
                                   <?php if(isset($users)) echo "value='".$user['customerId']."'"?>
                                   />
                        </td>
                    </tr>
                    <?php endif; ?>
                    
                    <tr>
                        <td>
                            <label for="txtUser">UserName</label>
                        </td>
                        <td>
                            <input type="text" name="txtUser" id="txtUser"
                                   <?php if(isset($users)) echo "value='".$user['username']."'"?>
                                   />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="txtPass">Password:</label>
                        </td>
                        <td>
                            <input type="password" name="txtPass" id="txtPass"
                                   <?php if(isset($users)) echo "value='".$user['pass']."'"?>
                                   />
                        </td>
                    </tr>
                    <?php if(!isset($users)):?>
                    <tr>
                        <td>
                            <label for="txtConfirmPass">Confirm Password:</label>
                        </td>
                        <td>
                            <input type="password" name="txtConfirmPass" id="txtConfirmPass"/>
                        </td>
                    </tr>
                    <?php endif; ?>
                    <tr>
                        <td>
                            <label for="txtFullname">Full Name</label>
                        </td>
                        <td>
                            <input type="tect" name="txtFullname" id="txtFullname"
                                   <?php if(isset($users)) echo "value='".$user['name']."'"?>
                                   />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Sex:
                        </td>
                        <td>
                            <input type="radio" name="rdbGender" id="rdbMale" value="1"
                                   <?php
                                        if(isset($users))
                                            if($user['gender']==1)
                                                echo "checked='checked'";
                                   ?>
                                   />
                            <label for="rdbMale">Male</label>
                            <input type="radio" name="rdbGender" id="rdbFeMale" value="0"
                                   <?php
                                        if(isset($users))
                                            if($user['gender']==0)
                                                echo "checked='checked'";
                                   ?>
                                   />
                            <label for="rdbMale">Female</label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="txtEmail">Email</label>
                        </td>
                        <td>
                            <input type="text" name="txtEmail" id="txtEmail"
                                   <?php if(isset($users)) echo "value='".$user['email']."'"?>
                                   />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="txtDateofBirth">Date of Birth:</label>
                        </td>
                        <td>
                            <input type="text" name="txtDateoBirth" id="txtDateofBirth"
                                   <?php if(isset($users)) echo "value='".$user['date']."'"?>
                                   />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="txtTelephone">Telephone:</label>
                        </td>
                        <td>
                            <input type="text" name="txtTelephone" id="txtTelephone"
                                   <?php if(isset($users)) echo "value='".$user['phone']."'"?>
                                   />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="txtAvatar">Avatar</label>
                        </td>
                        <td>
                            <input type="text" value="<?php if(isset($users)) echo $user['avatar']?>" name="avtlink" hidden/>
                            <input type="file" name="imgUpload" id="imgUpload" <?php if(isset($users)) echo "../view/website/images/".$user['avatar']?>/>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <input type="submit" name="submit_user" value="Submit"/>
                            <input type="submit" name="delete_user" value="Delete"/>
                            <input type="reset" name="reset_user" value="Reset"/>
                        </td>
                    </tr>
                </table>
            </form>
            
            </div>
            
        </div>

                



<?php include "../view/website/footer.php";?>
        
        
