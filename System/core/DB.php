<?php
    namespace System\core;
    class DB  
    {
        public static function mysqlConnect()
        {   
            $host = "localhost:33060";         
            $user = "root";
            $password = "";        
            $database = "sendmes";
            return mysqli_connect($host, $user, $password, $database);
            //mysqli_connect( "localhost:33060", "root" "", "sendmes");
        }
    }   
?>