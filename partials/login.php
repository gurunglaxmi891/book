<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/loginpage.css">
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

            <h3>Log in</h3>
            <form action="">
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


                <button class="btn">LOGIN</button>


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
            <form action="#" method="post">

                <h3>Registration</h3>
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


                <button class="btn">Register</button>


                <p class="LOGIN">Already have an account?<a href="#">Login</a></p>

            </form>
        </div>

    </div>
    <script src="../assets/js/script.js"></script>
    <script>
        function myFunction() {
            var x = document.getElementById("myInput");
            if (x.type === "password") {
                x.type = "text";
            }
            else {
                x.type = "password";
            }
        }
    </script>
   

</body>

</html>