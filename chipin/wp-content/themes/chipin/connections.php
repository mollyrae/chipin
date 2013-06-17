<?php 

    define('DB_HOST', 'localhost');
    define('DB_USER', 'root');
    define('DB_PASSWORD', 'root');
    define('DB_NAME', 'chipin');
    $connection = mysql_pconnect(DB_HOST, DB_USER, DB_PASSWORD) or die("unable to connect to table: ".mysql_error());
    mysql_select_db(DB_NAME) or die("unable to connect to table: ".mysql_error());