<?php
   
 $server = "localhost";
 $username = "root";
 $password = "";
 $db = "spca_db";


 if(!$conn = mysqli_connect($server, $username, $password, $db))
 {
    die("failed to connect to database!");
 }

?> 