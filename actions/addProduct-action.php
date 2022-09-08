<?php
    require "../classes/product.class.php";
    $product = new Product();

    if(isset($_POST['addProduct'])){
        $p_name = $_POST['p_name'];
        $p_price = $_POST['p_price'];
        $p_disprice = $_POST['p_disprice'];
        $p_description = $_POST['p_description'];
       
        // For Image
        $randomNumber = rand(10000, 100000000);
       

        $filename = $_FILES['image']['name'];

        $file = explode('.',$filename);
        $count = count($file);
        $ext = $file[$count-1];
        $imageName = $randomNumber.'.'.$ext;

        if($ext=='jpg'||$ext=='png'||$ext=='gif' ||$ext=='jpeg'){
            move_uploaded_file($_FILES['image']['tmp_name'],'../images/product-images/'.$imageName);
        }
        else{
            echo 'Wrong file type!'.'<br><a href="../admin/add-product.php">Go back!</a>';
        }

        $product->setProductName($p_name);
        $product->setOriginalPrice($p_price);
        $product->setDiscountedPrice($p_disprice);
        $product->setProductDescription($p_description);
        $product->setProductImage($imageName);

        if($product->addProduct())
        {
            header("Location: ../admin/add-product.php?msg=productAdded");
        }
    }
?>