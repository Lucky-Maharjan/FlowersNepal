<?php
    require "../includes/dbConnection.php";
    Class Admin extends Connection
    {   
        private $a_id;
        private $a_username;
        private $a_password;
        private $a_email;
        private $a_contact;

        private $connect;

        public function __construct(){
            $this->connect = new Connection();
        }

        // Getter and Setter
       
        // Admin ID
        public function getAdminId(){
            return $this->a_id;
        }
        public function setAdminId($a_id){
            $this->a_id = $a_id;
        }

        // Admin Username
        public function getAdminUsername(){
            return $this->a_username;
        }
        public function setAdminUsername($a_username){
            $this->a_username = $a_username;
        }

        // Admin Password
        public function getAdminPassword(){
            return $this->a_password;
        }
        public function setAdminPassword($a_password){
            $this->a_password = $a_password;
        }

        // Admin Email
        public function getAdminEmail(){
            return $this->a_email;
        }
        public function setAdminEmail($a_email){
            $this->a_email = $a_email;
        }

        // Admin Contact
        public function getAdminContact(){
            return $this->a_contact;
        }
        public function setAdminContact($a_contact){
            $this->a_contact = $a_contact;
        }
        
        // Admin Login
        public function adminLogin()
        {
            $row = $this->connect->getData("SELECT * FROM `tbl_admin` WHERE `a_username` = '$this->a_username' 
            and `a_password` = '$this->a_password'");
            if(count($row) == 1 )
            {
                session_start();
                $_SESSION['admin-id'] = $row[0]['a_id'];
                $_SESSION['admin-name'] = $row[0]['a_username'];
            }
            else
            {
                die(header ('Location: ../admin-login.php?msg=incorrect'));
            }
            return true;
        }

        // Select Admin
        public function selectAdmin($a_id){
            return $this->connect->getData("SELECT * FROM `tbl_admin` WHERE `a_id` = '$a_id'");
        }

        // Update Admin Profile
        public function updateProfile($a_id){
            $sql = "UPDATE `tbl_admin` SET `a_username`='$this->a_username', `a_password`='$this->a_password', `a_email`='$this->a_email', `a_contact`='$this->a_contact' WHERE `a_id` = '$this->a_id'";
            return $this->connect->qry($sql);
            // echo $sql;
        }

        // Add Admin
        public function addAdmin(){
            $sql = "INSERT INTO `tbl_admin`(`a_id`, `a_username`, `a_password`, `a_email`, `a_contact`) VALUES (NULL, '$this->a_username', '$this->a_password', '$this->a_email', '$this->a_contact')";
            return $this->connect->qry($sql);
        }

        // Select All Registered Admin from database
        public function selectAllAdmin(){
            return $this->connect->getData("SELECT * FROM `tbl_admin`");
        }

        // Delete Selected Admin from Database
        public function deleteAdmin($a_id){
            $sql = "DELETE FROM `tbl_admin` WHERE `a_id` = '$this->a_id'";
            // echo $sql; exit;
            return $this->connect->qry($sql);
        }
    }
?>