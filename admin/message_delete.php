<?php

error_reporting(0);
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "book";
$conn = mysqli_connect($servername,$username,$password,$dbname);
if($conn){
    //echo "Connection ok";
}
else{
    echo "Connection failed".mysqli_connect_error();
}

$id=$_GET['id'];
$query = "DELETE FROM message_view WHERE sn='$id'";
$data=mysqli_query($conn,$query);

if($data)
{
    echo "<script>alert('Record deleted')</script>";
    ?>

<meta http-equiv = "refresh" content = "0; url =http://localhost/books/admin/message.php" />

    <?php
}
else{
    echo "<script>alert('Record not deleted')</script>";
}

?>