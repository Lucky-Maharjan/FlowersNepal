<?php
    session_start();
    // echo $_SESSION['user-id'];
    $title = "Products";
    include_once('includes/header.php');
    require ('classes/product.class.1.php');
    $product = new Product();
    $productID = $_GET['id'];
    // $_SESSION['product-id'] = $_GET['id']; 
    $details = $product->selectProduct($productID);
?>
<div class="inner-products">
    <div class="overlay-inner">
    </div>
</div>
<section>
    <section class="about py-5">
        <div class="container py-md-5">
            <div class="about-w3ls-info text-center mx-auto">
                <h3 class="tittle-wthree pt-md-1 pt-1">Order Processing</h3>                
            </div>
        </div>
    </section>
    <!-- products -->
    <section>
    <style>
        input[type=text] {
            width: 250px;
            display: block;
            transition: width 0.4s ease-in-out;
            border-radius: 32px/50px;
            border-color: #007bff;
        }
        input#search {
            margin: 0 auto;
        }
        input[type=text]:focus {
            width: 100%;
        }
        #here{
            width: 100%;
            height: auto;
            border: 1px solid grey;
            display: none;
        }
        .card{
            border-radius: 0;
            border: none;
            background-color: #f7f7f7;
        }
        .pdd-side{
            margin: 30px 0 30px !important;
            padding: 0 !important;
        }
    </style>
    
        <div class="container">
                <script>
                    $(document).ready(function(e){
                        $("#search").keyup(function(){
                            $("#here").show();
                            var x = $(this).val();
                            $.ajax({
                                type: 'GET',
                                url: 'fetch.php',
                                data: 'query='+x,
                                success: function(data)
                                {
                                    $("#here").html(data);
                                }
                                
                            });
                        });
                    });
                </script>
                <div class="search">
                    <input class="form-control text-center" type="text" name="search" placeholder="Search your product here..." id="search">
                </div>
                <div id="here"> </div>

            <div class="row">
                <div class="col-lg-6 mb-4 d-flex align-items-stretch pdd-side">
                    <div class="card mx-auto">
                        <img class="card-img-top" style="height:500px; width: auto; border-radius: 0;" src="images/product-images/<?php echo $details[0]['p_image']; ?>" alt="Card image cap">
                    </div>
                </div>
                <div class="col-lg-6 d-flex align-items-stretch pdd-side">
                    <div class="card mx-auto w-100">
                        <div class="card-body">
                        <h3 class="text-center mb-4">--- Happy Shopping ---</h3>
                            <table class="table table-bordered">
                                <thead class="text-center">
                                    <tr>
                                        <th scope="col">Product Name</th>
                                        <th scope="col">Quantity</th>
                                        <th scope="col">Unit Price</th>
                                        <th scope="col">Total</th>
                                    </tr>
                                </thead>
                                <tbody class="text-right">
                                    <tr>
                                        <th scope="row" class="text-left"><?php echo $details[0]['p_name']; ?></th>
                                        <td>1</td>
                                        <td>Rs. <?php echo $details[0]['p_disprice']; ?></td>
                                        <td>Rs. <?php echo $details[0]['p_disprice']; ?></td>
                                    </tr>
                                    <tr>
                                        <th colspan="3" scope="row" class="text-right">Sub Total:</th>
                                        <td>Rs. <?php echo $details[0]['p_disprice']; ?></td>
                                    </tr>
                                    <tr>
                                        <th colspan="3" scope="row" class="text-right">Flat Shipping Rate:</th>
                                        <td>Rs. <?php echo $p = 100; ?></td>
                                    </tr>
                                    <tr>
                                        <th colspan="3" scope="row" class="text-right">Total:</th>
                                        <td>Rs. <?php echo $details[0]['p_disprice'] + $p; ?></td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="payment">
                                <form action="#">
                                    <div class="container" style="font-size: 18px; color: #635e5e;">
                                        <h4 class="mb-3">Payment Method:</h4>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="card" name="payment-method" class="custom-control-input" disabled>
                                            <label class="custom-control-label" for="card" style="color:#bbb7b7;"><!--<i style="color:#c38249;" class="far fa-credit-card"></i>--> Credit Card / Debit Card</label>
                                        </div>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="cash" name="payment-method" class="custom-control-input" checked="checked">
                                            <label class="custom-control-label" for="cash"><!--<i style="color:#03a84e;" class="fas fa-money-bill-wave"></i>--> Cash on Delivery</label>
                                        </div>
                                        <?php 
                                            if(isset($_SESSION['user-id'])){ ?>
                                                <a href="actions/productConfirm-action.php?id=<?php echo $details[0]['p_id']; ?>" class="btn btn-primary float-right" style="color: #fff !important;"><i class="fas fa-cart-arrow-down"></i> Confirm Order</a>
                                            
                                           <?php } else{?>
                                            <p class="bg bg-danger text-dark text-center mt-3">Please <a href="user-login.php" class="text-warning">login</a> to order this product!</p>
                                            <?php }?>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Products End -->
</section>
<?php include_once('includes/footer.php');?>