<?php
    /* Prosedural 
    $host ="localhost";
    $username = "root";
    $pass = "";
    $db_name = "shop_db";

    $conn=mysqli_connect($host,$username,$pass,$db_name);
  
    
     if(mysqli_connect_error()){ //check if there is an error
         die("Database connection failed". mysqli_connect_error() . mysqli_conect_errno());
     }
    */

    class Database{
        private $host ="localhost";
        private $username = "root";
        private $pass = "";
        private $db_name = "shop_db";

        protected $connection = null;

        public function __construct(){
            $this->connect_db();
        }

        public function connect_db(){
            $this->connection =mysqli_connect(
                $this->host,
                $this->username,
                $this->pass,
                $this->db_name
            );
            /*if($this->connection != null){
                echo "Database connected";
            } else{
                die("Database connection failed". mysqli_connect_error() . mysqli_conect_errno());
            }
            */
            if(mysqli_connect_error()){ //check if there is an error
                die("Database connection failed". mysqli_connect_error() . mysqli_conect_errno());
            }
            
        }
    }

    $database = new Database();

    //$database-connect_db>();
?>