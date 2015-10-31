<?php
    /*
     * Class used to create a DB connection object
    */
    class Model{
        public $db_connection  =   null;
        function __construct(){
            //crete DB connection object 
            $this->db_connection = new PDO("mysql:host=localhost;dbname=".PN_DB_NAME.";charset=utf8", PN_DB_USERNAME, PN_DB_PASSWORD);
            $this->db_connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->db_connection->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        }
    }
