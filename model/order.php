<?php

class Order {
    public function __construct() {
        
    }
    public function CreateOder($customerId, $total){
        $db= new connect();
        $date = new DateTime("now");
        $dateCreate = $date->format("Y-m-d");
        $select = "INSERT INTO `order` values('NULL','$dateCreate','$total','$customerId')";
        $db->exec($select);
        $int = $db->getList("SELECT `orderId` from `order` order by `orderId` DESC limit 1")->fetch();
        
        return $int[0];
    }
    
    function getlistOrder() 
        { 
            $db = new connect();
            $select = "SELECT * FROM `order`";
            $result = $db ->getList($select);
            return $result;
        }  
    function getlistdetailOrder() 
        { 
            $db = new connect();
            $select = "SELECT * FROM `order_detail`";
            $result = $db ->getList($select);
            return $result;
        }      
    
    public function insertOderDetail($oderId,$productId,$productPrice,$quanlity,$total){
        $db = new connect();
        $strQuery = "INSERT INTO `order_detail` values ('$oderId','$productId','$productPrice','$quanlity','$total')";
        $result = $db->exec($strQuery);
    }
     public function updateOderTotal($orderId,$total){
        $db = new connect();
        $strQuery = "UPDATE 'order' SET 'total' = $total WHERE 'orderId' = $orderId";
        $result = $db->exec($strQuery);
    }
    public function getOrder($orderId){
        $db= new connect();
       $select = "SELECT * FROM `order` where orderId = '$orderId'";
        $result = $db->getInstance($select);
        return $result;
    }
    
    public function getOrder1($orderId){
        $db= new connect();
       $select = "SELECT * FROM `order` where orderId = '$orderId'";
        $result = $db->getList($select);
        return $result;
    }
    
    public function getOderDetail($orderId){
        $db= new connect();
//        $select= "select m.`orderId`,`datecreate`,`total`,`customerId`, `productId`, `price`,`quanlity`, `total` from `order_detail` as od inner join `order` as m on od.`orderId`=m.`orderId` WHERE orderId = '$orderId'";
        $select= "SELECT `order`.`orderId`, `datecreate`, `customerId`, `productId`, `price`, `quanlity` FROM `order` INNER JOIN `order_detail` ON `order`.`orderId` = `order_detail`.`orderId` WHERE `order`.`orderId` = '$orderId'";
//        $select= "SELECT order.`orderId`, `datecreate`, `total`, `customerId`, `productId`, `price`, `quanlity`, `total` FROM order INNER JOIN order_detail ON order.`orderId` = order_detail.`orderId` WHERE order.`orderId` = '$orderId'";
        $result = $db->getList($select);
        return $result;
    }
    
    public function getlistOderDetail(){
        $db= new connect();
        $select= "SELECT * FROM `order` full INNER join `order_detail`";
        $result = $db->getList($select);
        return $result;
    }
}

?>
