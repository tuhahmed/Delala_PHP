<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define("DB_SERVER", "triosdevelopers.com");
define("DB_USERNAME", "T.M.Ahmed");
define("DB_PASSWORD", "n79s4RxF");
define("DB_NAME", "tmahmeddb");
 
/* Attempt to connect to MySQL database */
$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
 if(!$conn) {
        die("Error". mysqli_connect_error()); 
    } 

    
?>