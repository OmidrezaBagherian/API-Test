<?php
    class Connection extends PDO{
        public function __construct(){
            $serverName = "localhost";
            $username = "root";
            $password = "";
            $databaseName = "myblog";

            parent::__construct('mysql:host='.$serverName.';dbname='.$databaseName.'',$username,$password);
            $this->query("SET CHARACTER SET utf8");
            $this->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            $this->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
        }
    }
?>