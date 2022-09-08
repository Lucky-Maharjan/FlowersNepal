<?php
    require "../classes/admin.class.php";
    $admin = new Admin();

    $a_id = $_GET['delete'];
    

    $admin->setAdminId($a_id);
    // $user->deleteUser($a_id);
    // exit;
    if($admin->deleteAdmin($a_id))
    {
        header("Location: ../admin/view-admins.php?msg=adminDeleted");
    }else{
        echo "Something Went Wrong!";
    }
?>