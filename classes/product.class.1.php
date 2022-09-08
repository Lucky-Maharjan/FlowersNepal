<?php
require ("includes/dbConnection.php") ;
Class Product{
    private $productId;
    private $productName;
    private $originalPrice;
    private $discountedPrice;
    private $description;
    private $productImage;

    private $connect;

    function __construct(){
        $this->connect = new Connection();
    }

    // Getter and Setter
    // Product ID
    // Product Name
    public function getProductId()
    {
        return $this->productId;
    }
    public function setProductId($productId)
    {
        $this->productId = $productId;
    }
    // Product Name
    public function getProductName()
    {
        return $this->productName;
    }
    public function setProductName($productName)
    {
        $this->productName = $productName;
    }

    // Original Price
    public function getOriginalPrice()
    {
        return $this->originalPrice;
    }
    public function setOriginalPrice($originalPrice)
    {
        $this->originalPrice = $originalPrice;
    }

    // Discounted Price
    public function getDiscountedPrice(){
        return $this->discountedPrice;
    }
    public function setDiscountedPrice($discountedPrice)
    {
        $this->discountedPrice = $discountedPrice;  
    }

    // Product Image
    public function getProductImage(){
        return $this->productImage;
    }
    public function setProductImage($productImage)
    {
        $this->productImage = $productImage;  
    }

    // Product Description
    public function getProductDescription(){
        return $this->description;
    }
    public function setProductDescription($description)
    {
        $this->description = $description;  
    }

    // Add Product into database
    public function addProduct(){
        $sql = "INSERT INTO `tbl_product`(`p_id`, `p_name`, `p_image`, `p_description`, `p_price`, `p_disprice`) VALUES (NULL, '$this->productName', '$this->productImage', '$this->description', '$this->originalPrice', '$this->discountedPrice')";
        return $this->connect->qry($sql);
    }

    // Select All Product from database
    public function selectAddedProduct(){
        return $this->connect->getData("SELECT * FROM `tbl_product`");
    }

    // Select Product from database
    public function selectProduct($pro_id){
        return $this->connect->getData("SELECT * FROM `tbl_product` WHERE `p_id` = '$pro_id'");
    }

    // Select Needed Product from database
    public function updateProduct($productId){
        $sql = "UPDATE `tbl_product` SET  `p_name`='$this->productName',`p_price`='$this->originalPrice',`p_disprice`='$this->discountedPrice', `p_description`='$this->description' WHERE `p_id` = '$this->productId'";
        // echo $sql;
        return $this->connect->qry($sql);
    }

    // Delete Selected Product from Database
    public function deleteProduct($productId){
        $sql = "DELETE FROM `tbl_product` WHERE `p_id` = '$this->productId';";
        // echo $sql; exit;
        return $this->connect->qry($sql);
    }
}
?>