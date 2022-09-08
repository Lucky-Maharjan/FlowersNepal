<?php
class Connection
{
    private $host;
    private $user;
    private $password;
    private $database;
    private $connect;

    public function __construct()
    {
        $this->host = "localhost";
        $this->user = "root";
        $this->password = "";
        $this->database = "flowersnepal";
        $this->getConnection();
    }

    public function getConnection()
    {
        $this->connect = new mysqli($this->host,$this->user,$this->password,$this->database);
        if($this->connect->connect_error)
        {
            die("Error:" .$this->connect->error);
        }
        else
        {
            return $this->connect;
        }
    }

    public function qry($sql)
    {
        if($this->connect->query($sql) == FALSE)
        {
            die("Error :". $this->connect->error);
        }
        else
        {
            return true;
        }
    }

    public function getData($sql)
    {
        $data = [];
        $result = $this->connect->query($sql);
        if($result->num_rows > 0)
        {
            while($row = $result->fetch_assoc())
            {
                $data[] = $row;
            }
        }
        else
        {
            echo "No data found";
        }
        return $data;
    }
}