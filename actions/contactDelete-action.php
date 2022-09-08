<?php
    require "../classes/contact.class.php";
    $contact = new Contact();

    $c_id = $_GET['delete'];
    

    $contact->setContactId($c_id);

    if($contact->deleteContact($c_id))
    {
        header("Location: ../admin/view-contact.php?msg=contactDeleted");
    }else{
        echo "Something Went Wrong!";
    }
?>