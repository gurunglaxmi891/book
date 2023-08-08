<?php
  require("process/config.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Payment</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
  <link rel="stylesheet" href="paymentmethod.css" />
</head>

<body>
<?php
   if(isset($_GET["id"]) && isset($_GET["price"]) && isset($_GET["book_name"]))
   {
     $id = $_GET["id"];
     $price = $_GET["price"];
     $book_name = $_GET["book_name"];
    //  echo $id ;
    //  echo $price ;
    //  echo $book_name ;
     
   }
?>
  <div class="wrapper">
    <h2>Complete Your Order</h2>
    <?php
         if(isset($_POST["submit"]))
         {
          $name = $_POST["name"];
          $email = $_POST["email"];
          $address = $_POST["address"];
          $number = $_POST["number"];
          // echo "name = " . $name;
          // echo "number = " . $number;
          // echo "email = " . $email;
          // echo "address = " . $address;
          
          $sql = "INSERT INTO booking(book_id,book_name,price,order_by,email,contact_number,address) VALUES('$id','$book_name','$price','$name','$email','$number','$address') ";
          $result = mysqli_query($con , $sql);
          if($result)
          {
            ?>
               <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Thanks for submitting data. Payment options are available below.</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
               </div>
            <?php

          }
          else
          {
            ?>
               <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>query failed in database</strong> You should check in on some of those fields below.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
               </div>
            <?php
          }
         }
    ?>
    <h4>Fill your details</h4>
    <form action="#" method="POST">
      <!-- Account Information Start -->

      <h4>Account</h4>
      <div class="input_group">
        <div class="input_box">
          <input type="text" placeholder="Full Name" required class="name" name="name"/>
        </div>
      </div>

      <div class="input_group">
        <div class="input_box">
          <input type="Email" placeholder="Your Email Address" required class="name"  name="email"/>
        </div>
      </div>

      <div class="input_group">
        <div class="input_box">
          <input type="text" placeholder="Address" required class="name"  name="address"/>
        </div>
      </div>



      <div class="input_group">
        <div class="input_box">
          <input type="number" placeholder="Contact Number" required class="name" name="number" />
        </div>
      </div>
      <button type="submit" name="submit">submit</button>
    </form>
  </div>
  <br />
  <br />
<?php
   
?>
  <div class="container">
    <div class="title">
      <h4>Select a <span style="color: skyblue">Payment</span> method</h4>
    </div>
    <!-- <form action="#" class="form-1"> -->
      <form action="https://uat.esewa.com.np/epay/main" method="POST" >
        <div class="category">
          <input value="<?php echo $price ?>" name="tAmt" type="hidden">
          <input value="<?php echo $price ?>" name="amt" type="hidden">
          <input value="0" name="txAmt" type="hidden">
          <input value="0" name="psc" type="hidden">
          <input value="0" name="pdc" type="hidden">
          <input value="EPAYTEST" name="scd" type="hidden">
          <input value="<?php echo $id ?>" name="pid" type="hidden">
          <input value="http://localhost/clone/book/payment_success.php" type="hidden" name="su">
          <input value="http://localhost/clone/book/payment_failed.php" type="hidden" name="fu">
          
          <!-- <input type="radio" name="payment" id="e-sewa" /> -->
          <!-- <input value="Pay online using esewa" type="submit"> -->
          <button type="submit" >Pay online using esewa</button>
          <label for="e-sewa" class="esewaMethod">
            <div class="imgName">
              <div class="imgContainer esewa">
                <img src="./img/esewa.png" alt="online payment" />
              </div>
              <span class="name">E-sewa</span>
            </div>
            <span class="check"><i class="fa-solid fa-circle-check" style="color: #6064b6"></i></span>
          </label>
          
        </div>
        
        
        <div class="category">
          <!-- <input type="radio" name="payment" id="CashonDelivery" /> -->
          <!-- <input value="Cash on delivery" type="submit"> -->
          <a href="#">Cash on Delivery</a>
          <label for="CashonDelivery" class="CashonDeliveryMethod">
            <div class="imgName">
              <div class="imgContainer cash">
                <img src="./img/Home-delivery.jpg" alt="online payment" />
              </div>
              <span class="name">Cash on Delivery</span>
            </div>
            <span class="check"><i class="fa-solid fa-circle-check" style="color: #6064b6"></i></span>
          </label>
        </div>
      </form>
    
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
</body>

</html>