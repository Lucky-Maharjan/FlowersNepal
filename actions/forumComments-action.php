<?php
    session_start();
    include '../classes/forum.class.php';
    $forum = new Forum();
    $date = date("Y-m-d h:i:s");

    if(isset($_POST['postComments'])){
        // Datas from form

        $name = $_POST['loginName'];
        $forumId = $_POST['forumId'];
        $comment = $_POST['forum-comment'];
        $date = date("y-m-d h:i:s");


        $forum->setFcName($name);
        $forum->setFcFqId($forumId);
        $forum->setFcComment($comment);
        $forum->setFcDate($date);

        
        if($forum->postComment())
        {
            header("Location: ../user/forum.php?msg=commentAdded");
        }
    }
?>