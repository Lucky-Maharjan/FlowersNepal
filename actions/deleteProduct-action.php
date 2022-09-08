<?php
    require "../classes/product.class.php";
    $product = new Product();

    $u_id = $_GET['delete'];
    

    $product->setProductId($u_id);
    // $product->deleteproduct($u_id);
    // exit;

    if($product->deleteProduct($u_id))
    {
        header("Location: ../admin/view-product.php?msg=productDeleted");
    }else{
        echo "Something Went Wrong!";
    }
?>