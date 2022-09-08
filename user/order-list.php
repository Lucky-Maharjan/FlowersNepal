<?php
    $userID = $_SESSION['user-id'];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "flowersnepal";

    $conn = new mysqli($servername, $username, $password, $dbname);

    $sql = "SELECT o.o_id, u.u_id, u.fname, u.lname, u.e_mail, u.telephone, u.address, p.p_name, p.p_description, p.p_price, p.p_disprice, p.p_image
    FROM tbl_order o, tbl_register_user u, tbl_product p
    WHERE o.u_id = u.u_id AND o.p_id = p.p_id AND u.u_id = $userID
    ORDER BY o.o_id;";
    $result =$conn->query($sql);
    // $output = $result->fetch_assoc();
?>