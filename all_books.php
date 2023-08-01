<?php
    require("./process/config.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="./assets/css/style.css"> -->
    <script src="https://kit.fontawesome.com/1a937f0349.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./assets/css/footerStyle.css">
    <link rel="stylesheet" href="./prod.css">

    <title>Document</title>
</head>

<body>
    <!------------------------------------- headings ------------------------------------------------------------>

    <nav class="header-navbar bg-dark">
        <div class="container">
            <header class="d-flex flex-wrap justify-content-center py-3  border-bottom ">

                <span class="fs-2 text-white me-auto">Read Recycle</span>


            </header>
        </div>


        <!-- ============navbar with home, aboutus , help , search , etc================= -->

        <nav class="navbar main-navbar navbar-expand-lg navbar-dark container">
            <div class="container-fluid">
                <a class="navbar-brand text-white small-font" href="#">Home</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse navbar-dark" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active text-white small-font" aria-current="page"
                                href="./admin/book_cat.php">Categories</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white small-font" href="#">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white small-font" href="./blog.html">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white small-font" href="#">Help</a>
                        </li>
                    </ul>
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-light " type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>

    </nav>

    <!-- ============navbar with home, aboutus , help , search , etc================= -->

    <nav class="navbar main-navbar navbar-expand-lg navbar-dark container">
        <div class="container-fluid">
            <a class="navbar-brand text-white small-font" href="#">Home</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse navbar-dark" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active text-white small-font" aria-current="page"
                            href="./admin/book_cat.php">Categories</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white small-font" href="#">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white small-font" href="./blog.html">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white small-font" href="#">Help</a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>

    </nav>
    <!----------------------------------------------------- main ------------------------------------------- -->
<?php
    if(isset($_GET['id']))
    {
         $id = $_GET['id'];
         $sql = "SELECT * FROM category WHERE id='$id'";
         $result = mysqli_query($con , $sql);
         if($result)
         {

         $data = mysqli_fetch_array($result);
?>

    <div class="bookwrapper container">
        <div class="book">
            <div class="bookimage">
                <div class="img-display">
                    <div class="img-showcase">
                        <img src="img/cover<?php echo $data['id']; ?>.jpg" alt="">
                    </div>
                </div>
            </div>
            <div class="bookcontent">
                <h3 class="booktitle"><?php echo $data['book_name']; ?></h3>
                <h5><?php echo $data['writer']; ?></h5>
                <div class="book-rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>

                </div>
                <div class="product-price">
                    <p class="price">Price: <span>Rs.<?php echo $data['price']; ?></span></p>
                </div>
                <div class="list">
                    <ul>
                        <li>Available: <span>In stock</span></li>
                    </ul>

                </div>
                <div class="purchase-info">
                    <input type="number" min="0" value="1">
                    <button type="button" class="btnn">Add to Cart <i class="fas fa-shopping-cart"></i></button>
                    <button type="button" class="btnn"><a href="./payment.php?id=<?php echo $data['id']; ?>&price=<?php echo $data['price']; ?>&book_name=<?php echo $data['book_name']; ?>">Buy Now</a></button>
                </div>
                <div class="book-detail">

                    <!-- <p><?php echo $data['description1']; ?></p> -->
                    
                    <p><?php echo $data['description2']; ?></p>
                    
                    <p><?php echo $data['description3']; ?></p>

                    
                    <!-- <p>Hearts get infiltrated. <br>
                        Promises get broken. <br>
                        Rules get shattered. <br>
                        Love gets ugly.</p> -->
                    
                </div>
            </div>

            
            <!-- <ul type="square">
                        <li>Available: <span>In stock</span></li>
                        <li>Shipping area:<span> Inside the Pokhara Valley</span></li>
                        <li>Shipping Fee: <span>Rs.100</span></li> 
                    </ul> -->

            <!-- <div class="social-links">
                <p>Share At: </p>
                <a href="#">
                    <i class="fab fa-facebook-f"></i>
                </a>
               </div> -->
        </div>
    </div>

<?php
         }
    }
?>

    <!--================================================== footer ===========================================-->
    <footer class="footer">
        <div class="container">
            <h2>Why to Choose Us?</h2>
            <br><br>
            <div class="conatiner">
                <div class="row">
                    <div class="footer-col">
                        <h4>Lowest Price</h4>
                        <p>We continuously make effort to make every book's price lowest for our
                            valuable customer</p>
                    </div>

                    <div class="footer-col">
                        <h4>Fastest Delivery</h4>
                        <p>All the orders placed will be delivered within 48 hours.</p>
                    </div>
                    <div class="footer-col">
                        <h4>Best Customer Service</h4>
                        <p>Our customer service is dedicated to providing you with the best possible
                            experience. We are available to answer any questions or concerns you may have.</p>
                    </div>
                    <div class="footer-col">
                        <h4>Flexible Exchange Policy</h4>
                        <p>Customers can make exchange upto 7 days from the day of purchase and a full
                            refund within 15 days.</p>
                    </div>


                </div>

            </div>
        </div>

    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>

</body>

</html>