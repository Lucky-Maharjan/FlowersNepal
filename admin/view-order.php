<?php
    session_start();
    if(!isset($_SESSION['admin-id'])){
        header ('Location: ../login-first');
        exit;
    }
    require 'order-list.php';
?>
<script></script>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>View Orders | Flowers Nepal</title>

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

<div class="wrapper">

    <?php include ('admin-sidebar.php'); ?>

    <div class="main-panel">
		
    <?php include ('admin-nav.php'); ?>

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Customer</h4>
                                <p class="category">Ordered Products</p>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
                                    <thead>
                                        <style>th,td{text-align: center;}</style>
                                        <th>ID</th>
                                        <th>Product Image</th>
                                    	<th>Product Name</th>
                                        <th>Customer Name</th>
                                        <th>Customer Email</th>
                                        <th>Address</th>
                                        <th>Customer Telephone</th>
                                        <th>Product Price</th>
                                        <th colspan="2" style="text-align: center;">Action</th>
                                    </thead>
                                    <tbody>
                                        <?php 
                                        $i = 1;
                                        while($output = $result->fetch_assoc()){
                                            // print_r($output);
                                        ?>
                                        <tr>
                                            <td><?php echo $i; ?></td>
                                            <td><img src="../images/product-images/<?php echo $output['p_image']; ?>" style="width:150px; height: 180px;"></td>
                                            <td><?php echo $output['p_name']; ?></td>
                                            <td><?php echo $output['fname']; ?> <?php  echo $output['lname']; ?> </td>
                                            <td><?php echo $output['e_mail']; ?></td>
                                            <td><?php echo $output['address']; ?></td>
                                            <td><?php echo $output['telephone']; ?></td>
                                            <td><?php echo $output['p_disprice']; ?></td>
								            <td><a href="../actions/cancelOrder-actionn.php?cancel=<?php echo $output['o_id']; ?>" class="btn btn-danger" onclick="Javascript: return confirm('Are you sure you want to reject order?');" name="productDelete">Reject Order</a></td>
                                        </tr>
                                    <?php $i++; } ?>
                                    </tbody>
                                </table>

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
