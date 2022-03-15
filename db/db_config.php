<?php
    class DBConfig{
        private $user = "root";
        private $password = "root";
        private $dbname = "users";
        private $host ="localhost";

        public function connect(){
            try{
                $dsn= "mysql:hots=$this->host;dbname=$this->dbname";
                $connection = new PDO($dsn, $this->user, $this->password);
                $connection-> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                // echo "Conexión Exitosa";
                return $connection;
            }
            catch(PDOException $exception){
                echo "Conexión Fallida".$exception->getMessage();
            }
        }
    }
    $clase = new DBConfig();
    $clase->connect();