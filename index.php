<?php

$servername="localhost";
$username="root";
$password="";
$dbname="login";

$conn=mysqli_connect($servername,$username,$password,$dbname);

if(!$conn){
    echo "ERROR";
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account</title>
    <link rel="stylesheet" href="style.css">
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Mukta:wght@300;500&display=swap');
    body{
        font-family: 'Mukta', sans-serif;
    }
</style>
<body>
    <div class="ac">
        <div class="container">
            <div class="navbar">
                <div class="logo">
                    <img src="logo (2).png" alt="" width="200px">
                </div>

               
            </div>
        </div>
    </div>


    <div class="account-page">
        <div class="container">
            <div class="row">
                <div class="col-2">
                    <img src=".bg.png" alt="">
                </div>
                <div class="col-2">
                    <div class="form-container">
                        <div class="form-btn">
                            <span onclick="Login()">Login</span>
                            <span onclick="register()">Register</span>
                            <hr id="Indicator">
                        </div>

                        <form id="LoginForm" action="login.php" method="post">
                            <input type="text" placeholder="Username_Log" name="Username_Log">
                            <input type="password" placeholder="Password_Log" name="Password_Log">
                            <button type="submit" class="btn">Login</button>
                        </form>

                        <form id="RegForm" action="register.php" method="post"> 
                            <input type="text" placeholder="Username" name="Username" required>
                            <input type="text" placeholder="Email" name="Email" required>
                            <input type="password" placeholder="Password" name="Password">
                            <button type="submit" class="btn">Register</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col-1">
                    <h3>Download Our App</h3>
                    <p>Downlaod App for Android and ios mobile phone.</p>

                    <div class="app-logo">
                        <img src="play-store.png" alt="">
                        <img src="app-store.png" alt="">
                    </div>
                </div>

                <div class="footer-col-2">
                    <img src="logo (2).png" alt="">
                    <p>Our Purpose Is To Sustainably Make the Pleasure and Benifits of Sports Accessible to the many</p>
                </div>

                <div class="footer-col-3">
                    <h3>Useful Links</h3>
                    <ul>
                        <li>Coupons</li>
                        <li>Blog Post</li>
                        <li>Return Policy</li>
                        <li>Join Affilate</li>
                    </ul>
                </div>

                <div class="footer-col-4">
                    <h3>Folllow Us</h3>
                    <ul>
                        <li>FaceBook</li>
                        <li>Twitter</li>
                        <li>Instagram</li>
                        <li>Youtube</li>
                    </ul>
                </div>
            </div>

            <hr>
            <p class="copyright">Copyright 2023 - Rajat Creations</p>
        </div>
    </div>fv


    <script src="index.js"></script>
</body>
</html>