<?php
    require "../classes/product.class.php";
    $product = new Product();

    if(isset($_POST['updateProduct'])){
        $p_id = $_POST['p_id'];
        $p_name = $_POST['p_name'];
        $p_price = $_POST['p_price'];
        $p_disprice = $_POST['p_disprice'];
        $p_description = $_POST['p_description'];

        $product->setProductId($p_id);
        $product->setProductName($p_name);
        $product->setOriginalPrice($p_price);
        $product->setDiscountedPrice($p_disprice);
        $product->setProductDescription($p_description);


        // $product->updateProduct($p_id);
        // exit;
        if($product->updateProduct($p_id))
        {
            header("Location: ../admin/view-product.php?msg=productUpdated");
        }
    }
?>