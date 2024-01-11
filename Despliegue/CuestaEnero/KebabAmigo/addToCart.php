<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = array(); 
    }

    $item = array(
        'photo' => $_POST['productPhoto'],
        'name' => $_POST['productName'],
        'price' => $_POST['productPrice']
    );

    $_SESSION['cart'][] = $item;

 
    $total = 0;
    foreach ($_SESSION['cart'] as $cartItem) {
        $total += $cartItem['price'];
    }

  
    $_SESSION['cart_total'] = $total;

    header("Location: " . $_SERVER["HTTP_REFERER"]);
    exit();
}
?>
