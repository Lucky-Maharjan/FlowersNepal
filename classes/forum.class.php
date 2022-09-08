<?php
    require "../includes/dbConnection.php";
    Class Forum extends Connection
    {   
        private $fq_id;
        private $fq_u_name;
        private $fq_question;
        private $fq_date;

        private $fc_id;
        private $fc_u_name;
        private $fc_fq_id;
        private $fc_comment;
        private $fc_date;

        private $connect;

        public function __construct(){
            $this->connect = new Connection();
        }

        // Getter and Setter
        // Forum Question Id
        public function getFqId(){
            return $this->fq_id;
        }
        public function setFqId($fq_id){
            $this->fq_id = $fq_id;
        }
        
        // Forum Question User Name
        public function getFqName(){
            return $this->fq_u_name;
        }
        public function setFqName($fq_u_name){
            $this->fq_u_name = $fq_u_name;
        }

        // Forum Question
        public function getFqQuestion(){
            return $this->fq_question;
        }
        public function setFqQuestion($fq_question){
            $this->fq_question = $fq_question;
        }

        // Forum Question Date
        public function getFqDate(){
            return $this->fq_date;
        }
        public function setFqDate($fq_date){
            $this->fq_date = $fq_date;
        }

        // Forum Comment ID
        public function getFcId(){
            return $this->fc_id;
        }
        public function setFcId($fc_id){
            $this->fc_id = $fc_id;
        }

        // Forum Comment User's Name
        public function getFcName(){
            return $this->fc_u_name;
        }
        public function setFcName($fc_u_name){
            $this->fc_u_name = $fc_u_name;
        }

        // Forum Question's ID
        public function getFcFqId(){
            return $this->fc_fq_id;
        }
        public function setFcFqId($fc_fq_id){
            $this->fc_fq_id = $fc_fq_id;
        }

        // Forum Comment
        public function getFcComment(){
            return $this->fc_comment;
        }
        public function setFcComment($fc_comment){
            $this->fc_comment = $fc_comment;
        }

        // Forum Comment
        public function getFcDate(){
            return $this->fc_date;
        }
        public function setFcDate($fc_date){
            $this->fc_date = $fc_date;
        }

        // Insert Question Into Database
        public function postQuestion(){
            $sql = "INSERT INTO `tbl_forum_question`(`fq_id`, `u_name`, `question`, `date`) VALUES (NULL, '$this->fq_u_name', '$this->fq_question', '$this->fq_date')";
            return $this->connect->qry($sql);
        }
        
        public function postComment(){
            $sql = "INSERT INTO `tbl_forum_comment`(`fc_id`, `u_name`, `fq_id`, `comment`, `date`) VALUES 
            (NULL, '$this->fc_u_name', '$this->fc_fq_id', '$this->fc_comment', '$this->fc_date')";
            return $this->connect->qry($sql);
        }

        // Show all Questions
        public function selectQuestions(){
            return $this->connect->getData("SELECT * FROM `tbl_forum_question`");
        }

        // Show respective comments
        public function selectRespectiveComments($fq_id){
            $sql = "SELECT * FROM tbl_forum_comment WHERE `fq_id` = $fq_id";
            // echo $sql; exit;
            return $this->connect->qry($sql);
        }
    }
?>