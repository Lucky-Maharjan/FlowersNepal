<?php
    require "../classes/order.class.php";
    $order = new Order();

    $o_id = $_GET['cancel'];
    

    $order->setOrderId($o_id);

    // $order->cancelOrder($o_id);
    // exit;
    if($order->cancelOrder($o_id))
    {        
        header("Location: ../admin/admin.php?msg=canceled");
    }else{
        echo "Something Went Wrong!";
    }
?>