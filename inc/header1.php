<!DOCTYPE html>
<?php 
    require_once(__DIR__.'/function.php');
?>
<html>
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo site_url().'../Assets/css/header.css'; ?>" />
    <link rel="stylesheet" href="<?php echo site_url().'../Assets/css/mobilemenu.css'; ?>" />
    </head>
 <style>

body
{
    color: #7C7C7C;
}

.site-url
{
    max-width: 100%;
}


.desktop .primary-menu
{
   display: flex;
   flex-wrap: wrap;
   list-style: none;
   margin-top: 0px;
   justify-content: space-between;
   max-width: 100%;
   
}

.desktop .primary-menu a
{
    color: black;
    text-decoration: none;
    padding: 15px 35px 5px 35px;
    display: flex;
    font-size: 20px;
    
}



.desktop  a:hover
{
    border-bottom: 3px solid #f2cb07;
    color: #f2cb07;
}   

.side-nav .side-nav-container
{
    display:grid;
    grid-template-rows: 300px;
    grid-template-columns: 100px 100px 100px;
    padding: 20px 15px;
    position: relative;
    max-height: 50px;
}

.side-nav-container div
{
    max-height: 35px;
    
}

.side-nav-container
{
    
    position: relative;
   left: 50px;

}

 .side-nav .map-icon
{
    height: 50px;
    width: 50px;
    background-position: center;
    background-size: cover;
    background-repeat: no-repeat;

}

.side-nav .search-icon, .login-icon
{
    font-size: 25px;
}

.login-icon, #deactive
{
    display: none;
}

.login-icon
{
    display: none;
}

.login-img, #active
{
    display: inline;
}

#active 
{
    display: inline;
    width: 35px;
    border-radius: 50%;
    background-position: center;
    background-size: cover;
    background-repeat: no-repeat;
    
}
</style>
<body>
    <header class="site-url">
        <div class="nav-container">
            <nav class="site-navigation desktop">
                <ul class="primary-menu" id="primary-menu">
                    <li><a href="<?php echo site_url().'../index.php'; ?>">Home</a></li>
                    <li><a href="<?php echo site_url().'../places.php'; ?>">Places</a></li>
                    <li><a href="<?php echo site_url().'../adventures.php';?>">Adventures</a></li>
                    <li><a href="#">Blog</a></li>

                    <div class="side-nav">
                        <div class="side-nav-container">
                            <div class="search-icon"><a href="#"><ion-icon name="search"></ion-icon></a></div>
                            <div class="login-icon" id = "deactive"><a href="#"><ion-icon name="person"></ion-icon></a></div></button>
                            <a href="#"><div class="login-img" id = "active" style="background-image:url(<?php echo site_url().'../pictures/adventure.jpg'; ?>)"></div></a>
                            <a href="#"><div class="map-icon" style="background-image:url(<?php echo site_url().'../pictures/map.jpg'; ?>)"></div></a>

                        </div>
                    </div>
                </ul>
            </nav>
        </div>
    </header>
<script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>

