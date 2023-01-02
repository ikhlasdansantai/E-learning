<?php
    function connect()
     {
     $dbhost = "localhost";
     $dbuser = "root";
     $dbpass = "";
     $db = "penyimpanan";
     $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
     
     return $conn;
     }
     
    function close_connection($conn)
     {
     $conn -> close();
     }
       
    ?>