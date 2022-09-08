<?php
    include '../classes/order.class.php';
    session_start();

    $order = new Order();
    $userId = $_SESSION['user-id'];
    $productID = $_GET['id'];
    $date = date("y-m-d h:i:s");

    $order->setUserId($userId);
    $order->setProductId($productID);
    $order->setOrderDate($date);

    if($order->placeOrder())
    {
        header("Location: ../products.php?msg=order-confirm");
    }

?>