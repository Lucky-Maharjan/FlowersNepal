<?php 
if(!isset($_SESSION['admin-id'])){
    header ('Location: ../login-first');
    exit;
}
?>
<div class="sidebar" data-color="blue" data-image="assets/img/sidebar-5.jpg">

     <!--   you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple" -->


    <div class="sidebar-wrapper">
        <div class="logo">
            <a href="http://www.devish.com.np" class="simple-text">
                Flowers Nepal
            </a>
        </div>

        <ul class="nav">
            <li>
                <a href="admin.php">
                    <i class="pe-7s-user"></i>
                    <p>Admin Profile</p>
                </a>
            </li>
            <li>
                <a href="add-admin.php">
                    <i class="pe-7s-add-user"></i>
                    <p>Add Admin</p>
                </a>
            </li>
            <li>
                <a href="view-users.php">
                    <i class="pe-7s-note2"></i>
                    <p>View Registered Users</p>
                </a>
            </li>
            <li>
                <a href="view-admins.php">
                    <i class="pe-7s-smile"></i>
                    <p>View Registered Admins</p>
                </a>
            </li>
            <li>
                <a href="add-product.php">
                    <i class="pe-7s-news-paper"></i>
                    <p>Add Product</p>
                </a>
            </li>
            
            <li>
                <a href="view-product.php">
                    <i class="pe-7s-cash"></i>
                    <p>View Added Product</p>
                </a>
            </li>
            <li>
                <a href="view-contact.php">
                    <i class="pe-7s-science"></i>
                    <p>View Contact</p>
                </a>
            </li>
            <li>
                <a href="view-order.php">
                    <i class="pe-7s-cart"></i>
                    <p>View All Orders</p>
                </a>
            </li>
            <li>
                <a href="view-subscribers.php">
                    <i class="pe-7s-bell"></i>
                    <p>View Subscribers</p>
                </a>
            </li>
        </ul>
    </div>
</div>