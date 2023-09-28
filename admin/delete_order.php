<?php
    require('../process/secure_admin.php');
    require('../process/config.php');

    if(isset($_GET[$incre]))
    {
        $id = $_GET[$incre];
        $sql = "DELETE FROM user WHERE id='$id'";
        $result = mysqli_query($con , $sql);
        if($result)
        {
            header('Location: orders.php');
        }
    }
   
?>