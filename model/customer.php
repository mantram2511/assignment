<?php

class customer {
   
    var $customerId = null; 
    var $user = null; 
    var $pass= null;
    var $name= null;
    var $gender = null;
    var $email = null;
    var $phone = null;
    var $date = null;
    var $avatar = "../view/website/images/";
    
    public function __construct() {}
    
    function login($user,$pass){
        $db=new connect();
        $str="SELECT pass FROM customers  WHERE 'user' = '$user' and 'pass' = '$pass'"; 
//        k lấy được dữ liệu
        $r=$db->getInstance($str);
        return $r;
    }
    function check($user)
    {
        $db = new connect();
        $query = "SELECT `pass`,`customerId`,`role`,`username` FROM `customers` WHERE username = '$user'";
        return $db->getList($query);
    }

    function getUserByUserName($name){
        $db = new connect();
        $select = "SELECT * FROM `customers` WHERE `name` = '$name' ";
        $result = $db ->getInstance($select);
        return $result;
    }
    function getUserById($id){
        $db = new connect();
        $select = "SELECT * FROM `customers` WHERE `customerId` = '$id'";
        $result = $db ->getInstance($select);
        return $result;
    }
    function showUser(){
        $db = new connect();
        $select = "select * from `customers`";
        $result = $db ->getList($select);
        return $result;
    }
    function insertUser($id,$name,$role,$gender,$user,$pass,$email,$date,$phone,$avatar){
        $db = new connect();
        $query = "INSERT INTO `customers` (name,role,gender,username,pass,email,date,phone,avatar) values ('$name','$role','$gender','$user','$pass','$email','$date','$phone','$avatar')";
        $result = $db ->exec($query);
        return $result;
    }
    function updateUser($id,$name,$role,$gender,$user,$pass,$email,$date,$phone,$avatar){
        $db = new connect();
        $query = "UPDATE `customers` SET name='$name',role='$role',gender='$gender',username='$user',pass='$pass',email='$email',date='$date',phone='$phone',avatar='$avatar' WHERE customerId='$id'";
        $result = $db ->exec($query);
        return $result;
    }
    
    //Khai báo phương thức xoá tài khoản
           function deleteUser($id)
         {
            $db = new connect();
            $query = "DELETE FROM `customers` WHERE `customerId` = '$id'";
            $db->exec($query);
         }

    public function getCustomerId($pass) 
    { 
        $db = new connect();               
        $select="SELECT `customerId` FROM `customers` where pass='$pass'"; 
        $result = $db->getInstance($select);
        return $result;
    }
    
    function getPass($user)
          {
            $db = new connect();
            $select = "SELECT `pass` FROM `customers` WHERE 'user' = '$user'";
            $result = $db->getList($select);
            return $result;
          }
}

?>
