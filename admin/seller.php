<?php
   require('../process/secure_admin.php');
   require('../process/config.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet"
        href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css" />
    <link rel="stylesheet" href="../assets/css/adminStyle.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>

    <header>
        <div class="container">
            <div class="row">
                <h2 class="col-md-4 ">
                    <label for="">
                        <span class="las la-bars"></span>
                    </label>
                    Dashboard
                </h2>
                <div class="search-wrapper col-md-4">
                    <span class="las la-search"></span>
                    <input type="Search" placeholder="Search Here" />
                </div>
                <div class="user-wrapper col-md-4">
                    <!-- <img src="pic1.png" width="40px" alt="pic"> -->

                    <div class="col-md-4 ms-auto">
                        <h4>Shova</h4>
                        <small>Admin</small>
                    </div>
                </div>
            </div>

        </div>

    </header>




</body>

<!-- ..........................................Seller table..................................... -->
<div class="container mt-5">

    <body class="recent-flex1">
        <div class="seller">
            <div class="card1">
                <div class="card1-header">
                    <h3>Seller-Details</h3>
                    <button>See all <span class="las la-arrow-right"></span></button>
                </div>
                <div class="card1-body">
                    <table width="100%">
                        <thead>
                            <tr>
                                <td>
                                    Name
                                </td>
                                <td>
                                    Joined date
                                </td>
                                <td>
                                    Gmail
                                </td>
                                <td>
                                    Books sold
                                </td>
                                <td>
                                    Action
                                </td>
                            </tr>
                        </thead>
                        <!-- ----------------------after table heading, now table body -------------------->
                        <tbody>
                            <?php
                                    $sql = "SELECT * FROM user WHERE role='seller'";
                                    $result = mysqli_query($con , $sql);
                                    $sn =1;
                                    while($data = mysqli_fetch_array($result))
                                    {
                                          
                                    
                                ?>
                            <tr>
                                <td><?php echo $sn++; ?></td>
                                <td><?php echo $data['name']; ?></td>
                                <td><?php echo $data['created_at']; ?></td>
                                <td>
                                    <?php echo $data['gmail']; ?>
                                </td>
                                <td><?php echo $data['book_sold']; ?></td>
                                <td>
                                    <div class="btn-main">
                                        <!-- <button class="btn-button">Delete</button>
                                                 <button class="btn-button">Update</button> -->
                                        <button class="btn btn-danger">Delete</button>
                                        <button class="btn btn-success">Update</button>
                                    </div>
                                </td>
                            </tr>
                            <?php
                                    }
                                    ?>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
</script>

</body>

</html>