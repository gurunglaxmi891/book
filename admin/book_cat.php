<?php
      require('../process/config.php');
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <link href="../assets/css/category.css" rel="stylesheet">
    <title>Book Category</title>

</head>

<body>
    <nav class="navbar navbar-light bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand text-success">Read-Recycle</a>
            <a class="navbar-brand text-success me-auto" href="../index.php">Home</a>

            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </nav>


    <!-- <section class="mt-5 ">
        <div class="container">
            <h1>Friction</h1>
            <div class="row">
              
              <div class="card col-mid-4" style="width: 18rem; ">
                  <img src="../img/book2 (4).jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                      <h5 class="card-title">Book 1</h5>
                      
                      <a href="#" class="btn btn-primary">Go somewhere</a>
                  </div>
              </div>
              
              <div class="card col-mid-4" style="width: 18rem; " >
                  <img src="../img/book2 (4).jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                      <h5 class="card-title">Book 1</h5>
                      
                      <a href="#" class="btn btn-primary">Go somewhere</a>
                  </div>
              </div>
              <div class="card col-mid-4" style="width: 18rem; " >
                  <img src="../img/book2 (4).jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                      <h5 class="card-title">Book 1</h5>
                      
                      <a href="#" class="btn btn-primary">Go somewhere</a>
                  </div>
              </div>
            </div>
        </div>

    </section> -->


    <!-- =========================Friction Book Category======================= -->
    <section id="book-section" class="books ">
        <!-- =================first-row for books================== -->
        <div class="container">
            <h2>Fiction</h2>
            <!-- <p class="medium-font">Some of the popular books availabe in our store are give below.</p> -->

            <div class="book-collection">
            <?php
                $sql = "SELECT * FROM category WHERE type='fiction'";
                $result = mysqli_query($con , $sql);
                if($result)
                {
                   while($data = mysqli_fetch_array($result))
                   {       
            ?>

                <div class="book-item">
                    <div class="book-image">
                        <img src="../img/<?php echo $data['image']; ?>" alt="">
                    </div>
                    <div class="book-content">
                        <!-- <p class="small-font">Book About End</p> -->
                        <a class="small-font btn" href="../all_books.php?id=<?php echo $data['id']; ?>">View</a>

                    </div>
                </div>

                
            <?php
                   }
                }
            ?>
            </div>
        </div>
        
    </section>


    <!-- ==============================Non-Friction Book Category============================== -->
    <section id="book-section" class="books ">
        <!-- =================first-row for books================== -->
        <div class="container">
            <h2>Non-Fiction</h2>
            <!-- <p class="medium-font">Some of the popular books availabe in our store are give below.</p> -->

            <div class="book-collection">
         <?php
             $sql = "SELECT * FROM category WHERE type='non-fiction' ";
             $result = mysqli_query($con , $sql);
             if($result)
             {
                while($data = mysqli_fetch_array($result))
                {
         ?>
                <div class="book-item">
                    <div class="book-image">
                        <img src="../img/<?php echo $data['image']; ?>" alt="">
                    </div>
                    <div class="book-content">
                        <!-- <p class="small-font">Book About End</p> -->
                        <a class="small-font btn" href="../all_books.php?id=<?php echo $data['id']; ?>">View</a>
                    </div>
                </div>
                <?php
                }
             }
                ?>
            </div>
        </div>
    </section>

    <!-- ==============================Nepali-Friction Book Category============================== -->
    <section id="book-section" class="books ">
        <!-- =================first-row for books================== -->
        <div class="container">
            <h2>Nepali-Fiction</h2>
            <!-- <p class="medium-font">Some of the popular books availabe in our store are give below.</p> -->

            <div class="book-collection">

                <div class="book-item">
                    <div class="book-image">
                        <img src="../img/Nathiya-book.png" alt="">
                    </div>
                    <div class="book-content">
                        <!-- <p class="small-font">Book About End</p> -->
                        <a class="small-font btn" href="">Add to cart</a>
                    </div>
                </div>

                <div class="book-item">
                    <div class="book-image">
                        <img src="../img/priya sufi.jpg" alt="">
                    </div>
                    <div class="book-content">
                        <!-- <p class="small-font">Book About Zombie</p> -->
                        <a class="small-font btn" href="">Add to cart</a>
                    </div>
                </div>

                <div class="book-item">
                    <div class="book-image">
                        <img src="../img/monsoon.jpg" alt="">
                    </div>
                    <div class="book-content">
                        <!-- <p class="small-font">Book About Regret</p> -->
                        <a class="small-font btn" href="">Add to cart</a>
                    </div>
                </div>

                <div class="book-item">
                    <div class="book-image">
                        <img src="../img/China_Harayeko_Manchhe.jpg" alt="">
                    </div>
                    <div class="book-content">
                        <!-- <p class="small-font">Book About Love</p> -->
                        <a class="small-font btn" href="">Add to cart</a>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
        </script>
</body>

</html>