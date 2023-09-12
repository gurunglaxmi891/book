<?php
   require('process./config.php');
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Title</title>
</head>
<body>
        <?php

        if(isset($_GET['oid']) && isset($_GET['amt']) && isset($_GET['refId']))
        {
            $product_id = $_GET['oid'];
            $total_amount = $_GET['amt'];
            $unique_esewa_id = $_GET['refId'];

            $sql = "SELECT * FROM category WHERE id='$product_id' ";
            $result = mysqli_query($con , $sql);
            if($result)
            {
                $row = mysqli_num_rows($result);
                if($row==1)
                {
                    $order = mysqli_fetch_array($result);

                    $url = "https://uat.esewa.com.np/epay/transrec";
                    $data =[
                        'amt'=> $order['price'],
                        'rid'=> $unique_esewa_id,
                        'pid'=> $order['id'],
                        'scd'=> 'EPAYTEST'
                    ];

                        $curl = curl_init($url);
                        curl_setopt($curl, CURLOPT_POST, true);
                        curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
                        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
                        $response = curl_exec($curl);
                        // if($response=="Success")
                        // {
                           
                            $sql = "UPDATE booking SET status=1 WHERE book_id='$product_id' ";
                            $result = mysqli_query($con , $sql);
                            header('Location:after_payment.html');
                        // }
                        curl_close($curl);
                }
            }
        }
        ?>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>