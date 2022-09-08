<?php
    if(!empty($_GET['query'])){
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "flowersnepal";

        $conn = new mysqli($servername, $username, $password, $dbname);
    
        $query = $_GET['query'];
        $sql = "SELECT * FROM `tbl_product` WHERE `p_name` like '%$query%'; ";
        $result =$conn->query($sql);
        while($output = $result->fetch_array()){ ?>
            <a href="productDetails.php?id=<?php echo $output['p_id']; ?>"><?php echo $output['p_name'] . '<br>';?></a>
        <?php
        }
    }
?>

