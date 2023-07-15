<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>search</title>
  <style>
    body{
    background-image: url("search.jpg");
    background-repeat: no-repeat;
    background-size: cover;
}

.navbar {
    display: flex;
    align-items: center;
    background-color: pink;
    padding: 0px 100px;
    margin: 0%;
}

nav {
    flex: 1;
    text-align: right;
    justify-content: space-between;
    align-items: center;
}

nav ul {
    display: inline-block;
    list-style-type: none;
}

nav ul li {
    display: inline-block;
    margin-right: 20px;
}

.logo img {
    width: 200px;
    height: 100px;
}

a {
    text-decoration: none;
    color: rgb(5, 5, 5);
    ;
}

.navbar ul li::after {
    content: '';
    width: 0%;
    height: 2px;
    background: tomato;
    display: block;
    margin: auto;
    transition: 0.5s;
}

.navbar ul li:hover::after {
    width: 100%;
}
  </style>
</head>
<body>
<p class='clock' style="color: black;"></p>
    <div class="header">
        <div class="navbar">
            <div class="logo">
                <a href="index.html"><img src="logo.png" width="120px"></a>
            </div>
            <nav>
                <ul>
                    <li><a target="_blank" href="index.html">Home</a></li>
                    <li><a target="_blank" href="about.html" target="_blank">About</a></li>
                    <li><a target="_blank" href="contact.html" target="_blank">Contact</a></li>
                    <li><a target="_blank" href="payment.html" target="_blank">Pay</a></li>
                    <li><a target="_blank" href="sign-in.html" target="_blank">Sign In</a></li>
                    <li><a target="_blank" href="register.html" target="_blank">Sign Up</a></li>
                </ul>
                <img width="40px" src="cart.png">
            </nav>
</div>
    </div>
    <br><br><br><br><br><br>
        <nav class="a">
  <div class="aa">
  <form class="d-flex" action="search.php" method="post">
        <center><input style="width:600px;height:40px;" class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="search"></center>
        <center><button 
    style="    display: inline-block;
    background: #ff523b;
    color: #fff;
    padding: 8px 30px;
    margin: 30px 0;
    border-radius: 30px;
    transition: 0.5s;"  
    name="ss" type="submit">Search</button></center>
      </form>
    </div>
  </nav>
</body>
</html>