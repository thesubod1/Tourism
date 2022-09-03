<?php 
    include(__DIR__.'/inc/header.php');
    
    include(__DIR__.'/inc/footer.php');
?>


<!DOCTYPE html>
<html>
    <head>
        <title>Places</title>
        <link rel="stylesheet" href="<?php echo site_url().'/Assets/css/places.css';?>"/>
    </head>
    <body>
        <div class="places-list">
            <div class="places-list-container">
                <div class="places-img-section">
                    <div class="img" style="background-image:url(pictures/ktm.jpg)"></div>
                    <div class="img-btn"><a href="#">KATHMANDU</a></div>
                </div>
                <div class="places-img-section">
                    <div class="img" style="background-image:url(pictures/bhaktpur.jpg)"></div>
                    <div class="img-btn"><a href="#">BHAKTPUR</a></div>
                </div>
                <div class="places-img-section">
                    <div class="img" style="background-image:url(pictures/lumbini.jpg)"></div>
                    <div class="img-btn"><a href="#">LUMBINI</a></div>
                </div>
                <div class="places-img-section">
                    <div class="img" style="background-image:url(pictures/lukla.webp)"></div>
                    <div class="img-btn"><a href="#">LUKLA</a></div>
                </div>
                <div class="places-img-section">
                    <div class="img" style="background-image:url(pictures/nagarkot.jpg)"></div>
                    <div class="img-btn"><a href="#">NAGARKOT</a></div>
                </div>
                <div class="places-img-section">
                    <div class="img" style="background-image:url(pictures/chitwan.jpg)"></div>
                    <div class="img-btn"><a href="#">CHITWAN</a></div>
                </div>
            </div>
        </div>
        <div class="more-recommendation-ribbon">
            <div class="ribbon-container">
                <div class="text"><p>More Recommended Places</p></div>
            </div>
        </div>

        <div class="more-recommendation-section">
            <div class="more-recommendation-container-1">
               <div class="recommended-img">
                <div class="recommendation-section-img" style="background-image:url(pictures/Annapurna.jpg)"><span class="overlay"></span><span class="overlay-text">ANNAPURNA</span></div>
               </div>
               <div class="recommended-img">
                    <div class="recommendation-section-img" style="background-image:url(pictures/namche-bazzar.jpg)"><a href="#"><span class="overlay"></span></a><span class="overlay-text">NAMCHE BAZZAR</span></div>
               </div>
            </div>
            <div class="more-recommendation-container-2">
               <div class="recommended-img">
                    <div class="recommendation-section-img" style="background-image:url(pictures/mardi.jpg)"><span class="overlay"></span><span class="overlay-text">MARDI</span></div>
               </div>
               <div class="recommended-img">
                    <div class="recommendation-section-img" style="background-image:url(pictures/dhulikhel.png)"><span class="overlay"></span><span class="overlay-text">DHULIKHEL</span></div>
               </div>
            </div>
            <div class="more-recommendation-container-1">
               <div class="recommended-img">
                    <div class="recommendation-section-img" style="background-image:url(pictures/theme1.jpg)"><span class="overlay"></span><span class="overlay-text">POKHARA</span></div>
               </div>
               <div class="recommended-img">
                    <div class="recommendation-section-img" style="background-image:url(pictures/phoksundo.jpeg)"><span class="overlay"></span><span class="overlay-text">SHEY PHOKSUNDO</span></div>
               </div>
            </div>
            <div class="more-recommendation-container-2">
               <div class="recommended-img">
                    <div class="recommendation-section-img" style="background-image:url(pictures/patan.jpg)"><span class="overlay"></span><span class="overlay-text">PATAN</span></div>
               </div>
               <div class="recommended-img">
                    <div class="recommendation-section-img" style="background-image:url(pictures/mustangg.jpg)"><span class="overlay"></span><span class="overlay-text">MUSTANG</span></div>
               </div>
            </div>
        </div>
    </body>
</html>