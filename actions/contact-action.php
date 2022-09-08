<?php
    require "../classes/contact.class.php";
    $contact = new Contact();

    if(isset($_POST['contact-submit'])){
        // Datas from form
        $name = $_POST['contact-name'];
        $email = $_POST['contact-email'];
        $subject = $_POST['contact-subject'];
        $message = $_POST['contact-message'];

        $contact->setContactName($name);
        $contact->setContactEmail($email);
        $contact->setContactSubject($subject);
        $contact->setContactMessage($message);

        // $contact->addContactInformation();
        // exit;
        if($contact->addContactInformation())
        {
            header("Location: ../contact.php?msg=contacted");
        }
    }
?>