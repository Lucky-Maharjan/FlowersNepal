<?php
    session_start();
    require "../classes/user.class.php";
    $user = new User();

    // Datas from form
    
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $telephone = $_POST['telephone'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $country = $_POST['country'];
    $region = $_POST['region'];
    $gender = $_POST['gender'];

    
    $user->setUserFname($fname);
    $user->setUserLname($lname);
    $user->setUserEmail($email);
    $user->setUserTelephone($telephone);
    $user->setUserAddress($address);
    $user->setUserCity($city);
    $user->setUserCountry($country);
    $user->setUserRegion($region);
    $user->setUserGender($gender);

    if(isset($_POST['userUpdate'])){
        $u_id = $_SESSION['user-id'];
        $user->setUserId($u_id);

            // $user->updateProfile($u_id);
            
        if($user->updateProfile($u_id))
        {
            header("Location: ../user/user.php?msg=userUpdated");
        }
    }

    if(isset($_POST['adminUserUpdate'])){
        $u_id = $_POST['u_id'];
        $user->setUserId($u_id);

        // $user->updateProfile($u_id);

        if($user->updateProfile($u_id))
        {
            header("Location: ../admin/view-users.php?msg=adminUserUpdated");
        }
    }
?>