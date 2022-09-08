<?php
    require "../classes/subscribe.class.php";
    $subscribe = new Subscribe();

    $s_id = $_GET['delete'];
    

    $subscribe->setSubscriberId($s_id);

    if($subscribe->deleteSubscriber($s_id))
    {
        header("Location: ../admin/view-subscribers.php?msg=subscriberDeleted");
    }else{
        echo "Something Went Wrong!";
    }
?>