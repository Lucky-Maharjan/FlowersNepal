<?php
require ("../includes/dbConnection.php") ;
Class Order{
    private $orderId;
    private $userId;
    private $productId;
    private $orderDate;

    private $connect;

    function __construct(){
        $this->connect = new Connection();
    }

    // Getter and Setter

    // Order ID
    public function getOrderId()
    {
        return $this->orderId;
    }
    public function setOrderId($orderId)
    {
        $this->orderId = $orderId;
    }

    // User ID
    public function getUserId()
    {
        return $this->userId;
    }
    public function setUserId($userId)
    {
        $this->userId = $userId;
    }
    // Product ID
    public function getProductId()
    {
        return $this->productId;
    }
    public function setProductId($productId)
    {
        $this->productId = $productId;
    }

    // Order Date
    public function getorderDate()
    {
        return $this->orderDate;
    }
    public function setorderDate($orderDate)
    {
        $this->orderDate = $orderDate;
    }
    // Add Product into database
    public function placeOrder(){
        $sql = "INSERT INTO `tbl_order`(`o_id`, `u_id`, `p_id`, `date`) VALUES (NULL,'$this->userId','$this->productId','$this->orderDate')";
        // echo $sql; exit;
        return $this->connect->qry($sql);
    }

    // Cancel Order
    public function cancelOrder($o_id){
        $sql = "DELETE FROM `tbl_order` WHERE `o_id` = '$o_id'";
        // echo $sql; exit;
        return $this->connect->qry($sql);
    }
}
?>