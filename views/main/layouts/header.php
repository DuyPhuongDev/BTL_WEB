<?php
  session_start();
  if (isset($_SESSION['guest']))
  {
    require_once('models/user.php');
    $data = User::get($_SESSION['guest']);
  }
  
?>
<!DOCTYPE html>
<html lang="vi">

<head>

<meta charset="UTF-8">
<meta name="description" content="HCMUT.">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>HCMUT</title>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" charset="utf-8"></script>
<script src="https://code.jquery.com/jquery-3.6.2.js" integrity="sha256-pkn2CUZmheSeyssYw3vMp1+xyub4m+e+QK4sQskvuo4=" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">

<style>
.nav-item {
    background: #252525;
    display: flex;
    justify-content: center; /* Centers the navbar items within the container */
    position: relative; /* Allows absolute positioning for the login button */
    padding: 0;
}
.nav-item .nav-menu {
  display: inline-flex;
  position: relative;
  float: right;
}
.nav-menu ul {
    display: flex;
    justify-content: center; /* Centers the menu items */
    list-style-type: none;
    padding: 0;
    margin: 0;
}

.login-hover {
    position: absolute;
    right: 20px; /* Adjust this value to control the distance from the right edge */
    top: 50%; /* Centers vertically within the navbar */
    transform: translateY(-50%); /* Centers the element vertically */
}

.nav-item .nav-menu li {
  list-style: none;
  display: inline-block;
  margin-left: -5px;
  position: relative;
}
.nav-item .nav-menu li.active a {
  background: #fe4231;
}

.nav-item .nav-menu li a {
  font-size: 14px;
  font-weight: 700;
  display: block;
  color: #ffffff;
  border-right: 2px solid #3b3b3b;
  text-transform: uppercase;
  padding: 16px 42px 15px;
  -webkit-transition: all 0.3s;
  -o-transition: all 0.3s;
  transition: all 0.3s;
}

.nav-item .nav-menu li:first-child a {
  border-left: none;
} 
.insidelog a {
    color: #fe4231;
    text-decoration: none;
}  
.product-item .pi-text .product-price {
    color: #fe4231;
    font-size: 20px;
    font-weight: 700;
}
.product-item .pi-pic img {
    min-width: 100%;
}
img {
    max-width: 100%;
    vertical-align: middle;
    border-style: none;
}
.product-item .pi-text a h5 {
    color: #252525;
}
</style>
</head>


<body>
<header class="header-section">
    </div>
        <div class="nav-item">
                <nav class="nav-menu mobile-menu">
                    <ul>
                        <li class="nav-item"><a href="index.php?page=main&controller=layouts&action=index" class="nav-link">Home</a></li>
                        <li class="nav-item"><a href="index.php?page=main&controller=about&action=index">About</a></li>
                        <li class="nav-item"><a href="index.php?page=main&controller=contact&action=index">Contact</a></li>
                        <li class="nav-item"><a href="index.php?page=main&controller=sale&action=index">Sale</a></li>
                        <li class="nav-item"><a href="index.php?page=main&controller=products&action=index">Product</a></li>
                        <li class="nav-item"><a href="index.php?page=main&controller=blog&action=index">News</a></li>
                    </ul>
                </nav>
                    <div class="login-hover">
                        <div class="insidelog">
                            <?php  if (!isset($_SESSION["guest"])){
                                echo "<a href='index.php?page=main&controller=login&action=index' class='btn logbtn' style='width: 200px; height:40px'>Login</a>";
                            } else {
                                echo "<a href='index.php?page=main&controller=login&action=logout' class='btn logbtn' style='width: 200px; height:40px'>Log Out</a>";
                            } ?>
                            
                        </div>
                    </div>
        </div>
</header>
    <!-- Header End -->