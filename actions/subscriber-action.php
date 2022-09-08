<?php
    include '../classes/subscribe.class.php';
    $subscribe = new Subscribe();

    if(isset($_POST['subscribe-submit'])){
        // Datas from form
        $email = $_POST['subscribe-email'];

        $subscribe->setSubscriberEmail($email);

        
        if($subscribe->addSubscriber())
        {
            header("Location: ../index.php?msg=subscribed");
        }
    }
?>