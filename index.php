<html>

<head>
	<title>chitosajilo</title>
	<link href="image/logo.jpg" rel="shortcut icon">
	<link href="style.css" rel="stylesheet" type="text/css" />
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="image/logo.png" rel="shortcut-icon">
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="css/bootstrap-theme.min.css" rel="stylesheet" type="text/css">
	<link href="style.css" rel="stylesheet" type="text/css">
	<script src="js/jquery.min.js"></script>
	<link href="css/navbar.css" rel="stylesheet" type="text/css" />

	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="js/j.js"></script>


</head>

<body>
	<!--Navigation Bar-->

	<header class="navigation">
		<div class="nav-container">
			<div class="brand">
				<a href="#!">
					<h3><b>CHITO<font color="red">SAJILO</font></b></h3>
				</a>
			</div>
			<nav>
				<div class="nav-mobile"><a id="nav-toggle" href="#!"><span></span></a></div>
				<ul class="nav-list">
					<li><a href="#!">Home</a></li>
					<li><a href="#">About Us</a></li>
					<li><a href="#!">Categories</a>
						<ul class="nav-dropdown">
							<li><a href="book.php">Old Book Store</a></li>
							<li><a href="handicraft.php">Decoration and Handicrafts</a></li>
							<li><a href="#!">Chef Mother</a></li>
						</ul>
					</li>
				
					<li><a href="#!">Help</a></li>
					<li><a href="#!">Contact Us</a></li>
					<li><a href="signup.php" class="btn btn-danger">Sign Up</a></li>
					<li><a href="login.php" class="btn btn-danger">Login</a></li>
				</ul>
			</nav>
		</div>
	</header>
<!-------------------------------------nbjsnbj--->
<div class="col-md-12 home slider">
<div class="row">
<!-- it works the same with all jquery version from 1.x to 2.x -->
    <script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
    <!-- use jssor.slider.mini.js (40KB) instead for release -->
    <!-- jssor.slider.mini.js = (jssor.js + jssor.slider.js) -->
    <script type="text/javascript" src="js/jssor.js"></script>
    <script type="text/javascript" src="js/jssor.slider.mini.js"></script>
    <script>
        jQuery(document).ready(function ($) {
            var options = {
                $AutoPlay: true,                                    //[Optional] Whether to auto play, to enable slideshow, this option must be set to true, default value is false
                $AutoPlayInterval: 4000,                            //[Optional] Interval (in milliseconds) to go for next slide since the previous stopped if the slider is auto playing, default value is 3000
                $PauseOnHover: 1,                                   //[Optional] Whether to pause when mouse over if a slider is auto playing, 0 no pause, 1 pause for desktop, 2 pause for touch device, 3 pause for desktop and touch device, 4 freeze for desktop, 8 freeze for touch device, 12 freeze for desktop and touch device, default value is 1

                $ArrowKeyNavigation: true,   			            //[Optional] Allows keyboard (arrow key) navigation or not, default value is false
                $SlideDuration: 800,                                //[Optional] Specifies default duration (swipe) for slide in milliseconds, default value is 500
                $MinDragOffsetToSlide: 20,                          //[Optional] Minimum drag offset to trigger slide , default value is 20
                //$SlideWidth: 600,                                 //[Optional] Width of every slide in pixels, default value is width of 'slides' container
                //$SlideHeight: 300,                                //[Optional] Height of every slide in pixels, default value is height of 'slides' container
                $SlideSpacing: 0, 					                //[Optional] Space between each slide in pixels, default value is 0
                $DisplayPieces: 1,                                  //[Optional] Number of pieces to display (the slideshow would be disabled if the value is set to greater than 1), the default value is 1
                $ParkingPosition: 0,                                //[Optional] The offset position to park slide (this options applys only when slideshow disabled), default value is 0.
                $UISearchMode: 1,                                   //[Optional] The way (0 parellel, 1 recursive, default value is 1) to search UI components (slides container, loading screen, navigator container, arrow navigator container, thumbnail navigator container etc).
                $PlayOrientation: 1,                                //[Optional] Orientation to play slide (for auto play, navigation), 1 horizental, 2 vertical, 5 horizental reverse, 6 vertical reverse, default value is 1
                $DragOrientation: 1,                                //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $DisplayPieces is greater than 1, or parking position is not 0)

                $ArrowNavigatorOptions: {                       //[Optional] Options to specify and enable arrow navigator or not
                    $Class: $JssorArrowNavigator$,              //[Requried] Class to create arrow navigator instance
                    $ChanceToShow: 1,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                    $AutoCenter: 2,                                 //[Optional] Auto center arrows in parent container, 0 No, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
                    $Steps: 1                                       //[Optional] Steps to go for each navigation request, default value is 1
                },

                $ThumbnailNavigatorOptions: {
                    $Class: $JssorThumbnailNavigator$,              //[Required] Class to create thumbnail navigator instance
                    $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always

                    $ActionMode: 1,                                 //[Optional] 0 None, 1 act by click, 2 act by mouse hover, 3 both, default value is 1
                    $AutoCenter: 0,                                 //[Optional] Auto center thumbnail items in the thumbnail navigator container, 0 None, 1 Horizontal, 2 Vertical, 3 Both, default value is 3
                    $Lanes: 1,                                      //[Optional] Specify lanes to arrange thumbnails, default value is 1
                    $SpacingX: 3,                                   //[Optional] Horizontal space between each thumbnail in pixel, default value is 0
                    $SpacingY: 3,                                   //[Optional] Vertical space between each thumbnail in pixel, default value is 0
                    $DisplayPieces: 9,                              //[Optional] Number of pieces to display, default value is 1
                    $ParkingPosition: 260,                          //[Optional] The offset position to park thumbnail
                    $Orientation: 1,                                //[Optional] Orientation to arrange thumbnails, 1 horizental, 2 vertical, default value is 1
                    $DisableDrag: false                            //[Optional] Disable drag or not, default value is false
                }
            };

            var jssor_slider1 = new $JssorSlider$("slider1_container", options);

            //responsive code begin
            //you can remove responsive code if you don't want the slider scales while window resizes
            function ScaleSlider() {
                var bodyWidth = document.body.clientWidth;
                if (bodyWidth)
                    jssor_slider1.$ScaleWidth(Math.min(bodyWidth, 980));
                else
                    window.setTimeout(ScaleSlider, 30);
            }
            ScaleSlider();

            $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationchange", ScaleSlider);
            //responsive code end
        });
    </script>
    <div style="position: relative; width: 100%; background-color: #003399; overflow: hidden;">
        <div style="position: relative; left: 50%; width: 5000px; text-align: center; margin-left: -2500px;">
            <!-- Jssor Slider Begin -->
            <div id="slider1_container" style="position: relative; margin: 0 auto;
                top: 0px; left: 0px; width: 980px; height: 400px; background: url(image/main_bg.jpg) top center no-repeat;">
                <!-- Loading Screen -->
                <div u="loading" style="position: absolute; top: 0px; left: 0px;">
                    <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block;
                        top: 0px; left: 0px; width: 100%; height: 100%;">
                    </div>
                    <div style="position: absolute; display: block; background: url(../img/loading.gif) no-repeat center center;
                        top: 0px; left: 0px; width: 100%; height: 100%;">
                    </div>
                </div>
                <!-- Slides Container -->
                <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 980px;
                    height: 400px; overflow: hidden;">
                    <div>
                        <div style="position: absolute; width: 480px; height: 300px; top: 10px; left: 10px;
                            text-align: left; line-height: 1.8em; font-size: 12px;">
                            <br />
                            <span style="display: block; line-height: 1em; text-transform: uppercase; font-size: 52px;
                                color: #FFFFFF;">results driven</span>
                            <br />
                            <br />
                            <span style="display: block; line-height: 1.1em; font-size: 2.5em; color: #FFFFFF;">
                                iT Solutions & Services
                            </span>
                            <br />
                            <span style="display: block; line-height: 1.1em; font-size: 1.5em; color: #FFFFFF;">
                                Our professional services help you address the ever evolving business and technological
                                challenges.
                            </span>
                            <br />
                            <br />
                            <a href="#">
                                <img src="image/find-out-more-bt.png" border="0" alt="auction slider" width="215"
                                     height="50" />
                            </a>
                        </div>
                        <img src="image/s2.png" style="position: absolute; top: 23px; left: 480px; width: 500px; height: 300px;" />
                        <img u="thumb" src="image/triangle.jpg" />
                    </div>
                    <div>
                        <div style="position: absolute; width: 480px; height: 300px; top: 10px; left: 10px;
                            text-align: left; line-height: 1.8em; font-size: 12px;">
                            <span style="display: block; line-height: 1em; text-transform: uppercase; font-size: 52px;
                                color: #FFFFFF;">web design & development</span>
                            <br />
                            <br />
                            <span style="display: block; line-height: 1.1em; font-size: 2.5em; color: #FFFFFF;">
                                Visually Compelling & Functional
                            </span>
                            <br />
                            <br />
                            <a href="book.php">
                                <img src="image/find-out-more-bt.png" border="0" alt="ebay slideshow" width="215"
                                     height="50" />
                            </a>
                        </div>
                        <img src="image/triangle1.jpg" style="position: absolute; top: 23px; left: 480px; width: 500px; height: 300px;" />
                        <img u="thumb" src="image/s3t.jpg" />
                    </div>
                    <div>
                        <div style="position: absolute; width: 480px; height: 300px; top: 10px; left: 10px;
                            text-align: left; line-height: 1.8em; font-size: 12px;">
                            <span style="display: block; line-height: 1em; text-transform: uppercase; font-size: 52px;
                                color: #FFFFFF;">Online marketing</span>
                            <br />
                            <span style="display: block; line-height: 1.1em; font-size: 2.5em; color: #FFFFFF;">
                                We enhance your brand, your website traffic and your bottom line online.
                            </span>
                            <br />
                            <br />
                            <a href="handicraft.php">
                                <img src="image/find-out-more-bt.png" border="0" alt="listing slider" width="215"
                                     height="50" />
                            </a>
                        </div>
                        <img src="image/s4.png" style="position: absolute; top: 23px; left: 480px; width: 500px; height: 300px;" />
                        <img u="thumb" src="image/s4t.jpg" />
                    </div>
                    <div>
                        <div style="position: absolute; width: 480px; height: 300px; top: 10px; left: 10px;
                            text-align: left; line-height: 1.8em; font-size: 12px;">
                            <br />
                            <span style="display: block; line-height: 1em; text-transform: uppercase; font-size: 52px;
                                color: #FFFFFF;">web hosting</span>
                            <br />
                            <br />
                            <span style="display: block; line-height: 1.1em; font-size: 2.5em; color: #FFFFFF;">
                                we offer the web's best hosting plans for every site.
                            </span>
                            <br />
                            <br />
                            <a href="lunchbox.php">
                                <img src="image/find-out-more-bt.png" border="0" alt="ebay store slider" width="215"
                                     height="50" />
                            </a>
                        </div>
                        <img src="image/s5.png" style="position: absolute; top: 23px; left: 480px; width: 500px; height: 300px;" />
                        <img u="thumb" src="image/s5t.jpg" />
                    </div>	
                   
                </div>
                
                <!--#region Arrow Navigator Skin Begin -->
                <!-- Help: http://www.jssor.com/development/slider-with-arrow-navigator-jquery.html -->
                <style>
                    /* jssor slider arrow navigator skin 07 css */
                    /*
                    .jssora07l                  (normal)
                    .jssora07r                  (normal)
                    .jssora07l:hover            (normal mouseover)
                    .jssora07r:hover            (normal mouseover)
                    .jssora07l.jssora07ldn      (mousedown)
                    .jssora07r.jssora07rdn      (mousedown)
                    */
                    .jssora07l, .jssora07r {
                        display: block;
                        position: absolute;
                        /* size of arrow element */
                        width: 50px;
                        height: 50px;
                        cursor: pointer;
                        background: url(../img/a07.png) no-repeat;
                        overflow: hidden;
                    }
                    .jssora07l { background-position: -5px -35px; }
                    .jssora07r { background-position: -65px -35px; }
                    .jssora07l:hover { background-position: -125px -35px; }
                    .jssora07r:hover { background-position: -185px -35px; }
                    .jssora07l.jssora07ldn { background-position: -245px -35px; }
                    .jssora07r.jssora07rdn { background-position: -305px -35px; }
                </style>
                <!-- Arrow Left -->
                <span u="arrowleft" class="jssora07l" style="top: 123px; left: 8px;">
                </span>
                <!-- Arrow Right -->
                <span u="arrowright" class="jssora07r" style="top: 123px; right: 8px;">
                </span>
                <!--#endregion Arrow Navigator Skin End -->
                
            <!--#region Thumbnail Navigator Skin Begin -->
            <!-- Help: http://www.jssor.com/development/slider-with-thumbnail-navigator-jquery.html -->
            <style>
                /* jssor slider thumbnail navigator skin 04 css */
                /*
                .jssort04 .p            (normal)
                .jssort04 .p:hover      (normal mouseover)
                .jssort04 .pav          (active)
                .jssort04 .pav:hover    (active mouseover)
                .jssort04 .pdn          (mousedown)
                */

                .jssort04 {
                    position: absolute;
                    /* size of thumbnail navigator container */
                    width: 600px;
                    height: 60px;
                }

                    .jssort04 .p {
                        position: absolute;
                        top: 0;
                        left: 0;
                        width: 62px;
                        height: 32px;
                    }

                    .jssort04 .t {
                        position: absolute;
                        top: 0;
                        left: 0;
                        width: 100%;
                        height: 100%;
                        border: none;
                    }

                    .jssort04 .w, .jssort04 .pav:hover .w {
                        position: absolute;
                        width: 60px;
                        height: 30px;
                        border: #0099FF 1px solid;
                        box-sizing: content-box;
                    }

                    .jssort04 .pdn .w, .jssort04 .pav .w {
                        border-style: dashed;
                    }

                    .jssort04 .c {
                        position: absolute;
                        top: 0;
                        left: 0;
                        width: 62px;
                        height: 32px;
                        background-color: #000;
                        filter: alpha(opacity=45);
                        opacity: .45;
                        transition: opacity .6s;
                        -moz-transition: opacity .6s;
                        -webkit-transition: opacity .6s;
                        -o-transition: opacity .6s;
                    }

                    .jssort04 .p:hover .c, .jssort04 .pav .c {
                        filter: alpha(opacity=0);
                        opacity: 0;
                    }

                    .jssort04 .p:hover .c {
                        transition: none;
                        -moz-transition: none;
                        -webkit-transition: none;
                        -o-transition: none;
                    }

                    * html .jssort04 .w {
                        width /**/: 62px;
                        height /**/: 32px;
                    }
            </style>
            <!-- thumbnail navigator container -->
            <div u="thumbnavigator" class="jssort04" style="right: 0px; bottom: 0px;">
                <!-- Thumbnail Item Skin Begin -->
                <div u="slides" style="bottom: 25px; right: 30px; cursor: default;">
                    <div u="prototype" class="p">
                        <div class=w><div u="thumbnailtemplate" class="t"></div></div>
                        <div class=c></div>
                    </div>
                </div>
                <!-- Thumbnail Item Skin End -->
            </div>
            <!--#endregion Thumbnail Navigator Skin End -->
                <a style="display: none" href="http://www.jssor.com">slider in html</a>
            </div>
            <!-- Jssor Slider End -->
        </div>
    </div>
</div>
</div>	
	<!----------------------------------end of home slider----------------------------------------------------------------------------------------------->
	
	<div class="abovefooter">
				<div class="container">
					<div class="col-md-3">
						<h2><font color="#fff">About Company</font></h2><br>
						<p>First of all this publicity is the need of any organization to fame their company. First of all this publicity is the need
						of any organization to fame their company. First of all this publicity is the need
						of any organization to fame their company.of any organization to fame their company.</p>
					</div>
					<div class="col-md-3">
						<h2><font color="#fff">Categories</font></h2><br>
						<p>Old book Store</p>
						<p>Decoration and Handicraft</p>
						<p>LunchBox</p>
					</div>
					<div class="col-md-3">
						<h2><font color="#fff">Our Latest Products</font></h2><br>
						<img src="image/pic3.jpg" alt="image" width="100%"/>
					</div>
					<div class="col-md-3">
						<h2><font color="#fff">Connect Us</font></h2><br>
						<p>Contact Person</p>
						<p>Aastha Rai</p>
						<p>Junu Shrestha</p>
						<p>Nirusha Munikar</p>
						<p>Address: Kathmandu,Nepal</p>
						<p>Email: chitosajilo@gmail.com</p>
						<p>9860098890</p>
					</div>
				</div>
			</div>
		<!--end-->	
		
		<!--footer-->	
			<div class="footer">
				<p class="foot">Copyright © 2017 chitosajilo. All rights reserved.</p>
				<p class="foot">Team Paaluwa</p>
			</div>
	<script type="text/javascript" src="jquery/jquery.js"></script>
	<script type="text/javascript" src="jquery/j1.js"></script>
	<script src="js/bootstrap.min.js"></script>


</body>

</html>