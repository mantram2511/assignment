<?php

function add_item($productID, $quantity) {//
    $pro = new product();
    $pros = $pro->getProductById($productID);

    if (isset($_SESSION['cart'][$productID])) {
        $quantity +=$_SESSION['cart'][$productID]['qty'];
        update_item($productID, $quantity);
        return;
    }

    echo 
    $cost = $pros['productPrice'];
    $total = $cost * $quantity;
    $item = array(
        'name' => $pros['productName'],
        'cost' => $cost,
        'qty' => $quantity,
        'total' => $total,

    );

    $_SESSION['cart'][$productID] = $item;
}

function update_item($productID, $quantity) {
    $quantity = (int) $quantity;
    if ($quantity <= 0) {
        unset($_SESSION['cart'][$productID]);
    } else {
        $_SESSION['cart'][$productID]['qty'] = $quantity;
        $total = $_SESSION['cart'][$productID]['cost'] * $_SESSION['cart'][$productID]['qty'];
        $_SESSION['cart'][$productID]['total'] = $total;
    }
}

function get_subtotal() {
    $subtotal = 0;
    
    foreach ($_SESSION['cart'] as $item) {
        $subtotal += $item['total'];
    }
    $subtotal = number_format($subtotal, 2);
    return $subtotal;
}

?>
