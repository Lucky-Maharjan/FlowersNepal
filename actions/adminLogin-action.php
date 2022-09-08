<?php
    require "../classes/admin.class.php";
    $admin = new Admin();

    if(isset($_POST['adminLogin'])){
        // Datas from form
        $username = $_POST['a_username'];
        $password = $_POST['a_password'];

        $admin->setAdminUsername($username);
        $admin->setAdminPassword($password);

        
        if($admin->adminLogin())
        {
            header("Location: ../admin/admin.php?msg=loginTrue");
        }
    }
?>