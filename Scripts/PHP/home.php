<!DOCTYPE html>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8" />
	<title>Aashiyana:Pin Your Abode</title>





<!-- here is the code for popup   -->







<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>










<!--   end-->



<link rel="stylesheet" href="bootstrap-3.3.2/dist/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="bootstrap-3.3.2/dist/js/bootstrap.min.js"></script>

</head>
<style>
.img-container {
    position: relative;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    display: flex; /* add */
    justify-content: center; /* add to align horizontal */
    align-items: center; /* add to align vertical */
}
    
    .fade-in {
    opacity:0;  /* make things invisible upon start */
    -webkit-animation:fadeIn ease-in 1;  /* call our keyframe named fadeIn, use animattion ease-in and repeat it only 1 time */
    -moz-animation:fadeIn ease-in 1;
    animation:fadeIn ease-in 1;
 
    -webkit-animation-fill-mode:forwards;  /* this makes sure that after animation is done we remain at the last keyframe value (opacity: 1)*/
    -moz-animation-fill-mode:forwards;
    animation-fill-mode:forwards;
 
    -webkit-animation-duration:1s;
    -moz-animation-duration:1s;
    animation-duration:1s;
}
#grad1 {
    background: -webkit-linear-gradient(#57D9FF, #FFFFFF); /* For Safari 5.1 to 6.0 */
    background: -o-linear-gradient(#57D9FF, #FFFFFF); /* For Opera 11.1 to 12.0 */
    background: -moz-linear-gradient(#57D9FF, #FFFFFF); /* For Firefox 3.6 to 15 */
    background: linear-gradient(#57D9FF, #FFFFFF); /* Standard syntax (must be last) */
}
 
.fade-in.one { 
-webkit-animation-delay: 0.7s;
-moz-animation-delay: 0.7s;
animation-delay: 0.7s;
}
</style>
<body>






	



























<div id="image1" style="position:absolute;  left:1px; top:60px; width:1366px; height:567px;"><img src="images/back.JPG" alt="" title=""width="1366" height="567"></div>

          




     	<div class='h1 service-title'>
           Look Up Places to Buy  
</div>


<!-- old code  -->


	<link rel="stylesheet" type="text/css" href="css/style.css" />
	<!--[if IE 7]>
		<link rel="stylesheet" type="text/css" href="css/ie7.css" />
	<![endif]-->
</head>
<body>
	<div id="page">
		<div id="header">

<!--dcdcdc gggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggg-->







   	<!--dcdcdc gggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggg-->





			<div>
		<!--		<a href="index.html"><img src="images/logo2.png" alt="Logo" /></a>   -->
			</div>
		<!--<ul>
				<li class="current"><a href="index.html"><span>Home</span></a></li>
				<li><a href="organic.html"><span>Organic Gardening</span></a></li>
				<li><a href="tips.html"><span>Gardening Tips &amp; Useful Links</span></a></li>
				<li><a href="blog.html"><span>Blog</span></a></li>
				<li><a href="about.html"><span>About</span></a></li>
				<li><a href="contact.html"><span>Contact</span></a></li>
			</ul>  -->
		</div>
		<div id="slider">

						 <script type="text/javascript" src="js/jssor.slider-20.min.js"></script>
    <!-- use jssor.slider-20.debug.js instead for debug -->
    <script>
        jssor_1_slider_init = function() {
            
            var jssor_1_options = {
              $AutoPlay: true,
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$
              }
            };
            
            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);
            
            //responsive code begin
            //you can remove responsive code if you don't want the slider scales while window resizes
            function ScaleSlider() {
                var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
                if (refSize) {
                    refSize = Math.min(refSize, 600);
                    jssor_1_slider.$ScaleWidth(refSize);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }
            ScaleSlider();
            $Jssor$.$AddEvent(window, "load", ScaleSlider);
            $Jssor$.$AddEvent(window, "resize", $Jssor$.$WindowResizeFilter(window, ScaleSlider));
            $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
            //responsive code end
        };
    </script>

    <style>
        
        /* jssor slider bullet navigator skin 01 css */
        /*
        .jssorb01 div           (normal)
        .jssorb01 div:hover     (normal mouseover)
        .jssorb01 .av           (active)
        .jssorb01 .av:hover     (active mouseover)
        .jssorb01 .dn           (mousedown)
        */
        .jssorb01 {
            position: absolute;
        }
        .jssorb01 div, .jssorb01 div:hover, .jssorb01 .av {
            position: absolute;
            /* size of bullet elment */
            width: 12px;
            height: 12px;
            filter: alpha(opacity=70);
            opacity: .7;
            overflow: hidden;
            cursor: pointer;
            border: #000 1px solid;
        }
        .jssorb01 div { background-color: gray; }
        .jssorb01 div:hover, .jssorb01 .av:hover { background-color: #d3d3d3; }
        .jssorb01 .av { background-color: #fff; }
        .jssorb01 .dn, .jssorb01 .dn:hover { background-color: #555555; }

        /* jssor slider arrow navigator skin 02 css */
        /*
        .jssora02l                  (normal)
        .jssora02r                  (normal)
        .jssora02l:hover            (normal mouseover)
        .jssora02r:hover            (normal mouseover)
        .jssora02l.jssora02ldn      (mousedown)
        .jssora02r.jssora02rdn      (mousedown)
        */
        .jssora02l, .jssora02r {
            display: block;
            position: absolute;
            /* size of arrow element */
            width: 55px;
            height: 55px;
            cursor: pointer;
            background: url('img/a02.png') no-repeat;
            overflow: hidden;
        }
        .jssora02l { background-position: -3px -33px; }
        .jssora02r { background-position: -63px -33px; }
        .jssora02l:hover { background-position: -123px -33px; }
        .jssora02r:hover { background-position: -183px -33px; }
        .jssora02l.jssora02ldn { background-position: -3px -33px; }
        .jssora02r.jssora02rdn { background-position: -63px -33px; }
    </style>


    <div id="jssor_1" style="position: relative; margin: 0 auto; top: 0px; left: 0px; width: 600px; height: 300px; overflow: hidden;">
        <!-- Loading Screen -->
        <div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
            <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
            <div style="position:absolute;display:block;background:url('img/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
        </div>
        <div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: 600px; height: 300px; overflow: hidden;">
            <div style="display: none;">
               <a href="gallery.html" ><img data-u="image" src="images/flat1.jpg" /></a>
            </div>
            <div style="display: none;">
                <a href="gallery.html" > <img data-u="image" src="images/flat2.jpg" /></a>
            </div>
            <div style="display: none;">
                <a href="gallery.html" > <img data-u="image" src="images/flat3.jpg" /></a>
            </div>
            <div style="display: none;">
                 <a href="gallery.html" ><img data-u="image" src="images/flat4.jpg" /></a>
            </div>
            <div style="display: none;">
                <a href="gallery.html" > <img data-u="image" src="images/flat5.jpg" /></a>
            </div>
            <div style="display: none;">
               <a hrfe= "gallery.html" ><img data-u="image" src="images/flat6.jpg" /></a>
            </div>
            <div style="display: none;">
               <a href="gallery.html" >  <img data-u="image" src="images/flat7.jpg" /></a>
            </div>
            <div style="display: none;">
                 <a href="gallery.html" ><img data-u="image" src="images/flat8.jpg" /></a>
            </div>
            <div style="display: none;">
                 <a href="gallery.html" ><img data-u="image" src="images/flat10.jpg" /></a>
            </div>
            <div style="display: none;">
               <a href="gallery.html" >  <img data-u="image" src="images/flat11.jpg" /></a>
            </div>
        </div>
        <!-- Bullet Navigator -->
        <div data-u="navigator" class="jssorb01" style="bottom:16px;right:10px;">
            <div data-u="prototype" style="width:12px;height:12px;"></div>
        </div>
        <!-- Arrow Navigator -->
        <span data-u="arrowleft" class="jssora02l" style="top:123px;left:8px;width:55px;height:55px;" data-autocenter="2"></span>
        <span data-u="arrowright" class="jssora02r" style="top:123px;right:8px;width:55px;height:55px;" data-autocenter="2"></span>
        <a href="http://www.jssor.com" style="display:none">Jssor Slider</a>
    </div>
    <script>
        jssor_1_slider_init();
    </script>













		</div>


			<div id = "hete">


            
    
    
        
            <link rel="stylesheet" data-type=basic-icons href="https://assets-0.housingcdn.com/icomoon/basic_icons/style_woff-c5c739ece2f7be099de80d47e364f95b.css" type="text/css" media="all" />
        
    

    <link rel='stylesheet' href='https://assets-0.housingcdn.com/website/stylesheets/website/all/desktop_home_page-1301139b960b8587d6b16732242375f6.css' type='text/css' media='screen' />

    <link href='/brand_favicons/favicon1.png' type="image/png" rel='shortcut icon'/>
<script type="application/ld+json">
    {
        "@context": "http://schema.org",
        "@type": "WebSite",
        "url": "https://housing.com/",
        "potentialAction": {
            "@type": "SearchAction",
            "target": "https://housing.com/in/rent/text-search?text={search_term}",
            "query-input": "required name=search_term"
        }
    }
    </script>
    <script type="application/ld+json">
    {
        "@context" : "http://schema.org",
        "@type" : "Organization",
        "url" : "https://housing.com/",
        "logo" : "https://housing.com/mini_logo.png",
        "contactPoint" : [
            {
                "@type" : "ContactPoint",
                "telephone" : "+91-3-333-333-333",
                "contactType" : "customer service"
            }
        ]
    }
    </script>
    <meta name="msapplication-config" content="/browserconfig.xml" />
</head>

<body class="buy-service-home-page home-page locality-selection-page" data-device-type=''>
        
            
            

    <div class="header-item header-nearby-filter">
        
    </div>
</header>

        

         
       
<div class='service-cards' id='buy-service-cards'>
<div class='column-container primary-cards'>
<a class='card h-track' href='gallery.html' target='_self' data-category='home_screen' data-action='open_card' } data-label='{"card_type":"lyp"}'>
<div class='card-title'>List Your Property</div><div class='card-desc'>
<div>Find suitors for your property at no cost to you</div>
<div class='card-cta'>Get Started</div>
</div></a><a class='card h-track' href='gallery.html' target='_self' data-category='home_screen' data-action='open_card' } data-label='{"card_type":"housing_select"}'>
<div class='card-title'>Housing Select</div><div class='card-desc'>
<div>Explore the best deals and offers for your dream home</div>
<div class='card-cta'>Know More</div>
</div></a><a class='card h-track' href='gallery.html' data-bypass target='_blank' data-category='home_screen' data-action='open_card' } data-label='{"card_type":"land"}'>
<div class='card-title'>Plot Projects</div><div class='card-desc'>
<div>Discover, analyze and stay updated with selected plot projects</div>
<div class='card-cta'>Explore</div>
</div></a>
</div>
<div class='secondary-cards'>
</div>




			</div>







		<div id="body">
			<ul>
				<li>
					<h1><a href="index.html">My house</a></h1>
					<div>
						<a href="gallery.html"><img src="images/flatt1.jpg" alt="Image" /></a>
					</div>
					<span>Duis Lacus Dolor Lobortis Vel Ultricies Vitae</span>
					<p>This website template has been designed by <a href="http://www.freewebsitetemplates.com/">Free Website Templates</a> for you, for free. You can replace all this text with your own text. You can remove any link to our website from this website template, you're free to use this website template without linking back to us.</p>
					<a href="gallery.html" class="readmore">Read more</a>
				</li>
				<li>
					<h1><a href="index.html">My house</a></h1>
					<div>
						<a href="gallery.html"><img src="images/flatt2.jpg" alt="Image" /></a>
					</div>
					<span>Vestibulum Ut Nisl Nec Massa Interdum Tincidunt</span>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris aliquet interdum diam, vitae tristique diam feugiat id. If you're having problems editing this website template, then don't hesitate to ask for help on the <a href="http://www.freewebsitetemplates.com/forums/">Forum</a>.</p>
					<a href="gallery.html" class="readmore">Read more</a>
				</li>
				<li>
					<h1><a href="index.html">My house </a></h1>
					<div>
						<a href="gallery.html"><img src="images/flatt3.jpg" alt="Image" /></a>
					</div>
					<span>Vestibulum Ut Nisl Nec Massa Interdum Tincidunt</span>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris aliquet interdum diam, vitae tristique diam feugiat id. If you're having problems editing this website template, then don't hesitate to ask for help on the <a href="http://www.freewebsitetemplates.com/forums/">Forum</a>
					<a href="about.html" class="readmore">Read more</a>
				</li>
			</ul>
		</div>


<div id="cities">




					


<style type="text/css">
/*----------Text Styles----------*/
.ws6 {font-size: 8px;}
.ws7 {font-size: 9.3px;}
.ws8 {font-size: 11px;}
.ws9 {font-size: 12px;}
.ws10 {font-size: 13px;}
.ws11 {font-size: 15px;}
.ws12 {font-size: 16px;}
.ws14 {font-size: 19px;}
.ws16 {font-size: 21px;}
.ws18 {font-size: 24px;}
.ws20 {font-size: 27px;}
.ws22 {font-size: 29px;}
.ws24 {font-size: 32px;}
.ws26 {font-size: 35px;}
.ws28 {font-size: 37px;}
.ws36 {font-size: 48px;}
.ws48 {font-size: 64px;}
.ws72 {font-size: 96px;}
.wpmd {font-size: 13px;font-family: Arial,Helvetica,Sans-Serif;font-style: normal;font-weight: normal;}
/*----------Para Styles----------*/
DIV,UL,OL /* Left */
{
 margin-top: 0px;
 margin-bottom: 0px;
}
</style>

</head>
<body>
<div id="image8" style="position:absolute; overflow:hidden; left:0px; top:1620px; width:1486px; height:966px; z-index:0"><img src="images/sea.JPG" alt="" title="" border=0 width=1486 height=966></div>

<div id="image2" style="position:absolute; overflow:hidden; left:87px; top:1700px; width:384px; height:254px; z-index:1"><a href="new/"target="myframe"><img src="images/pune.jpg" alt="" title="" border=0 width=384 height=234></a></div>

<div id="image3" style="position:absolute; overflow:hidden; left:86px; top:2000px; width:385px; height:253px; z-index:2"><img src="images/bengaluru.jpg" alt="" title="" border=0 width=385 height=233></div>

<div id="image4" style="position:absolute; overflow:hidden; left:876px; top:1700px; width:378px; height:255px; z-index:3"><img src="images/chennai.jpg" alt="" title="" border=0 width=378 height=235></div>

<div id="image5" style="position:absolute; overflow:hidden; left:490px; top:2000px; width:371px; height:253px; z-index:4"><img src="images/hyderabad.jpg" alt="" title="" border=0 width=371 height=233></div>

<div id="image7" style="position:absolute; overflow:hidden; left:878px; top:2000px; width:383px; height:255px; z-index:5"><img src="images/pune.jpg" alt="" title="" border=0 width=383 height=235></div>

<div id="text1" style="position:absolute; overflow:hidden; left:582px; top:1622px; width:297px; height:90px; z-index:6">
<div class="wpmd">
<div><font class="ws14"><B>Top cities in India</B></font></div>
</div></div>

<div id="image6" style="position:absolute; overflow:hidden; left:490px; top:1700px; width:368px; height:256px; z-index:7"><img src="images/mumbai.jpg" alt="" title="" border=0 width=368 height=236></div>

<div id="text2" style="position:absolute; overflow:hidden; left:248px; top:1930px; width:150px; height:60px; z-index:8">
<div class="wpmd">
<div><font class="ws14" color="black"><B>Delhi</B></font></div>
</div></div>

<div id="text3" style="position:absolute; overflow:hidden; left:216px; top:2245px; width:150px; height:60px; z-index:9">
<div class="wpmd">
<div><font class="ws14" color="black"><B>Benguluru</B></font></div>
</div></div>
<div id="text4" style="position:absolute; overflow:hidden; left:634px; top:1930px; width:150px; height:60px; z-index:10">
<div class="wpmd">
<div><font class="ws14" color="black"><B>Mumbai</B></font></div>
</div></div>
<div id="text5" style="position:absolute; overflow:hidden; left:1011px; top:1930px; width:150px; height:60px; z-index:11">
<div class="wpmd">
<div><font class="ws14" color="black"><B>Chennai</B></font></div>
</div></div>
<div id="text6" style="position:absolute; overflow:hidden; left:612px; top:2245px; width:150px; height:60px; z-index:12">
<div class="wpmd">
<div><font class="ws14" color="black"><B>Hyderabad</B></font></div>
</div></div>
<div id="text7" style="position:absolute; overflow:hidden; left:1027px; top:2245px; width:150px; height:60px; z-index:13">
<div class="wpmd">
<div><font class="ws14" color="black"><B>Pune</B></font></div>
</div></div>
<div id="image1" style="position:absolute; overflow:hidden; left:79px; top:1700px; width:0px; height:0px; z-index:14"><img src="C:\w848\images\sea" alt="" title="" border=0 width=0 height=0></div>
</body>
</html>