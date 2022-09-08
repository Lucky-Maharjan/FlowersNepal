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
    if(isset($_GET['msg']) && $_GET['msg'] == 'wrongOldPassword'){
        echo "<script>window.alert('Please enter your old password correctly!');</script>";
    }
    if(isset($_GET['msg']) && $_GET['msg'] == 'questionAdded'){
        echo "<script>window.alert('Question added to forum!');</script>";
    }
    if(isset($_GET['msg']) && $_GET['msg'] == 'commentAdded'){
        echo "<script>window.alert('Comment added to forum!');</script>";
    }
    require "../classes/forum.class.php";
    $forum = new Forum();
    $userName = $_SESSION['user-name'];
    $userID = $_SESSION['user-id'];
    $result = $forum->selectQuestions();
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Forum | Flowers Nepal</title>

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
    <style>
        /* Forum Comment Submit Button */
        .cmt-submit {
            margin: 10px 0 0;
            float: right;
        }
    </style>
</head>
<body>

<div class="wrapper">

    <?php include ('user-sidebar.php'); ?>

    <div class="main-panel">
		
    <?php include ('user-nav.php'); ?>

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Ask Question</h4>
                            </div>
                            <div class="content">
                                <form action="../actions/postQuestion-action.php" method="POST">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Ask Question</label>
                                                <textarea name="forum-question" class="form-control" cols="5" rows="2" placeholder="Ask Question to other members." required></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary pull-right" name="postQuestion">Post</button>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2"></div>
                </div>
<hr>
                <?php
                    foreach($result as $data){
                ?>
                <div class="row">
                        <div class="col-md-2"></div>
                        <div class="col-md-8">
                            <div class="card">
                                <div class="header">
                                    <h4 class="title">Asked Question</h4>
                                </div>
                                <div class="content">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <h5>Question: <?php echo $data['question']; ?></h5>
                                                
                                                <p>Asked By: <small><?php echo $data['u_name']; ?></small></p>
                                            </div>
                                            <hr>
                                            <?php
                                                $fq_id = $data['fq_id'];
                                                $servername = "localhost";
                                                $username = "root";
                                                $password = "";
                                                $dbname = "flowersnepal";

                                                $commentName = $_SESSION['user-name'];
                                                // Create connection
                                                $conn = new mysqli($servername, $username, $password, $dbname);
                                                // Check connection
                                                if ($conn->connect_error) {
                                                    die("Connection failed: " . $conn->connect_error);
                                                } 

                                                $sql = "SELECT * FROM tbl_forum_comment WHERE `fq_id` = $fq_id";
                                                $results = $conn->query($sql); ?>
                                                <?php while ($row = $results->fetch_array()) { ?>
                                                    <p>Comments</p>
                                                    <p>Answer: <?php echo $row['comment']; ?></p>
                                                    <span>Answered By: <?php echo $row['u_name']; ?></span><br>
                                                  
                                                    <hr>
                                                    <?php
                                                }
                                                ?>
                                            <form class="comment-form" action="../actions/forumComments-action.php" method="POST">
                                                <input type="hidden" name="loginName" value="<?php echo $userName; ?>">
                                                <input type="hidden" name="forumId" value="<?php echo $data['fq_id']; ?>">
                                                <textarea class="form-control" name="forum-comment" id="forum-comment" cols="30" rows="4" placeholder="Comments..." required></textarea>
                                                <input class="btn btn-primary mt-4 cmt-submit" type="submit" name="postComments" value="Submit">
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2"></div>
                    </div>
                <?php
                    }
                ?>
                    

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
                    &copy; <script>document.write(new Date().getFullYear())</script> Flowers Nepal.
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
