<?php
    define("HOSTNAME", "localhost");
    define("USERNAME", "root");
    define("PASSWORD", "");
    define("DATABASE", "minpostel");

    $database_connection = mysqli_connect(HOSTNAME, USERNAME, PASSWORD, DATABASE);
    

    if(!$database_connection){
        die("Connection Failed");
    }

?>