<?php
    require "../includes/dbConnection.php";
    Class User extends Connection
    {
        private $u_id;
        private $fname;
        private $lname;
        private $e_mail;
        private $telephone;
        private $address;
        private $city;
        private $country;
        private $region;
        private $gender;
        private $password;
        private $confirm_password;
        
        private $connect;

        function __construct(){
            $this->connect = new Connection();
        }

        // Getter and Setter
        
        // User Id
        public function getUserId(){
            return $this->u_id;
        }
        public function setUserId($u_id){
            $this->u_id = $u_id;
        }

        // First Name
        public function getUserFname(){
            return $this->fname;
        }
        public function setUserFname($fname){
            $this->fname = $fname;
        }

        // Last Name
        public function getUserLname(){
            return $this->lname;
        }
        public function setUserLname($lname){
            $this->lname = $lname;
        }

        // Email
        public function getUserEmail(){
            return $this->e_mail;
        }
        public function setUserEmail($e_mail){
            $this->e_mail = $e_mail;
        }

        // Telephone
        public function getUserTelephone(){
            return $this->telephone;
        }
        public function setUserTelephone($telephone){
            $this->telephone = $telephone;
        }

        // Address
        public function getUserAddress(){
            return $this->address;
        }
        public function setUserAddress($address){
            $this->address = $address;
        }

        // City
        public function getUserCity(){
            return $this->city;
        }
        public function setUserCity($city){
            $this->city = $city;
        }

        // Country
        public function getUserCountry(){
            return $this->country;
        }
        public function setUserCountry($country){
            $this->country = $country;
        }

        // Region
        public function getUserRegion(){
            return $this->region;
        }
        public function setUserRegion($region){
            $this->region = $region;
        }

        // Gender
        public function getUserGender(){
            return $this->gender;
        }
        public function setUserGender($gender){
            $this->gender = $gender;
        }

        // Password
        public function getUserPassword(){
            return $this->password;
        }
        public function setUserPassword($password){
            $this->password = $password;
        }

        // Confirm - Password
        public function getUserRepassword(){
            return $this->confirm_password;
        }
        public function setUserRepassword($confirm_password){
            $this->confirm_password = $confirm_password;
        }

        // Add User into database
        public function registerUser(){
            $sql = "INSERT INTO `tbl_register_user`(`u_id`, `fname`, `lname`, `e_mail`, `telephone`, `address`, `city`, `country`, `region`, `gender`, `password`, `confirm_password`) VALUES (NULL, '$this->fname', '$this->lname', '$this->e_mail', '$this->telephone', '$this->address', '$this->city', '$this->country' , '$this->region', '$this->gender', '$this->password' , '$this->confirm_password')";
            return $this->connect->qry($sql);
        }

        // User Login
        public function userLogin()
        {
            $row = $this->connect->getData("SELECT * FROM `tbl_register_user` WHERE `e_mail` = '$this->e_mail' and `password` = '$this->password'");
            if(count($row) == 1 )
            {
                session_start();
                $_SESSION['user-id'] = $row[0]['u_id'];
                $_SESSION['user-name'] = $row[0]['fname'];
            }
            else
            {
                die(header ('Location: ../user-login.php?msg=incorrect'));
            }
            return true;
        }
        // Select User
        public function selectUser($u_id){
            return $this->connect->getData("SELECT * FROM `tbl_register_user` WHERE `u_id` = '$u_id'");
        }

        // Update User Profile
        public function updateProfile($u_id){
            $sql = "UPDATE `tbl_register_user` SET `fname`='$this->fname',`lname`='$this->lname',`e_mail`='$this->e_mail',`telephone`='$this->telephone',`address`='$this->address',`city`='$this->city',`country`='$this->country',`region`='$this->region',`gender`='$this->gender' WHERE `u_id` = '$this->u_id'";
            // echo $sql; exit;
            return $this->connect->qry($sql);
        }

        
        public function updatePassword($u_id){
            $sql = "UPDATE `tbl_register_user` SET `password` = '$this->password', `confirm_password` = '$this->confirm_password' WHERE `u_id` = '$this->u_id'";
            // echo $sql; exit;
            return $this->connect->qry($sql);
        }

        // Select All Registered Users from database
        public function selectAllUser(){
            return $this->connect->getData("SELECT * FROM `tbl_register_user`");
        }

        // Delete Selected Users from Database
        public function deleteUser($u_id){
            $sql = "DELETE FROM `tbl_register_user` WHERE `u_id` = '$this->u_id'";
            // echo $sql; exit;
            return $this->connect->qry($sql);
        }
    }
?>