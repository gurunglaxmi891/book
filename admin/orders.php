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
    <link
      rel="stylesheet"
      href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css"
    />
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
        <div class="search-wrapper">
            <span class="las la-search"></span>
            <input type="Search" placeholder="Search Here" />
        </div>
        <div class="user-wrapper">
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


  </div>
</body>
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
                      <td><div class="btn-main">
                          <!-- <button class="btn-button">Delete</button>
                          <button class="btn-button">Update</button> -->
                          <button class="btn btn-danger">Delete</button>
                                                  <button class="btn btn-success">Update</button>
                        </div></td>
                    </tr>
                    <tr>
                      <td>24</td>
                      <td>2019</td>
                      <td>2078-01-01</td>
                      <td>Esewa
                      </td>
                      <td>delivered</td>
                      <td><div class="btn-main">
                          <!-- <button class="btn-button">Delete</button>
                          <button class="btn-button">Update</button> -->
                          <button class="btn btn-danger">Delete</button>
                                                  <button class="btn btn-success">Update</button>
                        </div></td>
                      
                    </tr>
                    <tr>
                      <td>25</td>
                      <td>46</td>
                      <td>
                        2078-01-01
                      </td>
                      <td>COD</td>
                      <td>pending</td>
                      <td><div class="btn-main">
                          <!-- <button class="btn-button">Delete</button>
                          <button class="btn-button">Update</button> -->
                          <button class="btn btn-danger">Delete</button>
                                                  <button class="btn btn-success">Update</button>
                        </div></td>
                    </tr>
                    <tr>
                      <td>26</td>
                      <td>47</td>
                      <td>
                        2078-01-01
                      </td>
                      <td>COD</td>
                      <td>penging</td>
                      <td><div class="btn-main">
                          <!-- <button class="btn-button">Delete</button>
                          <button class="btn-button">Update</button> -->
                          <button class="btn btn-danger">Delete</button>
                                                  <button class="btn btn-success">Update</button>
                        </div></td>
                    </tr>
                    <tr>
                      <td>27</td>
                      <td>48</td>
                      <td>2078-01-01</td>
                      <td>COD</td>
                      <td>delivered</td>
                      <td><div class="btn-main">
                          <!-- <button class="btn-button">Delete</button>
                          <button class="btn-button">Update</button> -->
                          <button class="btn btn-danger">Delete</button>
                                                  <button class="btn btn-success">Update</button>
                        </div></td>
                    </tr>
                    <tr>
                      <td>28</td>
                      <td>49</td>
                      <td>2011-01-04
                      </td>
                      <td>Esewa</td>
                      <td>Pending</td>
                      <td><div class="btn-main">
                          <!-- <button class="btn-button">Delete</button>
                          <button class="btn-button">Update</button> -->
                          <button class="btn btn-danger">Delete</button>
                                                  <button class="btn btn-success">Update</button>
                        </div></td>
                    </tr>
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