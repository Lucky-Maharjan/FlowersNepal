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
    if(isset($_GET['msg']) && $_GET['msg'] == 'canceled'){
        echo "<script>window.alert('Order Successfully Cancelled!');</script>";
    }
    require "../classes/user.class.php";
    $user = new User();
    $userID = $_SESSION['user-id'];
    $data = $user->selectUser($userID);
?>
<script></script>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>User Profile | Flowers Nepal</title>

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

    <?php include ('user-sidebar.php'); ?>

    <div class="main-panel">
		
    <?php include ('user-nav.php'); ?>

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Edit Profile</h4>
                            </div>
                            <div class="content">
                                <form action="../actions/userUpdate-action.php" method="POST">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>First Name</label>
                                                <input type="text" class="form-control" name="fname" placeholder="Company" value="<?php echo $data[0]['fname']; ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Lastname</label>
                                                <input type="text" class="form-control" name="lname" placeholder="Username" value="<?php echo $data[0]['lname']; ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Email address</label>
                                                <input type="email" class="form-control" name="email" placeholder="Email" value="<?php echo $data[0]['e_mail']; ?>">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Telephone</label>
                                                <input type="text" class="form-control" name="telephone" placeholder="Telephone" value="<?php echo $data[0]['telephone']; ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Address</label>
                                                <input type="text" class="form-control" name="address" placeholder="Address" value="<?php echo $data[0]['address']; ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Gender</label>
                                                <input type="text" class="form-control" name="gender" placeholder="Gender" value="<?php echo $data[0]['gender']; ?>">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                    <div class="col-md-4">
                                            <div class="form-group">
                                                <label>City</label>
                                                <input type="text" class="form-control" name="city" placeholder="City" value="<?php echo $data[0]['city']; ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Country</label>
                                                <input type="text" class="form-control" name="country" placeholder="Country" value="<?php echo $data[0]['country']; ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Region</label>
                                                <input type="text" class="form-control" name="region" placeholder="Region" value="<?php echo $data[0]['region']; ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-info btn-fill pull-right" name="userUpdate">Update Profile</button>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card card-user">
                            <div class="image">
                                <img src="../images/bg-overlay.jpg" alt="..."/>
                            </div>
                            <div class="content">
                                <div class="author">
                                     <a href="#">
                                    <img class="avatar border-gray" src="assets/img/faces/face-3.jpg" alt="..."/>

                                      <h4 class="title"><?php echo $data[0]['fname']; ?><br>
                                         <small><?php echo $data[0]['lname']; ?></small><br>
                                         <small><?php echo $data[0]['address']; ?>, <?php echo $data[0]['city']; ?>, <?php echo $data[0]['country']; ?></small><br>
                                         <small><?php echo $data[0]['telephone']; ?></small>
                                      </h4>
                                    </a>
                                </div>
                               
                            </div>
                            <hr>
                            <div class="text-center">
                                <button href="#" class="btn btn-simple"><i class="fa fa-facebook-square"></i></button>
                                <button href="#" class="btn btn-simple"><i class="fa fa-twitter"></i></button>
                                <button href="#" class="btn btn-simple"><i class="fa fa-google-plus-square"></i></button>

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
