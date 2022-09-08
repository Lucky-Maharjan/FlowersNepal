<?php
    $title = "Products";
    if(isset($_GET['msg']) && $_GET['msg'] == 'order-confirm'){
        echo "<script>window.alert('Product Successfully Ordered! Go to your profile for more details!');</script>";
    }
    session_start();
    include_once('includes/header.php');
    require ('classes/product.class.1.php');
    $product = new Product();
    $data = $product->selectAddedProduct();
    
?>
<div class="inner-products">
    <div class="overlay-inner">
    </div>
</div>
<section>
    <section class="about py-5">
        <div class="container py-md-5">
            <div class="about-w3ls-info text-center mx-auto">
                <h3 class="tittle-wthree pt-md-5 pt-3">Available Products</h3>                
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
                    <input class="form-control mb-4" type="text" name="search" placeholder="Search your product here..." id="search">
                </div>
                <div id="here"></div>

            <div class="row">
                <?php foreach ($data as $details) { ?>
                    <div class="col-lg-3 mb-4 d-flex align-items-stretch">
                        <div class="card card-rad mx-auto">
                            <img class="card-img-top img-fluid" style="height: 200px; width: auto;" src="images/product-images/<?php echo $details['p_image']; ?>" alt="Card image cap">
                            <div class="card-body cbody">
                                <h5 class="card-title text-center"><?php echo $details['p_name']; ?></h5>
                                <p class="buton text-center">
                                    <a href="productDetails.php?id=<?php echo $details['p_id']; ?>" class="btn btn-primary mb-2" style="color: #fff !important;"><i class="fas fa-info-circle"></i> Details</a>
                                    <a href="productDetails.php?id=<?php echo $details['p_id']; ?>" class="btn btn-primary mb-2" style="color: #fff !important;"><i class="fas fa-shopping-cart"></i> Buy</a>
                                </p>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>
    <!-- Products End -->
</section>
<?php include_once('includes/footer.php');?>