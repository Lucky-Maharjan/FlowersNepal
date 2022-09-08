<?php
    require "../includes/dbConnection.php";
    Class Contact extends Connection
    {   
        private $c_id;
        private $c_name;
        private $c_email;
        private $c_subject;
        private $c_message;

        private $connect;

        public function __construct(){
            $this->connect = new Connection();
        }

        // Getter and Setter
        // Contact Id
        public function getContactId(){
            return $this->c_id;
        }
        public function setContactId($c_id){
            $this->c_id = $c_id;
        }

        // Contact Name
        public function getContactName(){
            return $this->c_name;
        }
        public function setContactName($c_name){
            $this->c_name = $c_name;
        }

        // Contact Email
        public function getContactEmail(){
            return $this->c_email;
        }
        public function setContactEmail($c_email){
            $this->c_email = $c_email;
        }

        // Contact Subject
        public function getContactSubject(){
            return $this->c_subject;
        }
        public function setContactSubject($c_subject){
            $this->c_subject = $c_subject;
        }

        // Contact Message
        public function getContactMessage(){
            return $this->c_message;
        }
        public function setContactMessage($c_message){
            $this->c_message = $c_message;
        }

        // Insert contact information into database
        public function addContactInformation(){
            $sql = "INSERT INTO `tbl_contact`(`c_id`, `c_name`, `c_email`, `c_subject`, `c_message`) VALUES (NULL, '$this->c_name', '$this->c_email', '$this->c_subject', '$this->c_message')";
            // echo $sql; exit;
            return $this->connect->qry($sql);
        }

        // Select All Contact from database
        public function selectContact(){
            return $this->connect->getData("SELECT * FROM `tbl_contact`");
        }

        // Delete selected Contact from database
        public function deleteContact($contactId){
            $sql = "DELETE FROM `tbl_contact` WHERE `c_id` = '$this->c_id';";
            // echo $sql; exit;
            return $this->connect->qry($sql);
        }
    }
?>