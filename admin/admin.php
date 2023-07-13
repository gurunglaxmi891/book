<?php
    require('../process/secure_admin.php');
    require('../process/config.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Page</title>
    <link rel="stylesheet"
        href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/adminStyle.css" />
</head>

<!-- ........................................................ -->

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
                    <img src="" alt="prfile pic">
                </li>
                <li>
                    <a href="./upload_photo.php?id=<?php echo $_SESSION['id']; ?>" class="text-decoration-none">Upload Picture</a>
                   
                    

                </li>
                
                <li>
                    <a href="admin.html" class="text-decoration-none">Admin info</a>

                </li>
                <li>
                    <a href="admin.html" class="text-decoration-none">Dashboard</a>

                </li>


                <li>
                    <a href="./buyer.html" class="text-decoration-none" >Buyer-Details</a>
                </li>
                <li>
                    <a href="./seller.html" class="text-decoration-none">Seller-Details</a>
                </li>
                <li>
                    <a href="./orders.html" class="text-decoration-none">Orders</a>
                </li>
                <li>
                    <a href="./chat.html" class="text-decoration-none">Chats</a>
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
    

    <!-- .........................Top middle................................. -->
    <div class="main-content">
        <header>
            <h2>
                <label for="">
                    <span class="las la-bars"></span>
                </label>
                Dashboard
            </h2>
            <div class="search-wrapper">
                <span class="las la-search"></span>
                <input type="Search" placeholder="Search Here" />
            </div>
            <div class="user-wrapper">
                <img src="pic1.png" width="40px" alt="pic">

                <div>
                    <h4>Shova</h4>
                    <small>Admin</small>
                </div>
            </div>
        </header>

        <!-- .......................Top below middle.......................... -->
        <main>
            <div class="cards">
                <div class="card-single">
                    <div>
                        <h1>54</h1>
                        <span>Visitors</span>
                    </div>
                    <div>
                        <span class="las la-users"></span>
                    </div>
                </div>

                <div class="card-single">
                    <div>
                        <h1>54</h1>
                        <span>Sales</span>
                    </div>
                    <div>
                        <span class="las la-clipboard"></span>
                    </div>
                </div>

                <div class="card-single">
                    <div>
                        <h1>54</h1>
                        <span>Earnings</span>
                    </div>
                    <div>
                        <span class="las la-google-wallet"></span>
                    </div>
                </div>

                <div class="card-single">
                    <div>
                        <h1>54</h1>
                        <span>Orders</span>
                    </div>
                    <div>
                        <span class="las la-shopping-bag"></span>
                    </div>
                </div>
            </div>


            <!-- ..........................................Seller table..................................... -->
            <div class="recent-flex1">
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
                                        <td>SN</td>
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
                                    <tr>
                                        <td>1</td>
                                        <td>Laxmi</td>
                                        <td>2019-02-09</td>
                                        <td>
                                            gurunglaxmi@gmail.com
                                        </td>
                                        <td>3</td>
                                        <td>
                                            <div class="btn-main">
                                                <!-- <button class="btn-button">Delete</button>
                        <button class="btn-button">Update</button> -->
                                                <button class="btn btn-danger">Delete</button>
                                                <button class="btn btn-success">Update</button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>copt</td>
                                        <td>2019-02-09</td>
                                        <td>nobil@gmail.com</td>
                                        <td>5
                                        </td>
                                        <td>
                                            <div class="btn-main">
                                                <!-- <button class="btn-button">Delete</button>
                        <button class="btn-button">Update</button> -->
                                                <button class="btn btn-danger">Delete</button>
                                                <button class="btn btn-success">Update</button>
                                            </div>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>ushop app</td>
                                        <td>2019-02-09</td>
                                        <td>
                                            gurunglaxmi@gmail.com
                                        </td>
                                        <td>8</td>
                                        <td>
                                            <div class="btn-main">
                                                <!-- <button class="btn-button">Delete</button>
                        <button class="btn-button">Update</button> -->
                                                <button class="btn btn-danger">Delete</button>
                                                <button class="btn btn-success">Update</button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>esign</td>
                                        <td>2019-02-09</td>
                                        <td>
                                            gurunglaxmi@gmail.com
                                        </td>
                                        <td>9</td>
                                        <td>
                                            <div class="btn-main">
                                                <!-- <button class="btn-button">Delete</button>
                        <button class="btn-button">Update</button> -->
                                                <button class="btn btn-danger">Delete</button>
                                                <button class="btn btn-success">Update</button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>bent</td>
                                        <td>2019-02-09</td>
                                        <td>no@am</td>

                                        <td>5</td>
                                        <td>
                                            <div class="btn-main">
                                                <!-- <button class="btn-button">Delete</button>
                        <button class="btn-button">Update</button> -->
                                                <button class="btn btn-danger">Delete</button>
                                                <button class="btn btn-success">Update</button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>ushop app</td>
                                        <td>2019-02-09</td>
                                        <td>gurunglaxmi@gmail.com
                                        </td>
                                        <td>7</td>
                                        <td>
                                            <div class="btn-main">
                                                <!-- <button class="btn-button">Delete</button>
                        <button class="btn-button">Update</button> -->
                                                <button class="btn btn-danger">Delete</button>
                                                <button class="btn btn-success">Update</button>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
                <!-------------- first-table-finish ----------------------------------------->


                <!-- ------------------------------buyer-table------------------------------- -->
                <div class="recent-flex2 mt-5">
                    <div class="buyer">
                        <div class="card2">
                            <div class="card2-header">
                                <h3>Buyer-Details</h3>
                                <button>See all <span class="las la-arrow-right"></span></button>
                            </div>
                            <div class="card2-body">
                                <table width="100%">
                                    <thead>
                                        <tr>
                                            <td>SN</td>
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
                                                Books bought
                                            </td>
                                            <td>
                                                Action
                                            </td>
                                        </tr>
                                    </thead>
                                    <!-- ----------------------after table heading, now table body -------------------->
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Laxmi</td>
                                            <td>2019-02-09</td>
                                            <td>
                                                gurunglaxmi@gmail.com
                                            </td>
                                            <td>3</td>
                                            <td>
                                                <div class="btn-main">
                                                    <!-- <button class="btn-button">Delete</button>
                              <button class="btn-button">Update</button> -->
                                                    <button class="btn btn-danger">Delete</button>
                                                    <button class="btn btn-success">Update</button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>copt</td>
                                            <td>2019-02-09</td>
                                            <td>nobil@gmail.com</td>
                                            <td>5
                                            </td>
                                            <td>
                                                <div class="btn-main">
                                                    <!-- <button class="btn-button">Delete</button>
                              <button class="btn-button">Update</button> -->
                                                    <button class="btn btn-danger">Delete</button>
                                                    <button class="btn btn-success">Update</button>
                                                </div>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>ushop app</td>
                                            <td>2019-02-09</td>
                                            <td>
                                                gurunglaxmi@gmail.com
                                            </td>
                                            <td>8</td>
                                            <td>
                                                <div class="btn-main">
                                                    <!-- <button class="btn-button">Delete</button>
                              <button class="btn-button">Update</button> -->
                                                    <button class="btn btn-danger">Delete</button>
                                                    <button class="btn btn-success">Update</button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>esign</td>
                                            <td>2019-02-09</td>
                                            <td>
                                                gurunglaxmi@gmail.com
                                            </td>
                                            <td>9</td>
                                            <td>
                                                <div class="btn-main">
                                                    <!-- <button class="btn-button">Delete</button>
                              <button class="btn-button">Update</button> -->
                                                    <button class="btn btn-danger">Delete</button>
                                                    <button class="btn btn-success">Update</button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>bent</td>
                                            <td>2019-02-09</td>
                                            <td>no@am</td>

                                            <td>5</td>
                                            <td>
                                                <div class="btn-main">
                                                    <!-- <button class="btn-button">Delete</button>
                              <button class="btn-button">Update</button> -->
                                                    <button class="btn btn-danger">Delete</button>
                                                    <button class="btn btn-success">Update</button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td>ushop app</td>
                                            <td>2019-02-09</td>
                                            <td>gurunglaxmi@gmail.com
                                            </td>
                                            <td>7</td>
                                            <td>
                                                <div class="btn-main">
                                                    <!-- <button class="btn-button">Delete</button>
                              <button class="btn-button">Update</button> -->
                                                    <button class="btn btn-danger">Delete</button>
                                                    <button class="btn btn-success">Update</button>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                    <!-- order table..................... -->
                    <div class="recent-flex3 mt-5">
                        <div class="orders">
                            <div class="card3">
                                <div class="card3-header">
                                    <h3>Orders</h3>
                                    <button>See all <span class="las la-arrow-right"></span></button>
                                </div>
                                <div class="card3-body">
                                    <table width="100%">
                                        <thead>
                                            <tr>
                                                <td>Book-id</td>
                                                <td>
                                                    Buyer-id
                                                </td>
                                                <td>
                                                    Ordered date
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
                                            <tr>
                                                <td>23</td>
                                                <td>44</td>
                                                <td>
                                                    2078-01-01
                                                </td>
                                                <td>COD</td>
                                                <td>delivered</td>
                                                <td>
                                                    <div class="btn-main">
                                                        <!-- <button class="btn-button btn-danger">Delete</button>
                                  <button class="btn-button">Update</button> -->
                                                        <button class="btn btn-danger">Delete</button>
                                                        <button class="btn btn-success">Update</button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>24</td>
                                                <td>2019</td>
                                                <td>2078-01-01</td>
                                                <td>Esewa
                                                </td>
                                                <td>delivered</td>
                                                <td>
                                                    <div class="btn-main">
                                                        <!-- <button class="btn-button">Delete</button>
                                  <button class="btn-button">Update</button> -->
                                                        <button class="btn btn-danger">Delete</button>
                                                        <button class="btn btn-success">Update</button>
                                                    </div>
                                                </td>

                                            </tr>
                                            <tr>
                                                <td>25</td>
                                                <td>46</td>
                                                <td>
                                                    2078-01-01
                                                </td>
                                                <td>COD</td>
                                                <td>pending</td>
                                                <td>
                                                    <div class="btn-main">
                                                        <!-- <button class="btn-button">Delete</button>
                                  <button class="btn-button">Update</button> -->
                                                        <button class="btn btn-danger">Delete</button>
                                                        <button class="btn btn-success">Update</button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>26</td>
                                                <td>47</td>
                                                <td>
                                                    2078-01-01
                                                </td>
                                                <td>COD</td>
                                                <td>penging</td>
                                                <td>
                                                    <div class="btn-main">
                                                        <!-- <button class="btn-button">Delete</button>
                                  <button class="btn-button">Update</button> -->
                                                        <button class="btn btn-danger">Delete</button>
                                                        <button class="btn btn-success">Update</button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>27</td>
                                                <td>48</td>
                                                <td>2078-01-01</td>
                                                <td>COD</td>
                                                <td>delivered</td>
                                                <td>
                                                    <div class="btn-main">
                                                        <!-- <button class="btn-button">Delete</button>
                                  <button class="btn-button">Update</button> -->
                                                        <button class="btn btn-danger">Delete</button>
                                                        <button class="btn btn-success">Update</button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>28</td>
                                                <td>49</td>
                                                <td>2011-01-04
                                                </td>
                                                <td>Esewa</td>
                                                <td>Pending</td>
                                                <td>
                                                    <div class="btn-main">
                                                        <!-- <button class="btn-button">Delete</button>
                                  <button class="btn-button">Update</button> -->
                                                        <button class="btn btn-danger">Delete</button>
                                                        <button class="btn btn-success">Update</button>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>

                        <!-- ............................... -->





                    </div>
                </div>
            </div>
    </div>

    </main>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>

</body>

</html>