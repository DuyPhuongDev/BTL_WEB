<?php
    
  // session_start();
  // print_r($_SESSION);
  // if (isset($_SESSION['guest']))
  // {
  //   require_once('model/User.php');
  //   $data = User::get($_SESSION['guest']);
  // }
    if(sizeof($_GET)==0){
        $current_page = 'main';
        $current_controller = 'home';
        $current_action = 'index';
    }else{
        $current_page = isset($_GET['page']) ? $_GET['page'] : '';
        $current_controller = isset($_GET['controller']) ? $_GET['controller'] : '';
        $current_action = isset($_GET['action']) ? $_GET['action'] : '';
    }
    // echo $current_page.'<br>';
    // echo $current_controller.'<br>';
    // echo $current_action.'<br>';

    $folderPath = 'views/'.$current_page.'/'.$current_controller;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inferno Co.</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome for Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo $folderPath."/style.css" ?>">
    <style>
        /* Custom styles */
        .navbar-brand {
            color: #ff4433;
            font-family: 'Roboto', sans-serif;
            font-size: 24px;
            font-weight: bold;
        }
        .navbar-nav .nav-link {
            color: #ffffff;
            font-weight: bold;
        }
        .navbar-nav .nav-link.active {
            color: #ff4433;
        }
        .search-bar {
            max-width: 300px;
        }
        .social-icon a {
            color: #333;
            margin-right: 10px;
        }
        /* Show dropdown on hover */
        .dropdown:hover .dropdown-menu {
            display: block;
        }
        footer {
            font-family: Arial, sans-serif;
        }

        footer h5, footer h6 {
            color: #ff4a4a;
        }

        footer p a:hover {
            color: #ff4a4a;
        }

        footer .form-control {
            border-radius: 5px;
        }

        footer .btn-danger {
            background-color: #ff4a4a;
            border: none;
            border-radius: 5px;
        }

        footer .btn-danger:hover {
            background-color: #e84343;
        }

        footer .text-danger {
            color: #ff4a4a !important;
        }
        
    </style>
    
</head>
<body>
    <!-- Header Section -->
    <header class="bg-light header-section">
        <!-- Header Top: Social Icons and Login -->
        <div class="header-top bg-white py-2">
            <div class="container d-flex justify-content-between align-items-center">
                <div class="social-icon">
                    <a href="https://facebook.com"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
                <div class="login">
                    <a href="#" class="text-dark"><i class="fas fa-user"></i> Login</a>
                </div>
            </div>
        </div>

        <!-- Header Main: Brand and Search -->
        <div class="header-main bg-light py-3">
            <div class="container d-flex justify-content-between align-items-center">
                <!-- Brand -->
                <a href="#" class="navbar-brand">BKSHOP Co.</a>
                <!-- Search bar -->
                <form class="d-flex search-bar">
                    <input class="form-control" type="search" placeholder="Search our Store" aria-label="Search">
                    <button class="btn btn-danger" type="submit"><i class="fas fa-search"></i></button>
                </form>
            </div>
        </div>

        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <!-- Dropdown for All Categories -->
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="categoriesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-bars"></i> All Categories
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="categoriesDropdown">
                                <li><a class="dropdown-item" href="#">Jacket</a></li>
                                <li><a class="dropdown-item" href="#">T-Shirt</a></li>
                                <li><a class="dropdown-item" href="#">Jeans</a></li>
                                <li><a class="dropdown-item" href="#">Hoodie</a></li>
                                <li><a class="dropdown-item" href="#">Shoe</a></li>
                            </ul>
                        </li>
                    </ul>
                    <!-- Right-side menu links -->
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link <?= ($current_page == 'main' && $current_controller == 'home' && $current_action == 'index') ? 'active' : '' ?>" href="index.php?page=main&controller=home&action=index">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?= ($current_page == 'main' && $current_controller == 'about' && $current_action == 'index') ? 'active' : '' ?>" href="index.php?page=main&controller=about&action=index">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?= ($current_page == 'main' && $current_controller == 'products' && $current_action == 'index') ? 'active' : '' ?>" href="index.php?page=main&controller=products&action=index">Shop</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?= ($current_page == 'main' && $current_controller == 'blog' && $current_action == 'index') ? 'active' : '' ?>" href="index.php?page=main&controller=blog&action=index">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?= ($current_page == 'main' && $current_controller == 'contact' && $current_action == 'index') ? 'active' : '' ?>" href="index.php?page=main&controller=contact&action=index">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?page=admin&controller=home&action=index">Admin</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

