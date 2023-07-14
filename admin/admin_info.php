<?php

   require('../process/secure_admin.php');
   require('../process/config.php');
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet"
        href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/adminStyle.css" />
    <title>Title</title>
    <style>
        .sidebar .sidebar-menu img{
            height: 250px;
            width: 250px;
            border-radius: 50%;
            object-fit: cover;
            object-position: center;
        }
    </style>
</head>

<body>
    <div class="sidebar">
        <div class="sidebar-brand">
            <h2><span class="las">Read-Recycle</span></h2>
        </div>
        <?php
            
        ?>

        <div class="sidebar-menu">
            <ul>
                <li>
                <?php
                        $id = $_SESSION['id'];
                        $sql = "SELECT * FROM user WHERE id='$id' ";
                        $result = mysqli_query($con , $sql);
                        $pic = mysqli_fetch_array($result);
                    ?>
                    <img src="../upload-image/<?php echo $pic['image']; ?>" alt="prfile pic">
                </li>
                <li>
                    <a href="./upload_photo.php?id=<?php echo $_SESSION['id']; ?>" class="text-decoration-none">Upload
                        Picture</a>



                </li>

                <li>
                    <a href="./admin_info.php?id=<?php echo $pic['id']; ?>" class="text-decoration-none">Admin info</a>

                </li>
                <li>
                    <a href="admin.php" class="text-decoration-none">Dashboard</a>

                </li>


                <li>
                    <a href="./buyer.php" class="text-decoration-none">Buyer-Details</a>
                </li>
                <li>
                    <a href="./seller.php" class="text-decoration-none">Seller-Details</a>
                </li>
                <li>
                    <a href="./orders.php" class="text-decoration-none">Orders</a>
                </li>
                <li>
                    <a href="./chat.php" class="text-decoration-none">Chats</a>
                </li>
                <li>
                    <a href="./book_cat.php" class="text-decoration-none">Book Category</a>
                </li>
                <li>
                    <div class="btn-main">
                        <!-- <button class="btn-button">Log Out</button> -->
                        <a href="" class="text-decoration-none">Log out</a>

                    </div>
                </li>
            </ul>
        </div>
    </div>

    <div class="main-content">
        <header>
                <h2>
                    <!-- <label for="">
                        <span class="las la-bars"></span>
                    </label> -->
                    Dashboard
                </h2>
                <div class="search-wrapper">
                    <span class="las la-search"></span>
                    <input type="Search" placeholder="Search Here" />
                </div>
                <div class="user-wrapper">
    
                <?php 
                         $id = $_SESSION['id'];
                         $sql = "SELECT * FROM user WHERE id='$id'";
                         $result = mysqli_query($con , $sql);
                         $data = mysqli_fetch_array($result);
                    ?>
                    <div class="col-md-4 ">
                        <h4><?php echo $data['name']; ?></h4>
                        <small class="text-light">Admin</small>
                    </div>
                </div>
            </header>
            <?php
               if(isset($_GET['id']))
               {
                      $id = $_GET['id'];
                      $sql = "SELECT * FROM user WHERE id='$id'";
                      $result = mysqli_query($con , $sql);
                      $data = mysqli_fetch_array($result);
               
            ?>

            <section class="mt-5">
                <div class="container">
                    <div class="card" style="width: 100%;">
                        <div class="card-body">
                            <h5 class="card-title shadow py-3 my-5 text-center fw-bold">My Personal Information</h5>
                            <?php
                                  if(isset($_POST['update']))
                                  {
                                    $name = $_POST['name'];
                                    $username = $_POST['username'];
                                    $email = $_POST['email'];
                                    $password = $_POST['password'];

                                    if($name=="" || $username=="" || $email=="" || $password=="")
                                    {
                                        ?>
                                           <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                            <strong>Fill all the details if you want to update your information</strong>
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                           </div>
                                        <?php
                                    }
                                    else if($name==$data['name'] && $username==$data['username'] && $email==$data['gmail'] && $password==$data['password'])
                                    {
                                        ?>
                                             <div class="alert alert-primary alert-dismissible fade show" role="alert">
                                                <strong>Your data is similar to old data. So your information is not updated.</strong>
                                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                             </div>
                                        <?php
                                    }
                                    else
                                    {
                                        $sql = "UPDATE user SET name='$name',gmail='$email',password='$password',username='$username' WHERE id='$id' ";
                                        $result = mysqli_query($con , $sql);
                                        if($result)
                                        {
                                            ?>
                                               <div class="alert alert-success alert-dismissible fade show" role="alert">
                                                <strong>Your personal data is updated successfully</strong>
                                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                               </div>
                                            <?php
                                            // header('Refresh:2 , url=')
                                        }
                                    }
                                  }
                            ?>
                            <form action="#" method="post">
                                <div class="mb-3">
                                  <label for="exampleInputText1" class="form-label">My name</label>
                                  <input type="text" class="form-control" value="<?php echo $data['name']; ?>" name="name" id="exampleInputText1" aria-describedby="textHelp">
                                </div>
                                  <div class="mb-3">
                                    <label for="exampleInputText1" class="form-label">Username</label>
                                    <input type="text" class="form-control" name="username" value="<?php echo $data['username']; ?>" id="exampleInputText1" aria-describedby="textHelp">
                                  </div>
                                  <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                                    <input type="email" value="<?php echo $data['gmail']; ?>" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
                                  </div>
                                  <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Password</label>
                                    <input type="password" class="form-control" value="<?php echo $data['password']; ?>" name="password" id="exampleInputPassword1" aria-describedby="passwordHelp">
                                  </div>
                                  <a href="./admin.php" class="btn btn-primary">Back</a>
                                  <button type="submit" class="btn btn-primary" name="update">Update</button>
                            </form>
                        </div>
                    </div>
                </div>
                <?php
               }
                ?>
            </section>
    </div>

    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
</body>

</html>


