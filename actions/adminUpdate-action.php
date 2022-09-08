<?php
    session_start();
    require "../classes/admin.class.php";
    $admin = new Admin();

    if(isset($_POST['adminUpdate'])){
        // Datas from form
        $a_id = $_SESSION['admin-id'];
        $username = $_POST['a_username'];
        $password = $_POST['a_password'];
        $email = $_POST['a_email'];
        $contact = $_POST['a_contact'];
        

        $admin->setAdminId($a_id);
        $admin->setAdminUsername($username);
        $admin->setAdminPassword($password);
        $admin->setAdminEmail($email);
        $admin->setAdminContact($contact);

        // $admin->updateProfile($a_id);
        // exit;
        if($admin->updateProfile($a_id))
        {
            header("Location: ../admin/admin.php?msg=adminUpdated");
        }
    }
?>