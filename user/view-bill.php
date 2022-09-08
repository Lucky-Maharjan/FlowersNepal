<?php
    session_start();
    if(!isset($_SESSION['user-id'])){
        header ('Location: ../login-first');
        exit;
    }
    if(isset($_GET['msg']) && $_GET['msg'] == 'loginTrue'){
        echo "<script>window.alert('Welcome to the dashboard!');</script>";
    }
    if(isset($_GET['msg']) && $_GET['msg'] == 'userUpdated'){
        echo "<script>window.alert('Profile Updated Successfully!');</script>";
    }
    if(isset($_GET['msg']) && $_GET['msg'] == 'passwordUpdated'){
        echo "<script>window.alert('Password Updated Successfully!');</script>";
    }
    require 'order-list-1.php';
?>
<script></script>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>View Bill | Flowers Nepal</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="assets/css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
</head>
<body>
<script>
    function printContent(el){
    var restorepage = $('body').html();
    var printcontent = $('#' + el).clone();
    $('body').empty().html(printcontent);
    window.print();
    $('body').html(restorepage);
    }
</script>

<div class="wrapper">

    <?php include ('user-sidebar.php'); ?>

    <div class="main-panel">
		
    <?php include ('user-nav.php'); ?>

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                <div class="col-lg-12">
                    <div class="card" id="bill" style="padding: 10px 25px 60px;">
                        <div class="card-body">
                        <h3 class="text-center mb-4">--- Product's Bill ---</h3>
                            <p>Name: <?php echo $output['fname'] . " " . $output['lname'] ; ?><span></span></p>
                            <p>Contact: <?php echo $output['e_mail']; ?><br></p>
                            <p>Contact: <?php echo $output['telephone']; ?><br></p>
                            <p>Address: <?php echo $output['address']; ?><br></p>
                            <p>Ordered Date: <?php echo $output['date']; ?><br></p>
                            <p>Payment Method: Cash on Delivery </p>
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
                                        <th scope="row" class="text-center"><?php echo $output['p_name'] . "<br>" ;?><img style="height: 150px; width: auto;" src="../images/product-images/<?php echo $output['p_image']; ?>"></th>
                                        <td>1</td>
                                        <td>Rs. <?php echo $output['p_disprice']; ?></td>
                                        <td>Rs. <?php echo $output['p_disprice']; ?></td>
                                    </tr>
                                    <tr>
                                        <th colspan="3" scope="row" class="text-right">Sub Total:</th>
                                        <td>Rs. <?php echo $output['p_disprice']; ?></td>
                                    </tr>
                                    <tr>
                                        <th colspan="3" scope="row" class="text-right">Flat Shipping Rate:</th>
                                        <td>Rs. <?php echo $p = 100; ?></td>
                                    </tr>
                                    <tr>
                                        <th colspan="3" scope="row" class="text-right">Total:</th>
                                        <td>Rs. <?php echo $output['p_disprice'] + $p; ?></td>
                                    </tr>
                                </tbody>
                            </table>
                            <p style="float:right;">
                            <button class="btn btn-primary" id="print" onclick="printContent('bill');" >Print</button>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>


        <footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">
                    <ul>
                        <li>
                            <a href="../index.php">
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="../products.php">
                                Product
                            </a>
                        </li>
                        <li>
                            <a href="../contact.php">
                                Contact
                            </a>
                        </li>
                    </ul>
                </nav>
                <p class="copyright pull-right">
                    &copy; <script>document.write(new Date().getFullYear())</script> Flowers Nepal
                </p>
            </div>
        </footer>

    </div>
</div>


</body>

    <!--   Core JS Files   -->
    <script src="assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Charts Plugin -->
	<script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>

	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	<script src="assets/js/demo.js"></script>

</html>
