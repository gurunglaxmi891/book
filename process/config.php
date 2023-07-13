<?php
     $servername = "localhost";
     $username = "root";
     $password = "";
     $database = "book";

     $con = new mysqli($servername , $username , $password , $database);
     if($con)
     {
        // die("Database connection error") . mysqli_connect_error();
        // echo "connection success";
     }
     else{
        die('connection error---->').mysqli_connect_error();
     }
?>