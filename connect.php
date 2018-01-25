<?php
    $host = "localhost";
    $user = "	id4394784_mashka";
    $password = "999333";
    $db = "id4394784_shop";


    $connection = mysqli_connect($host,$user,$password,$db);
    $connection->set_charset("utf8");
     if(!$connection){
        die("Connection failed: " . mysql_error());
    }
?>