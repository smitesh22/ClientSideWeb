<?php
   define('DB_SERVER', 'localhost:3306');
   define('DB_USERNAME', 'root');
   define('DB_PASSWORD', '123');
   define('DB_DATABASE', 'Website');

   $link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
 
// Check connection
    if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
    }
    else{
        echo("Success");
    }
?>
?>