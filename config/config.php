<?php
    define("db_username", "root");
    define("db_host", "localhost");
    define("db_password", "");
    define("db_port", 3306);
    define("db_name", "img_hosting");
    
    $connection = new mysqli(db_host, db_username,  db_password,db_name, db_port) or die;
?>