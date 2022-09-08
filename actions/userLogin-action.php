<?php
    require "../classes/user.class.php";
    $user = new User();

    if(isset($_POST['userLogin'])){
        // Datas from form
        $email = $_POST['email'];
        $password = $_POST['password'];

        $user->setUserEmail($email);
        $user->setUserPassword($password);

        
        if($user->userLogin())
        {
            header("Location: ../user/user.php?msg=loginTrue");
        }
    }
?>