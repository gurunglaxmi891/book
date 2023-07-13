<?php
    require('../process/config.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/loginpage.css">

<!-- below link is to connect bootstrap with our file. some of the bootstrap is being used here.    -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Log in</title>
</head>

<body>
    <div class="wrapper">
        
        <div class="close">
            <i class="fa fa-close" onclick="closePopup()"></i>
        </div>

        <!-- Headings for the form -->
        <div class="formlogin">

            <?php
                 if(isset($_POST['login']))
                 {
                      $email = $_POST['email'];
                      $password = $_POST['password'];

                      if($email=="" || $password=="")
                      {
                        ?>
                              <!-- below div is one of the component of bootstrap -->
                                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                    <strong>Fill the required details to login</strong>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                        <?php
                      }
                      else
                      {
                          $sql = "SELECT * FROM user WHERE gmail='$email' AND password='$password' ";
                          $result = mysqli_query($con , $sql);
                          if($result)
                          {
                               ?>
                                   <!-- <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <strong>query success</strong>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                   </div> -->
                               <?php
                               $row=mysqli_num_rows($result);
                               if($row==1)
                               {
                                   if($data = mysqli_fetch_array($result))
                                   {
                                       if($data['gmail']==$email && $data['password']==$password && $data['role']=='admin')
                                       {
                                             session_start();
                                               $_SESSION['id'] = $data['id'];
                                               $_SESSION['email'] = $data['gmail'];
                                               $_SESSION['role'] = $data['role'];
                                               header('Refresh:1 , url=../admin/admin.php');
                                       }
                                       else if($data['gmail']==$email && $data['password']==$password && $data['role']=='user')
                                       {
                                             session_start();
                                               $_SESSION['id'] = $data['id'];
                                               $_SESSION['email'] = $data['gmail'];
                                               $_SESSION['role'] = $data['role'];
                                               header('Refresh:1 , url=../user/user.html');
                                       }
    
                                   }
                                   else
                                   {
                                      ?>
                                      <!-- below div is one of the component of bootstrap -->
                                         <!-- <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                            <strong>data fetch failed</strong> You should check in on some of those fields below.
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                         </div> -->
                                      <?php
                                   }

                               }
                               else
                               {
                                ?>
                                <!-- below div is one of the component of bootstrap -->
                                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                        <strong>Invalid Credentials</strong> You should check in on some of those fields below.
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>
                                <?php
                               }
                               
    
                          }
                          else
                          {
                            ?>
                            <!-- below div is one of the component of bootstrap -->
                               <!-- <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                <strong>Query failed</strong> You should check in on some of those fields below.
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                               </div> -->
                            <?php
                          }

                      }


                 }
            ?>
            <h3>Log in</h3>
            <form action="#" method="post">
                <div class="mainContainer">
                    <input type="email" placeholder="Email" name="email">
                </div>
                <div class="mainContainer">
                    <input type="password" name="password" placeholder="Password" id="myInput">
                    <input type="checkbox" onclick="myFunction()">Show Password

                </div>

                <div class="subcontainer">
                    <label>
                        <input type="checkbox" checked="checked" name="remember">Remember me
                    </label>
                    <p class="forgetpsd"><a href="#">Forgot password?</a></p>
                </div>


                <button type="submit" name="login" class="btn btn-dark">LOGIN</button>


                <p class="register">Not registered?<a href="#">Register here!</a></p>


                <div class="separator">
                    Or
                </div>
                <div class="social-login">
                    <a href="Facebook">
                        <i class="fa fa-facebook-square"></i>
                        Facebook
                    </a>
                    <a href="google">
                        <i class="fa fa-google"></i>
                        Google
                    </a>
                </div>

            </form>
        </div>


        <!-- Headings for the form -->
        <div class="formregister">
            <h3>Registration</h3>
            <?php
                     if(isset($_POST['create']))
                     {
                        $username = $_POST['username'];
                        $email = $_POST['email'];
                        $password = $_POST['password'];

                        if($username=="" || $email=="" || $password=="")
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
                            $sql = "SELECT * FROM user WHERE username='$username' ";
                            $result = mysqli_query($con , $sql);
                            $row = mysqli_num_rows($result);
                            if($row==1)
                            {
                                ?>
                                   <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                    <strong>username you choosed is already occupied. Select a unique username</strong>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                   </div>
                                <?php
                            }
                            else
                            {
                                $sql = "INSERT INTO user(username,gmail,password) VALUES('$username','$email','$password') ";
                                $result = mysqli_query($con , $sql);
                                if($result)
                                {
                                    ?>
                                       <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <strong>Account created successfully.</strong>
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                       </div>
                                    <?php
                                }
                                else
                                {
                                    ?>
                                             <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                                <strong>Unable to create account. Please try again</strong>
                                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                             </div>
                                    <?php
                                }
                            }
                            
                            
                        }

                     }
            ?>
            <form action="#" method="post">

                <div class="mainContainer">
                    <input type="text" placeholder="Username" name="username">
                </div>
                <div class="mainContainer">
                    <input type="email" placeholder="Email" name="email">
                </div>
                <div class="mainContainer">
                    <input type="password" name="password" placeholder="Password" id="myInput">
                    <input type="checkbox" onclick="myFunction()">Show Password

                </div>

                <div class="subcontainer">
                    <label>
                        <input type="checkbox" checked="checked" name="remember">I agree to the terms and conditions
                    </label>
                </div>


                <!-- <button type="submit" name="register" class="btn btn-primary">Register</button> -->
                <button type="submit" name="create" class="btn btn-primary">Register</button>


                <p class="LOGIN">Already have an account?<a href="#">Login</a></p>

            </form>
        </div>

    </div>
    <script src="../assets/js/script.js"></script>
    <!-- <script>
        function myFunction() {
            var x = document.getElementById("myInput");
            if (x.type === "password") {
                x.type = "text";
            }
            else {
                x.type = "password";
            }
        }
    </script> -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script> -->
   

</body>

</html>