<?php
include('config.php');
?>

<!DOCTYPE html>
<html lang="en">

<meta charset="UTF-8">
<meta name="description" content="Inferno Co.">
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
</style>
</head>

<body>

    <!-- Page Pre Load Section-->
    <div id="preload">
        <div class="load">
        </div>
    </div>
    <!-- Header Section-->
    <header class="header-section">
        </div>
        <div class="nav-item">
                <nav class="nav-menu mobile-menu">
                    <ul>
                        <li class="<?php if ($active == 'Home') echo "active" ?>"><a href="index.php">Home</a></li>
                        <li class="<?php if ($active == 'About') echo "active" ?>"><a href="shop.php">About</a></li>
                        <li class="<?php if ($active == 'Blog') echo "active" ?>"><a href="contact.php">Blog</a></li>
                        <li class="<?php if ($active == 'Sale') echo "active" ?>"><a href="index.php">Sale</a></li>
                        <li class="<?php if ($active == 'Product') echo "active" ?>"><a href="shop.php">Product</a></li>
                        <li class="<?php if ($active == 'New') echo "active" ?>"><a href="contact.php">New</a></li>
                    </ul>
                </nav>
                    <div class="login-hover">
                        <div class="insidelog">
                            <?php if ($_SESSION['customer_email'] == 'unset') {
                                echo "<a href='login.php' class='btn logbtn' style='width: 200px; height:40px'>Login</a>";
                            } else {
                                echo "<a href='logout.php' class='btn logbtn' style='width: 200px; height:40px'>Log Out</a>";
                            } ?>
                        </div>
                    </div>
    </header>
    <!-- Header End -->