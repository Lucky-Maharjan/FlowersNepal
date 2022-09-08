<?php
    session_start();
    require "../classes/user.class.php";
    $user = new User();
    $userID = $_SESSION['user-id'];
    $data = $user->selectUser($userID);

    $oldDbPassword = $data[0]['password'];


    if(isset($_POST['changePassword'])){
        // Datas from form
        $u_id = $_SESSION['user-id'];

        $oldPassword = $_POST['oldPassword'];
        $newPassword = $_POST['newPassword'];
        $reNewPassword = $_POST['reNewPassword'];

        $user->setUserId($u_id);
        $user->setUserPassword($newPassword);
        $user->setUserRepassword($reNewPassword);

        // $user->updatePassword($u_id);
        // exit;
        if($oldDbPassword === $oldPassword){
            if($newPassword != $reNewPassword)
            {
                header("Location: ../user/change-password.php?msg=passwordNotMatch");
            }
            else{
                $user->updatePassword($u_id);
                header("Location: ../user/user.php?msg=passwordUpdated");
            }
        }
        else{
            header("Location: ../user/change-password.php?msg=wrongOldPassword");
        }
    }
?>