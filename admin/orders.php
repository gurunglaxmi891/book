<?php
   require('../process/secure_admin.php');
   require('../process/config.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order</title>

    <link rel="stylesheet"
        href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css" />
    <link rel="stylesheet" href="../assets/css/adminStyle.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

</head>

<!-- ................................    ...................-->

<body>


    <header>
        <div class="container">
            <div class="row ">
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

                    <?php 
                         $id = $_SESSION['id'];
                         $sql = "SELECT * FROM user WHERE id='$id'";
                         $result = mysqli_query($con , $sql);
                         $data = mysqli_fetch_array($result);
                    ?>
                    <div class="col-md-4 ms-auto">
                        <h4><?php echo $data['name']; ?></h4>
                        <small class="text-light">Admin</small>
                    </div>
                </div>

            </div>
        </div>
    </header>










      <!-- order table..................... -->
      <div class="container mt-5">
        <div class="recent-flex3">
          <div class="orders">
            <div class="card3">
              <div class="card3-header">
                <h3 class="m-3">Orders</h3>
                <button class="m-3">See all <span class="las la-arrow-right"></span></button>
              </div>
              <div class="card3-body">
                <table width="100%">
                  <thead> 
                    <tr>
                      <td>S.N</td>
                      <td>Book-name</td>
                      <td>
                        Username
                      </td>
                      <td>
                        Ordered at
                      </td>
                      <td>
                        Payment Method
                      </td>
                      <td>
                        Status
                      </td>
                      <td>
                        Action
                      </td>
                    </tr>
                  </thead>
                  <!-- ----------------------after table heading, now table body -------------------->
                  <tbody>
                  <?php
                                $sql = "SELECT u.username,u.role,book.book_name,bought_at,book.status FROM user u,booking book WHERE  u.username = book.order_by ";
                                $result = mysqli_query($con , $sql);
                                $incre = 1;
                                while($row = mysqli_fetch_array($result))
                                {

                                         
                              ?>
                    <tr>
                      <td><?php echo $incre++; ?></td>
                      <td><?php echo $row['book_name']; ?></td>
                      <td><?php echo $row['username']; ?></td>
                      <td>
                      <?php echo $row['bought_at']; ?>
                      </td>
                      <td><?php echo $row['payment_method']; ?></td>
                      <td><?php echo $row['status']; ?></td>
                      <td><div class="btn-main">
                          <!-- <button class="btn-button">Delete</button>
                          <button class="btn-button">Update</button> -->
                          <a href="./delete_order.php?'$incre'=<?php echo $row[$incre]; ?>" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this order')">Delete</a>
                                        <button class="btn btn-success">Update</button>
                        </div></td>
                    </tr>
                    <?php
                              }
                              ?>


                  </tbody>
                </table>
                <a href="./admin.php" class="btn btn-primary m-3">Back</a>
              </div>
              
            </div>
          </div>
      </div>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>

  
</body>
</html>