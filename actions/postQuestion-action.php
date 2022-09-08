<?php
    session_start();
    include '../classes/forum.class.php';
    $forum = new Forum();
    $userName = $_SESSION['user-name'];
    $date = date("Y-m-d h:i:s");

    if(isset($_POST['postQuestion'])){
        // Datas from form

        $question = $_POST['forum-question'];

        $forum->setFqName($userName);
        $forum->setFqQuestion($question);
        $forum->setFqDate($date);

        
        if($forum->postQuestion())
        {
            header("Location: ../user/forum.php?msg=questionAdded");
        }
    }
?>