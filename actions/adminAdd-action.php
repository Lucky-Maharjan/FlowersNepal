<?php
    require "../classes/admin.class.php";
    $admin = new Admin();

    if(isset($_POST['adminAdded'])){
        // Datas from form
        $username = $_POST['add_username'];
        $password = $_POST['add_password'];
        $email = $_POST['add_email'];
        $contact = $_POST['add_contact'];

        $admin->setAdminUsername($username);
        $admin->setAdminPassword($password);
        $admin->setAdminEmail($email);
        $admin->setAdminContact($contact);

        // $admin->addAdmin();
        // exit;
        if($admin->addAdmin())
        {
            header("Location: ../admin/add-admin.php?msg=adminAdded");
        }
    }
?>