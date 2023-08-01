<?php
error_reporting(0);
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "book";
$conn = mysqli_connect($servername,$username,$password,$dbname);
if($conn){
    //echo "Connection ok";
}
else{
    echo "Connection failed".mysqli_connect_error();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact us</title>
    <!-- font awesome CDN -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
    <link rel="stylesheet" href="./assets/css/contactus.css">
</head>

<body>
    <section id="section-wrapper">
        <div class="box-wrapper">
            <div class="info-wrap">
                <h2 class="info-title">Contact Information</h2>
                <h3 class="info=sub-title">Fill up the form and our team will get to you within 24 hours</h3>
                <ul class="info-details">
                    <li>
                        <i class="fas fa-phone-alt"></i>
                        <span>Phone: </span> <a href="phn:+977 9807777777">+977 9807777777</a>

                    </li>


                    <li>
                        <i class="fas fa-paper-plane "></i>
                        <span>Email: </span><a href="mailto: info@readreycle.com">info@readrecycle.com</a>
                    </li>


                    <li>
                        <i class="fas fa-globe"></i>
                        <span>Website: </span><a href="index.php">readrecycle.com</a>
                    </li>

                </ul>
                <ul class="social-icons">
                    <li>
                        <a href="https://www.facebook.com/readrecyclebooks">
                            <i class="fab fa-facebook"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="form-wrap">
                <form action="#" method="POST">

                   <!-- </form> -->
                  <h2 class="form-title">Send us a message</h2>
                  <div class="form-fields">
                    <div class="form-group">
                        <input type="text" class="input" placeholder="First Name" name="fname">
                    </div>
                    <div class="form-group">
                        <input type="text" class="input" placeholder="Last Name" name="lname">

                    </div>
                    <div class="form-group">
                        <input type="email" class="input" placeholder="Mail" name="email">

                    </div>
                    <div class="form-group">
                        <input type="number" class="input" placeholder="Phone" name="phone">

                    </div>
                    <div class="form-group">
                        <textarea name="message" id="" placeholder="Write your message"></textarea>
                    </div>

                   </div>

                   <div>
                    <input type="submit" value="Send message" class="btn" name="send">
                  </div>
                </form>
            </div>

    </section>
</body>

</html>
<?php
if($_POST['send'])
{
    $fname   =$_POST['fname'];
    $lname   =$_POST['lname'];
    $email   =$_POST['email'];
    $phone   =$_POST['phone'];
    $message =$_POST['message'];

        $query="INSERT INTO message_view(fname,lname,email,phone,message) VALUES('$fname','$lname','$email','$phone','$message')";
        $data = mysqli_query($conn,$query);
        if($data)
        {
            echo "<script>alert('Message sent')</script>";
        }
        else{
            echo "failed";
        }
}
?>