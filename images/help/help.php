<?php $title = "Help"; session_start(); include_once('includes/header.php');?>
<style>
    .help li a{
        color: #007bff !important;
    }
</style>
<div class="inner-help">
    <div class="overlay-inner" style="position: relative;">
        <p style="margin: 0; padding: 0;">
            <h1 class="text-center" style="color: #fff; position: absolute; top: 50%; left: 50%; font-size: 50px; margin: 0px 0 0 -198px;">Looking for help?</h1>
        </p>
    </div>
</div>
<section>
    <!-- Help Start -->
    <section class="about py-5">
        <div class="container py-md-5">
            <div class="about-w3ls-info mx-auto">
                <h3 class="tittle-wthree pt-md-5 pt-3 text-center">FAQs!</h3>
                <p class="sub-tittle mt-3 mb-sm-5 mb-4">
                  <p class="h4">Q: How do I order things?</p>
                  <p class="h6">A: You must register an account and login to system.</p>
                </p><hr>
                <p class="sub-tittle mt-3 mb-sm-5 mb-4">
                  <p class="h4">Q: How many days will it take products to be delivered?</p>
                  <p class="h6">A: Customer who chip their orders within 50 km from store should expect their orders within 1-2 days. But who are outside the range should their order 
                  within 4 to 5 days. If you experience any delay in the order, you can contact us immediately and we will help to comfirm your order.</p>
                </p><hr>
                <p class="sub-tittle mt-3 mb-sm-5 mb-4">
                  <p class="h4">Q: How do I Cancel my orders before?</p>
                  <p class="h6">A: After logging into the system, got tyo your view orders. Here you can see cancel button.</p>
                </p><hr>
                <p class="sub-tittle mt-3 mb-sm-5 mb-4">
                  <p class="h4">Q: Who will ship my orders?</p>
                  <p class="h6">A: There are our own staffs for delivering your product. We will send trusted delivery person who will be contacting you before delivering.</p>
                </p><hr>
                <p class="sub-tittle mt-3 mb-sm-5 mb-4">
                  <p class="h4">Q: What is the accumulated delivery fee?</p>
                  <p class="h6">A: The exact rate of elivery fee is Rs. 100.</p>
                </p><hr>
                <p class="sub-tittle mt-3 mb-sm-5 mb-4">
                  <p class="h4">Q: How can I add my own products?</p>
                  <p class="h6">A: Sorry, you cannot add your own products in our store. If you are willing to add your products to our store, you can directly contact us via <a href="contact.php">contact</a> page or you can contact us to our number.</p>
                </p><hr>
                <p class="sub-tittle mt-3 mb-sm-5 mb-4">
                  <p class="h4">Q: How can I get profit adding my product to your store?</p>
                  <p class="h6">A: After your product sample is received, and people orders your product we will inform you about your product and request you to send the ordered product to us and you will receive your product price.</p>
                </p><hr>
            </div>
        </div>
        <div class="container">
            <div class="jumbotron">
                <h1 class="display-5">Welcome to Flowers Nepal! - (Manual)</h1>
                <ul class="help">
                    <li>You can start by clicking on About, Contact, Products, Login or Register </li>
                    <li>Inside <a href="about.php"> About</a> section, you will get to know about us in details and our services</li>
                    <li>Inside <a href="contact.php"> Contact</a> section, you can directly contact us through phone number given or simply filling up the required form fields</li>
                    <li>Inside <a href="products.php"> Product</a> section, you can see all the products that are available in our system. And you can also search for products on search bar.</li>
                </ul>
            </div>
        </div>

        <!-- Help Reistration -->
        <div class="container">
            <div class="jumbotron">
                <h1 class="display-5">User Registration!</h1>
                <ul class="help">
                    <li>You can register your own account in <a href="user-register.php">Register</a> Panel</li>
                    <li>Make sure you fill the fields correctly</li>
                    <li>Once you are registered, you will see this message below.</li>
                    <img src="images/help/reg-success.jpg" class="rounded mx-auto d-block img-fluid">
                    <li>Now click ok and you will be redirected to <a href="user-login.php">Login </a>page.</li>
                </ul>
            </div>
        </div>
        <!-- Help Registration End -->

        <!-- Help Product -->
        <div class="container">
            <div class="jumbotron">
                <h1 class="display-5">Order Product</h1>
                <ul class="help">
                    <li>Go to product tab, and choose product you want using search or you can scroll to the products.</li>
                    <li>Click on "Details" or "Buy"</li>
                    <li>You can see details of the selected product, if you are satisfied with the product then click "Order Now"</li>
                    <li>Else you can always search the product that you want</li>
                    <li>Once you order your product you will be redirected to "Order Processing" section, here you need to be logged in for confirming your order</li>
                    <li>Else you cannot order your required product</li>
                    <li>Click on "Confirm Order" if you want to order selected product</li>
                    <li>After confirming order you will see this alert message as confirmation.</li>
                    <img src="images/help/product-ordered.jpg" class="rounded mx-auto d-block img-fluid">

                </ul>
            </div>
        </div>
        <!-- Help Product End -->

        <!-- Help Login -->
        <div class="container">
            <div class="jumbotron">
                <h1 class="display-5">User Login!</h1>
                <ul class="help">
                    <li>Carefully fill up your email and password. This must be accurate to one which you used while registering.</li>
                    <img src="images/help/login.jpg" class="rounded mx-auto d-block img-fluid">
                    <li>Only if you are a admin you click "Login as Admin" else fill up the fields and submit as user</li>
                    <img src="images/help/user-dashboard.jpg" class="rounded mx-auto d-block img-fluid">
                    <li>Now click on "OK" and you will see your dashboard!</li>
                    <img src="images/help/user-dashboard-1.jpg" class="rounded mx-auto d-block img-fluid">
                    <li>After login, you can see 3 to 4 different menus. You can change your password, View Orders and Ask or Comment question and answers in forum.</li>
                </ul>
            </div>
        </div>
        <!-- Help Login End -->

        <!-- Help Change Password -->
        <div class="container">
            <div class="jumbotron">
                <h1 class="display-5">User Change Password!</h1>
                <ul class="help">
                    <li>You must type correctly your old password</li>
                    <li>New Password and Re-Password must match with each other, else you cannot change your password.</li>
                    <li>After filling up all the fields correctly, click "Update Password"</li>
                    <img src="images/help/change-passoword.jpg" class="rounded mx-auto d-block img-fluid">
                    <li>Now you will see success message as below</li>
                    <img src="images/help/password-success.jpg" class="rounded mx-auto d-block img-fluid">
                    <li>Press "OK" to continue.</li>
                </ul>
            </div>
        </div>
        <!-- Help Change Password -->

        <!-- Help View Order -->
        <div class="container">
            <div class="jumbotron">
                <h1 class="display-5">View Order!</h1>
                <ul class="help">
                    <li>Firstly, login to your account</li>
                    <li>Click on "View Order" on your left side bar</li>
                    <li>You will see all your order like in below image:</li>
                    <img src="images/help/view-order.jpg" class="rounded mx-auto d-block img-fluid">
                    <li>You can cancel your order by clicking on "Cancel Order" and view your bill clicking on "View Bill"</li>
                    <li>If you want to cancel order press "OK" after clicking on "Cancel Order"</li>
                    <li>If you want to see and print your bill, click "View Bill"> "Print"</li>
                    <li>View Bill</li>
                    <img src="images/help/view-bill.jpg" class="rounded mx-auto d-block img-fluid">
                    <li>Print Bill</li>
                    <img src="images/help/print-bill.jpg" class="rounded mx-auto d-block img-fluid">
                    <li>For Printing bill, you should install a printer. Else bill is saved in pdf format, later you can print on your own.</li>
                </ul>
            </div>
        </div>
        <!-- Help View Order -->

        <!-- ADMIN Login-->
        <div class="jumbotron">
            <div class="container">
                <h1 class="display-5">Admin Login</h1>
                <ul class="help">
                    <li>If you are admin, then navigate yourself to login in menu bar</li>
                    <li>Scroll down a bit and you will see "Login as Admin" and click on it</li>
                    <li>Now enter your username and password as provided by "Super Admin"</li>
                    <li>Then you can successfully logged in as admin.</li>
                </ul>
            </div>
        </div>
        <!-- ADMIN Login -->

        <!-- ADMIN -->
        <div class="container">
            <div class="jumbotron">
                <h1 class="display-5">Admin Dashboard</h1>
                <ul class="help">
                    <li>Once you logged in, you will see admin's dashboard like below!</li>
                    <img src="images/help/admin-dashboard.jpg" class="rounded mx-auto d-block img-fluid">
                    <li>You can see following menu on your left side bar:
                        <ul>
                            <li>Add Admin</li>
                            <li>View Registered Users</li>
                            <li>View Registered Admins</li>
                            <li>Add Product</li>
                            <li>View Added Product</li>
                            <li>View Contact</li>
                            <li>View Subscribers</li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <!-- ADMIN -->

        <!-- ADMIN -->
        <div class="container">
            <div class="jumbotron">
                <h1 class="display-5">Admin Add Admin</h1>
                <ul class="help">
                    <li>You can add admin easily by</li>
                    <li>Click on "Add Admin"</li>
                    <li>Carefully enter username, password, email and contact number</li>
                    <li>And click on "Add New Admin"</li>
                    <li>New admin is successfully assigned</li>
                </ul>
            </div>
        </div>
        <!-- ADMIN -->

        <!-- ADMIN View User-->
         <div class="container">
            <div class="jumbotron">
                <h1 class="display-5">Admin View User</h1>
                <ul class="help">
                    <li>You can view all the registered user</li>
                    <li>Click on "View Registered Users"</li>
                    <li>After clicking, you can see all the users currently registered to the system, on right side you can see edit and delete</li>
                    <li>You can edit user's profile as well as delete user out of the system</li>
                </ul>
            </div>
        </div>
        <!-- ADMIN -->

        <!-- ADMIN View Admin-->
        <div class="container">
            <div class="jumbotron">
                <h1 class="display-5">Admin View Registered Admin</h1>
                <ul class="help">
                    <li>You can view all the registered admin</li>
                    <li>Click on "View Registered Admins"</li>
                    <li>After clicking, you can see all the admins currently registered to the system, on right side you can see delete</li>
                    <li>You can delete admin's profile from the system</li>
                </ul>
            </div>
        </div>
        <!-- ADMIN View Admin End -->

        <!-- ADMIN Add Product-->
        <div class="container">
            <div class="jumbotron">
                <h1 class="display-5">Admin Add Product</h1>
                <ul class="help">
                    <li>You can add products by</li>
                    <li>Click on "Add Product" on the left side bar</li>
                    <li>After clicking, you will see the form fields</li>
                    <li>Carefully fill all the empty fields and it will look like this image below:</li>
                    <img src="images/help/add-product.jpg" class="rounded mx-auto d-block img-fluid">
                    <li>And now click "Add Product"</li>
                    <li>You can see the added product in <a href="products.php">Products</a> section of the system</li>
                </ul>
            </div>
        </div>
        <!-- ADMIN Add Product End -->

         <!-- ADMIN View Added Products-->
         <div class="container">
            <div class="jumbotron">
                <h1 class="display-5">Admin View Added Products</h1>
                <ul class="help">
                    <li>You can view all the Added Products</li>
                    <li>Click on "View Added Product"</li>
                    <li>After clicking, you can see all the products availabe in the system. Also you can edit and delete the required products.</li>
                    <li>Clicking on "Edit", you get to update name, price, discounted price and description of the selected product. </li>
                    <li>Clicking on "Delete", you get to delete the selected product after clicking on "OK" on alert message.</li>
                </ul>
            </div>
        </div>
        <!-- ADMIN View Added Products End -->

        <!-- ADMIN View Contact -->
        <div class="container">
            <div class="jumbotron">
                <h1 class="display-5">Admin View Contact</h1>
                <ul class="help">
                    <li>You can view all the Contact</li>
                    <li>Click on "View Contact"</li>
                    <li>After clicking, you can see all the contacts messages that the user had sent to the system and on right side you can see delete</li>
                    <li>You can delete the required contact messages from the system if you want</li>
                </ul>
            </div>
        </div>
        <!-- ADMIN View Contact End -->

        <!-- ADMIN View Subscribers -->
        <div class="container">
            <div class="jumbotron">
                <h1 class="display-5">Admin View Subscribers</h1>
                <ul class="help">
                    <li>You can view all the Subscribers</li>
                    <li>Click on "View Subscribers"</li>
                    <li>After clicking, you can see all the Subscribers that the user had subscribed to the system and on right side you can see delete</li>
                    <li>You can delete the required Subscribers email from the system if you want.</li>
                </ul>
            </div>
        </div>
        <!-- ADMIN View Subscribers End -->

    </section>
    <!-- Help End -->
</section>
<?php include_once('includes/footer.php');?>
