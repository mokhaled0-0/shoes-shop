<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <title>search</title>
    <!-- <link rel="stylesheet" href="css/home1.css"> -->
<style>
  .navbar {
    display: flex;
    align-items: center;
    background-color: #fff;
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

.col-3:hover {
    box-shadow: 50px 0 500px rgba(147, 47, 5, 0.2);
}

p {
    color: #555;
}

.contaniner {
    max-width: 1300px;
    margin: auto;
    padding-left: 25px;
    padding-right: 25px;
}

.row {
    display: flex;
    align-items: center;
    flex-wrap: wrap;
    justify-content: space-around;
}

.col-2 {
    flex-basis: 50%;
    min-width: 300px;
}

.col-2 img {
    max-width: 100%;
    padding: 50px 0;
}

.col-2 h1 {
    font-size: 50px;
    line-height: 60px;
    margin: 25px 0;
}

.btn {
    display: inline-block;
    background: #ff523b;
    color: #fff;
    padding: 8px 30px;
    margin: 30px 0;
    border-radius: 30px;
    transition: 0.5s;
}

.btn:hover {
    background: #563434;
}

.header {
    background: radial-gradient(#fff, #fff);
}

.header .row {
    margin-top: 0px;
}

.categories {
    margin: 70px 0;
}

.col-3 {
    flex-basis: 30%;
    min-width: 250px;
    margin-bottom: 30px;
}

.col-3 img {
    width: 100%;
}

.small-container {
    max-width: 1080px;
    margin: auto;
    padding-left: 25px;
    padding-right: 25px;
}

#op {
    font-size: 50px;
}

section {
    padding: 5rem 9%;
}

.heading {
    text-align: center;
    margin-bottom: 3rem;
}

.heading span {
    color: rgb(255, 85, 0);
}

.heading h3 {
    padding: 1rem 0;
}

.products .slide {
    text-align: center;
}

.products .slide img {
    height: 25rem;
    margin: 5rem 0;
    -webkit-transform: scale(0.5);
    transform: scale(0.5);
}

.products .slide h3 {
    padding: 1rem 0;
    font-size: 2.5rem;
    color: #444;
    text-transform: capitalize;
}

#id2 {
    margin-left: 25pc;
}

#id3 {
    margin-left: 50pc;
}

:root {
    --bg: rgb(10, 10, 10);
    --bg-light: #b7530744;
    --text: white;
    --hover: rgb(255, 85, 0);
    --light: #ffff0031;
}

footer {
    background: var(--bg-light);
    line-height: 24px;
    color: var(--text);
}

footer .art {
    background-color: var(--bg);
    padding: 16px;
    padding-top: 48px;
    clip-path: polygon(0% 5%, 15% 0%, 100% 10%, 100% 100%, 0% 100%);
}

footer .content {
    max-width: 1080px;
    margin: auto;
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    grid-gap: 16px;
}

footer header {
    font-size: 21px;
    padding-block: 16px;
}

footer .content a {
    display: block;
    padding-block: 12px;
    color: var(--text);
    opacity: 0.65;
}

footer .content a:hover {
    opacity: 1;
    color: var(--hover);
    font-size: 18px;
}

footer input {
    border-style: solid;
    line-height: 24px;
    padding: 12px 16px;
    font-size: 1rem;
    width: 100%;
    margin-block: 8px;
    border-radius: 8px;
    border-width: 2px;
}

footer input[type='email'] {
    background-color: transparent;
    border-color: var(--text);
    color: var(--text);
}

footer input[type='email']:hover,
footer input[type='email']:focus {
    border-color: var(--hover);
    color: var(--hover);
}

footer input[type='submit']:hover {
    background-color: var(--hover);
}

footer .social {
    margin-block: 16px;
    display: grid;
    grid-template-columns: repeat(5, 1fr);
    grid-gap: 16px;
}

footer .social i {
    font-size: 32px;
    padding: 12px;
    text-align: center;
    border: 1px solid var(--light);
    border-radius: 8px;
    width: 100%;
}

footer .social i:hover {
    color: var(--hover);
    border-color: var(--hover);
    box-shadow: 0px 0px 16px inset var(--light);
}

footer .notice {
    text-align: center;
    padding: 24px;
}

footer .notice strong {
    color: var(--hover);
    text-transform: uppercase;
}

#fc {
    background: #3B5998;
    color: white;
}

#yt {
    background: #bb0000;
    color: white;
}

#in {
    background: #f09433;
    background: -moz-linear-gradient(45deg, #f09433 0%, #e6683c 25%, #dc2743 50%, #cc2366 75%, #bc1888 100%);
    background: -webkit-linear-gradient(45deg, #f09433 0%, #e6683c 25%, #dc2743 50%, #cc2366 75%, #bc1888 100%);
    background: linear-gradient(45deg, #f09433 0%, #e6683c 25%, #dc2743 50%, #cc2366 75%, #bc1888 100%);
    filter: progid: DXImageTransform.Microsoft.gradient( startColorstr='#f09433', endColorstr='#bc1888', GradientType=1);
}

#tw {
    background: #55ACEE;
    color: white;
}

#lin {
    background: #007bb5;
    color: white;
}

#vi {
    margin-left: 25pc;
    margin-bottom: 15pc;
    width: 50%;
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
            </nav>
        </div>
        
</body>