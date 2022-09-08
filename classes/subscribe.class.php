<?php
    require "../includes/dbConnection.php";
    Class Subscribe extends Connection
    {   
        private $s_id;
        private $s_email;

        private $connect;

        public function __construct(){
            $this->connect = new Connection();
        }

        // Getter and Setter
        // Subscriber Id
        public function getSubscriberId(){
            return $this->s_id;
        }
        public function setSubscriberId($s_id){
            $this->s_id = $s_id;
        }

        // Subscriber Email
        public function getSubscriberEmail(){
            return $this->s_email;
        }
        public function setSubscriberEmail($s_email){
            $this->s_email = $s_email;
        }

        // Insert Subscribers into database
        public function addSubscriber(){
            $sql = "INSERT INTO `tbl_subscriber`(`s_id`, `s_email`) VALUES (NULL, '$this->s_email')";
            return $this->connect->qry($sql);
        }

        // Select All Subscriber from database
        public function selectSubscriber(){
            return $this->connect->getData("SELECT * FROM `tbl_subscriber`");
        }

        // Delete selected Subscriber from database
        public function deleteSubscriber($subscriberId){
            $sql = "DELETE FROM `tbl_subscriber` WHERE `s_id` = '$this->s_id';";
            // echo $sql; exit;
            return $this->connect->qry($sql);
        }
       
    }
?>