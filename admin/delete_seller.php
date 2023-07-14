<?php
    require('../process/secure_admin.php');
    require('../process/config.php');

    if(isset($_GET['id']))
    {
        $id = $_GET['id'];
        $sql = "DELETE FROM user WHERE id='$id'";
        $result = mysqli_query($con , $sql);
        if($result)
        {
            header('Refresh:1 , url=./seller.php ');
        }
    }
   
?>