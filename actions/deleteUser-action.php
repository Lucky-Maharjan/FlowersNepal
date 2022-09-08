<?php
    require "../classes/user.class.php";
    $user = new User();

    $u_id = $_GET['delete'];
    

    $user->setUserId($u_id);
    // $user->deleteUser($u_id);
    // exit;
    if($user->deleteUser($u_id))
    {
        header("Location: ../admin/view-users.php?msg=userDeleted");
    }else{
        echo "Something Went Wrong!";
    }
?>