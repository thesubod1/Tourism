<?php 
    require_once(__DIR__.'/function.php');
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tourism</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,500;0,600;0,700;0,800;1,400;1,500;1,600;1,700;1,800&family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo site_url().'/assets/css/grid.css'; ?>" />
        <link rel="stylesheet" href="<?php echo site_url().'/assets/css/nav.css'; ?>" />
        <link rel="stylesheet" href="<?php echo site_url().'/assets/css/header.css'; ?>" />
        <link rel="stylesheet" href="<?php echo site_url().'/assets/css/mobile-menu.css'; ?>" />
        <link rel="stylesheet" href="<?php echo site_url().'/assets/css/style.css'; ?>" />
    </head>
<body> 
    <header class="site-header" >
        <div class="container">
            <nav class="site-navigation desktop">
                <ul class="primary-menu" id="primary-menu">
                <li> <a href="#">Home</a></li>
                <li><a href="#">Places</a></li>
                <li><a href="#">Bucket Lists</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Login</a></li>
                <li><a href="#"> <div class="login-box">
                <div class="login-box-wrapper">
                <div class="login-img" style ="background-image:url('assets/pictures/dummyimg.jpg');"></div>
                </div></a></li>
                </ul>
            </nav>
            <div class="menu-icon-section">
                <button class="menu-icon" id="menu-icon">
                    <span class="line line-1"></span>
                    <span class="line line-2"></span>
                    <span class="line line-3"></span>
                </button>
            </div>

           
        </div>
           
        </div><!-- .container -->
    </header> 

    <div class="mobile-menu-section" id="mobile-menu">
        <button id="mobile-menu-close">Close</button> 
        <div class="mobile-menu-wrapper"></div>
    </div>