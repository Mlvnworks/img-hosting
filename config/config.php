<?php
    define("db_username", "root");
    define("db_host", "containers-us-west-30.railway.app");
    define("db_password", "6Qs6VcXgQqhjLI6LLV2t");
    define("db_port", 6095);
    define("db_name", "railway");
    
    $connection = new mysqli(db_host, db_username,  db_password,db_name, db_port) or die;
?>