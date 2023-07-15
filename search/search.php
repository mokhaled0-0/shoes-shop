<?php
include 'sdb.php';
?>
<!DOCTYPE html>
<html lang="en">
    <style>
        *{
    margin: 0;
    padding: 0;
}

.search{
    text-align: center;
    text-transform: capitalize;
}

.pack{

    border: solid 0.5em black;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    margin-top: 5em; 
    width: 30rem;
    display: block;
    margin: auto;
    margin-top: 1em;
    border-radius:5em ;
    background-color: pink;
    
   
    text-align: center;
}
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
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <title>search engine</title>
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
                <img width="50" src="cart.png">
            </nav>
        </div>
<h1 class="search"> Search page</h1>
<div class="sr">
<?php
    if(isset($_POST['ss'])){
        $search= mysqli_real_escape_string($conn1,$_POST['search']);
        $sql="SELECT name,loc FROM store WHERE name LIKE '%$search%' OR loc LIKE '%$search%' ;";
        $result=mysqli_query($conn1,$sql);
        $qr=mysqli_num_rows($result);
         echo "<h1  class='search'> there are ".$qr." results</h1>";

        if($qr>0){
            while($row=mysqli_fetch_assoc($result)){
                echo "<div class='pack' ><div> <h3> Name of item: ".$row['name']."</h3><h3> Available in brunches: ".$row['loc']."</h3></div></div>";

            }

        }
        else{ echo '<p class="pack">There are no results matching your search...</p>';}

    }


?>
</div>

</body>
</html>