<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/style.css">
    <script src="https://kit.fontawesome.com/1a937f0349.js" crossorigin="anonymous"></script>
    <title>Title</title>
</head>

<body>

    <nav class="header-navbar bg-dark">
        <div class="container">
            <header class="d-flex flex-wrap justify-content-center py-3  border-bottom ">
                <span> <a href="#"
                        class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
                        <video autoplay controls loop width="150px">
                            <source src="./animation.mp4">
                        </video>
                    </a></span>
                <span class="fs-2 text-white me-auto">Read Recycle</span>

                <div class="col-md-3 text-end">
                    <a href="./partials/login.php" class="btn btn-outline-light me-2 small-font">Login</a>
                    <a href="./partials/sign_log_in_form.html" class="btn btn-outline-light small-font">Sign Up</a>
                </div>
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
    <!-- ==========header section with content========================= -->
    <section class="header-content-section">
        <div class="container header-content">
            <h2>Today a reader, tomorrow a leader.</h2>
            <h3>Buy and sell your books at the finest price</h3>
            <a href="#book-section" class="btn btn-outline-light medium-font">Explore</a>
        </div>
    </section>

    <!-- /============================Why Us/////============================ -->
    <section id="about-us">
        <div class="container about-parent">

            <div class="about-us-content">
                <h3>Why Us?</h3>
                <h2>We have been helping people around the world for 10 years</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur incidunt dolorem tenetur
                    impedit et error corporis veritatis animi quos excepturi?</p>
            </div>

            <div class="about-us-image">
                <img src="./img/tengyart-zLETygkHMvQ-unsplash.jpg" alt="">
            </div>

        </div>
    </section>
    <!--=================  Types of books ======================= -->
    <section id="book-section" class="books">
        <!-- =================first-row for books================== -->
        <div class="container">
            <h2>Books</h2>
            <p class="medium-font">Some of the popular books availabe in our store are give below.</p>

            <div class="book-collection">

                <div class="book-item">
                    <div class="book-image">
                        <img src="./img/its ends with us.jpg" alt="">
                    </div>
                    <div class="book-content">
                    <a class="det" href="./end1.html">Book About End</a>
                        <a class="small-font btn" href="">Add to Cart</a>
                    </div>
                </div>

                <div class="book-item">
                    <div class="book-image">
                        <img src="./img/thisishowyouheal.jpeg" alt="">
                    </div>
                    <div class="book-content">
                    <a class="det" href="./heal.html">Book About Healing</a>
                        <a class="small-font btn" href="">Add to Cart</a>
                    </div>
                </div>

                <div class="book-item">
                    <div class="book-image">
                        <img src="./img/book2 (2).jpg" alt="">
                    </div>
                    <div class="book-content">
                    <a class="det" href="./regret.html">Book About Regret</a>
                        <a class="small-font btn" href="">Add to Cart</a>
                    </div>
                </div>

                <div class="book-item">
                    <div class="book-image">
                        <img src="./img/ugly love.jpg" alt="">
                    </div>
                    <div class="book-content">
                    <a class="det" href="./love.html">Book About Love</a>
                        <a class="small-font btn" href="">Add to Cart</a>
                    </div>
                </div>

            </div>
        </div>
        <!-- ===================Second row for books========================= -->
        <div class="container">

            <div class="book-collection">

                <div class="book-item">
                    <div class="book-image">
                        <img src="./img/a good girls guides to muder.jpg" alt="">
                    </div>

                    <div class="book-content">
                        <a class="det" href="./guide1.html">Book About A guide to murder</a>
                        <a class="small-font btn" href="">Add to Cart</a>
                    </div>
                </div>

                <div class="book-item">
                    <div class="book-image">
                        <img src="./img/everything is fucked.jpeg" alt="">
                    </div>
                    <div class="book-content">
                        <a class="det" href="./hope1.html">Book About Hope</a>
                        <a class="small-font btn" href="">Add to Cart</a>
                    </div>
                </div>

                <div class="book-item">
                    <div class="book-image">
                        <img src="./img/mindset.jpeg" alt="">
                    </div>
                    <div class="book-content">
                    <a class="det" href="./mindset.html">Book About Mindset</a>
                        <a class="small-font btn" href="../cart.html">Add to Cart</a>
                    </div>
                </div>

                <div class="book-item">
                    <div class="book-image">
                        <img src="./img/remainder of him.jpg" alt="">
                    </div>
                    <div class="book-content">
                    <a class="det" href="./reminder.html">Book About Reminders</a>
                        <a class="small-font btn" href="">Add to Cart</a>
                    </div>
                </div>

            </div>
        </div>

    </section>

    <!-- ========================Testimonials========================= -->
    <section id="testimonial">
        <h2>What our customer says?</h2>
        <div class="container testimonial-container">
            <div class="testimonial-1 review">
                <div class="testimonial-image">
                    <img src="./img/male-photo1.jpg" alt="">
                </div>
                <div class="testimonial-content">
                    <h3>Michel Jackson</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci eius, vitae possimus quod
                        assumenda cupiditate!</p>
                </div>
            </div>

            <div class="testimonial-2 review">
                <div class="testimonial-image">
                    <img src="./img/male-photo2.jpg" alt="">
                </div>
                <div class="testimonial-content">
                    <h3>Kyoujuro Rengoku</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci eius, vitae possimus quod
                        assumenda cupiditate!</p>
                </div>
            </div>

            <div class="testimonial-3 review">
                <div class="testimonial-image">
                    <img src="./img/male-photo3.jpg" alt="">
                </div>
                <div class="testimonial-content">
                    <h3>Akaza</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci eius, vitae possimus quod
                        assumenda cupiditate!</p>
                </div>
            </div>

        </div>
    </section>

    <!-- ===========================contect us-------------------  -->
    <section id="contact-us">
        <div class="container contact-container">

            <div class="img-container">
                <img src="./img/janko-ferlic-sfL_QOnmy00-unsplash.jpg" alt="">
            </div>

            <div class="contact-details">
                <h2>Contact Us</h2>
                <input type="name" placeholder="Your name">
                <input type="email" placeholder="Your mail here">
                <textarea name="text here" id="" cols="30" rows="10" placeholder="Your Message Here"></textarea>
                <a href="" class="btn btn-success">Submit</a>
            </div>

        </div>
    </section>
    <!-- ==============footer=================== -->
    <footer id="book-footer">
        <div class="container">
            <p>Book Website &copy; 2023, All rights reserved.</p>
            <div class="footer-icon">
                <i class="fa-brands fa-facebook fa-3x"></i>
                <i class="middle fa-brands fa-square-instagram fa-3x"></i>
                <i class="fa-brands fa-twitter fa-3x"></i>
            </div>
        </div>
    </footer>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
</body>

</html>