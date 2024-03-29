<!DOCTYPE html>
<?php 
    require_once(__DIR__.'/function.php');
?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="<?php echo site_url().'/assets/css/grid.css'; ?>" />
        <link rel="stylesheet" href="<?php echo site_url().'/assets/css/header.css'; ?>" />
        <link rel="stylesheet" href="<?php echo site_url().'/assets/css/mobilemenu.css'; ?>" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
        <link rel="stylesheet" href="<?php echo site_url().'/assets/css/index.css'; ?>" />
    </head>
<body>
    <header class="site-url">
        <div class="nav-container">
            <nav class="site-navigation desktop">
                <ul class="primary-menu" id="primary-menu">
                    <li><a href="<?php echo site_url().'/index.php'; ?>">Home</a></li>
                    <li><a href="<?php echo site_url().'/places.php'; ?>">Places</a></li>
                    <li><a href="<?php echo site_url().'/adventures.php';?>">Adventures</a></li>
                    <li><a href="#">Blog</a></li>

                   <!--<div class="side-nav">
                        <div class="side-nav-container">
                            <div class="search-icon"><ion-icon name="search"></ion-icon></div>
                            <div class="login-icon" id = "deactive"><ion-icon name="person"></ion-icon></div></button>
                            <div class="login-img" id = "active" style="background-image:url(<?php echo site_url().'../pictures/adventure.jpg'; ?>)"></div>
                            <div class="map-icon" style="background-image:url(<?php echo site_url().'../pictures/map.jpg'; ?>)"></div>
                        </div>
                    </div>-->
                </ul>
            </nav>
        </div>
    </header>

