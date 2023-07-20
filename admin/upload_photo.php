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
            height: 8.313rem;
            width: 10.875rem;
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
                    <img src="../upload-image/<?php echo $pic['image']; ?>" class="img-fluid" alt="profile pic">
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
    
                    <div>
                        <h4>Shova</h4>
                    </div>
                </div>
            </header>
    
            <section class="mt-5">
                <div class="container">
                  <?php
                       if(isset($_GET['id']))
                       {
                            $id = $_GET['id'];
                            $sql = "SELECT * FROM user WHERE id='$id' ";
                            $result = mysqli_query($con , $sql);
                            $data = mysqli_fetch_array($result);

                            if(isset($_POST['upload']))
                            {
                                $name = $_POST['name'];
                                $image_name = $_FILES['image']['name'];
                                $image_size = $_FILES['image']['size'];

                                if($name=="" || $image_name=="")
                                {
                                    ?>
                                       <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                        <strong>Fill all the details</strong>
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                       </div>
                                    <?php
                                }
                                else
                                {
                                    $image_name = explode("." , $image_name);
                                    $new_name = str_replace(" " , "" , $name);
                                    $new_name = strtolower($new_name);
                                    $new_name = $new_name . "-" . time() ."." . $image_name[1];

                                    if($image_size<=2097152)
                                    {
                                            $extension = $image_name[1];
                                            if($extension=="jpg" || $extension=="jpeg" || $extension=="png")
                                            {
                                                    if($data['image']=="")
                                                    {
                                                            if(move_uploaded_file($_FILES['image']['tmp_name'], "../upload-image/$new_name"))
                                                            { 
                                                                 $sql = "UPDATE user SET image='$new_name' WHERE id='$id'";
                                                                 $result = mysqli_query($con , $sql);
                                                                 if($result)
                                                                 {
                                                                      ?>
                                                                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                                                                            <strong>Image uploaded successfully.</strong>
                                                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                                                        </div>
                                                                      <?php
                                                                      header('Refresh:1 , url=./upload_photo.php');
                                                                 }
                                                                 else
                                                                 {
                                                                    ?>
                                                                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                                                            <strong>Failed to load in database.</strong>
                                                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                                                        </div>
                                                                    <?php
                                                                 }
                                                                 

                                                            }
                                                            else
                                                            {
                                                                ?>
                                                                   <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                                                    <strong>file failed to upload inside folder. Try again</strong> 
                                                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                                                   </div>
                                                                <?php
                                                            }
                                                    }
                                                    else
                                                    {
                                                        $old = $data['image'];
                                                        $old_image = unlink("../upload-image/$old") ;
                                                        if($old_image)
                                                        {
                                                            $sql = "UPDATE user SET image=null WHERE id='$id'";
                                                            $result = mysqli_query($con , $sql);
                                                            if($result)
                                                            {
                                                                if(move_uploaded_file($_FILES['image']['tmp_name'] , "../upload-image/$new_name"))
                                                                {
                                                                    $sql = "UPDATE user SET image='$new_name' WHERE id='$id' ";
                                                                    $result = mysqli_query($con , $sql);
                                                                    if($result)
                                                                    {
                                                                        ?>
                                                                          <div class="alert alert-success alert-dismissible fade show" role="alert">
                                                                            <strong>Image uploaded successfully.</strong></strong> 
                                                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                                                          </div>
                                                                        <?php
                                                                        header('Refresh:1 , url=./admin.php');
                                                                    }
                                                                    else
                                                                    {
                                                                        ?>
                                                                           <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                                                            <strong>Unable to update in database. Try again</strong>
                                                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                                                           </div>
                                                                        <?php
                                                                    }
                                                                }
                                                                else
                                                                {
                                                                    ?>
                                                                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                                                        <strong>file failed to upload inside folder. Try again</strong> 
                                                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                                                    </div>
                                                                    <?php
                                                                }

                                                            }
                                                            else
                                                            {
                                                                ?>
                                                                   <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                                                    <strong>Unable to empty old image in database.</strong> 
                                                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                                                   </div>
                                                                <?php
                                                            }

                                                        }
                                                        else
                                                        {
                                                                ?>
                                                                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                                                    <strong>Unable to delete old image</strong>
                                                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                                                </div>
                                                                <?php
                                                        }


                                                    }
                                            }
                                            else
                                            {
                                                ?>
                                                   <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                                    <strong>Your image shoud either be .jpg or .jpeg or .png</strong> You should check in on some of those fields below.
                                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                                   </div>
                                                <?php
                                            }
                                    }
                                    else
                                    {
                                        ?>
                                           <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                            <strong>Image size shold be less than 2mb</strong>
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                           </div>
                                        <?php
                                    }
                                }
                            }
                       
                  ?>
                    <div class="card" style="width: 100%;">
                        <div class="card-body">
                            <h5 class="card-title text-center fw-bold my-3 py-3 shadow">Upload Profile Picture</h5>
                            <form action="#" method="post" enctype="multipart/form-data">
                                <div class="mb-3">
                                    <label for="exampleInputText1" class="form-label" >Enter your name</label>
                                    <input type="text" class="form-control" name="name" value="<?php echo $data['name'] ?>" id="exampleInputText1" aria-describedby="textHelp" required>
                                </div>
                                <div class="mb-3">
                                    <label for="formFile" class="form-label">Choose image</label>
                                    <input class="form-control" type="file" name="image" id="formFile">
                                </div>
                                <a href="./admin.php" class="btn btn-primary">Back</a>
                                <button type="submit" class="btn btn-primary" name="upload">Upload</button>
                            </form>
                        </div>
                    </div>
                    <?php
                       }
                    ?>
                </div>
            </section>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
</body>

</html>