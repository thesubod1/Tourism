<?php 
    include(__DIR__.'/inc/header.php');
    
    include(__DIR__.'/inc/footer.php');
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Homepage</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
        <link rel="stylesheet" href="<?php echo site_url().'/assets/css/index.css'; ?>" />
    </head>
    <body>
        <div class="adv-slider">
            <div class="slider-wrapper">
                <div class="theme-img" style="background-image:url(pictures/theme1.jpg)"></div>
            </div>
            <div class="slider-wrapper">
                <div class="theme-img" style="background-image:url(pictures/theme2.jpg)"></div>
            </div>
            <div class="slider-wrapper">
                <div class="theme-img" style="background-image:url(pictures/theme3.jpg)"></div>
            </div>
            <div class="slider-wrapper">
                <div class="theme-img" style="background-image:url(pictures/theme4.jpg)"></div>
            </div>
        </div>
        <hr/>

        <div class="reservation-center">
            <div class="reservation-wrapper">
                <div class="reservation-text">
                    <p>Reservations</p>
                </div>
                <div class="reservation-div-container">
                    <div class="reservation-img">
                        <div class="vacation" style="background-image:url(pictures/vacation.jpg)"></div>
                        <div class="type"><p>Vacation</p></div>
                    </div>
                    <div class="reservation-img">
                        <div class="vacation" style="background-image:url(pictures/tour.jpg)"></div>
                        <div class="type"><p>Tours</p></div>
                    </div>
                    <div class="reservation-img">
                        <div class="vacation" style="background-image:url(pictures/hotel.jpg)"></div>
                        <div class="type"><p>Hotels</p></div>
                    </div>
                    <div class="reservation-img">
                        <div class="vacation" style="background-image:url(pictures/foods.jpg)"></div>
                        <div class="type"><p>Foods</p></div>
                    </div>
                    <div class="reservation-img">
                        <div class="vacation" style="background-image:url(pictures/adventure.jpg)"></div>
                        <div class="type"><p>Adventures</p></div>
                    </div>
                </div>
            </div>
        </div>

        <hr/>
        <div class="type-of-vacation">
            <div class="type-wrapper">
                <div class="type-text">
                    <p>Choose your type of vacation</p>
                </div>
            </div>

           <div class="choose-box">
                <form action="" method="get">
                    <div class="choose-box-container">
                        <div class="culture">
                            <input type="checkbox" name="type-of" value="culture"/><label>Culture</label>
                        </div>
                        <div class="culture">
                            <input type="checkbox" name="type-of" value="Events"/><label>Events</label>
                        </div>
                         <div class="culture">
                            <input type="checkbox" name="type-of" value="Nature"/><label>Nature</label>
                        </div>
                        <div class="culture">
                            <input type="checkbox" name="type-of" value="Adventures"/><label>Adventures</label>
                        </div>
                    </div>
                    <div class="choose-submit-btn">
                        <input type="submit" class="btn" name="submit" value="Submit"/>
                    </div>
                </form>
            </div>
           </div>
        </div>
        <hr/>
        <div class="highlight-sections">
            <div class="highlight-text-container">
                <p class="highlight-text-main">HIGHLIGHTS</p>
            </div>

            <div class="highlights">
                <div class="highlights-container">
                    <div class="highlight-img" style="background-image:url(pictures/pokhara.jpg);"></div>
                    <div class="highlight-text">
                        <p class="heading">POKHARA</p>
                        <p class="info-text">
                            Pokhara is one of the most important cities
                            of Nepalas it attracts thousands of national
                            and international tourists daily.It plays
                            as vital role in development of tourism sector
                            in Nepal.It is also very important tradingroute
                            between India and China.Pokhara has something for
                            everyone: whether lakeside relaxation.pokhara is 
                            the city of lakes and it has more that 15 lakes
                            including Phewa Lake Begnas Lake, Rupa Lake,
                            Dipang Lake, Khaste Lake, Maidi Tal,Niureni Tal,
                            Gude Tal, Kamal Pokhari Tal,
                            Kashyap Tal (Thuli Pokhari) etc. so, boating in
                            open lake is one of the major attraction of pokhara.
                            The beautiful emerald lakes with Lakeside on it’s
                            banks is the heart of tourism in Pokhara. 
                            Walking on the lakeshore at sunset is beautiful.Go 
                            for a boat ride on the lake, many birds to see,
                            paddle around the little island hosting the 
                            Tal Barahi Temple Pokhara’s most famous Hindu temple. 
                            You can paddle around the lake in the brightly 
                            painted doongas(boats) available for rent at 
                            Lakeside or hire the doonga with a boatsman.
                        </p>
                    </div>
                    <div class="highlight-text">
                    <p class="heading">MUSTANG</p>
                        <p  class="info-text">
                            Mustangs history as an independent kingdom began
                            after 1380, when Ame Pal, a warrior and devout
                            Buddhist from Western Tibet, built the fortress
                            of Ketcher Dzong. With his sons, he defeated the
                            local warlords and constructed a walled capital 
                            Lo-Manthang. The present king Jigmi Plbar Bista 
                            is believed to be his twenty-first descendant in 
                            the direct line. The introduction of a constitutional 
                            monarchy in Nepal in 1951 resulted in Mustang becoming 
                            a district, and took away much of the King’s power.
                            Following the Chinese exaction of full control over 
                            Tibet in 1959, the Khampa guerillas based their 
                            resistance movement in Lo. The Nepal government 
                            declared the Mustang District a restricted area.
                            Mustang used be an important means of crossing 
                            the Himalaya from Tibet to Nepal, and many of 
                            the old salt caravans passed through Mustang.
                            Now,Mustang is one of the most important tourism 
                            destination of nepal for both local and international tourists.
                        </p>
                    </div>
                    <div class="highlight-img" style="background-image:url(pictures/mustang.jpg);"></div>
                </div>
            </div>
        </div>

        

















    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
	<script>
		$(document).ready(function(){
			$(".adv-slider").slick({
				slideToShow: 1,
				slideToScroll: 1,
				autoplay: true,
				dots: false,
				arrow: false,
			});
		});
	</script>
    </body>
</html>