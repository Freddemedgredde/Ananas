<!DOCTYPE>
<html lang="en">

<head>

		<meta charset="utf-8">
		<link rel="stylesheet" href="PaintR.css">
		<title>Slutprojekt</title>

</head>

<body>
  		<h1>Anime Machine</h1>
  		<div class="items" id="items">

  	</div>

  	<div class="dropdownmenu">
	  <nav>
	<ul>
		<li><a href="http://localhost/Slutproject/PaintR.php">Home</a>
		</li>
		<li><a href="http://localhost/Slutproject/Products.php">Products</a>
			<ul>

								
					<ul>
						<li><a href="#">HTML</a></li>
						<li><a href="#">CSS</a></li>
					</ul>
				</li>
			</ul>
		</li>
		<li><a href="#">Resources</a>
			<ul>

			</ul>
		</li>
		<li><a href="http://localhost/Slutproject/Register.php">Register</a></li>
	</ul>
</nav>
</div>

  	<a href="http://localhost/Slutproject/Register.php" > <button type="button"  >Login</button> </a> <br> 

  	    <script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="js/jssor.slider.mini.js"></script>
    <!-- use jssor.slider.debug.js instead for debug -->
    <script>
        jQuery(document).ready(function ($) {
            
            var jssor_1_options = {
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $ThumbnailNavigatorOptions: {
                $Class: $JssorThumbnailNavigator$,
                $Cols: 15,
                $SpacingX: 3,
                $SpacingY: 3,
                $Align: 455
              }
            };
            
            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);
            
            //responsive code begin
            //you can remove responsive code if you don't want the slider scales while window resizing
            function ScaleSlider() {
                var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
                if (refSize) {
                    refSize = Math.min(refSize, 980);
                    jssor_1_slider.$ScaleWidth(refSize);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }
            ScaleSlider();
            $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationchange", ScaleSlider);
            //responsive code end
        });
    </script>

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
            background: url('img/a07.png') no-repeat;
            overflow: hidden;
        }
        .jssora07l { background-position: -5px -35px; }
        .jssora07r { background-position: -65px -35px; }
        .jssora07l:hover { background-position: -125px -35px; }
        .jssora07r:hover { background-position: -185px -35px; }
        .jssora07l.jssora07ldn { background-position: -245px -35px; }
        .jssora07r.jssora07rdn { background-position: -305px -35px; }
/* jssor slider thumbnail navigator skin 04 css *//*.jssort04 .p            (normal).jssort04 .p:hover      (normal mouseover).jssort04 .pav          (active).jssort04 .pav:hover    (active mouseover).jssort04 .pdn          (mousedown)*/
.jssort04 .p {    position: absolute;    top: 0;    left: 0;    width: 62px;    height: 32px;}.jssort04 .t {    position: absolute;    top: 0;    left: 0;    width: 100%;    height: 100%;    border: none;}.jssort04 .w, .jssort04 .pav:hover .w {    position: absolute;    width: 60px;    height: 30px;    border: #0099FF 1px solid;    box-sizing: content-box;}.jssort04 .pdn .w, .jssort04 .pav .w {    border-style: dashed;}.jssort04 .c {    position: absolute;    top: 0;    left: 0;    width: 62px;    height: 32px;    background-color: #000;    filter: alpha(opacity=45);    opacity: .45;    transition: opacity .6s;    -moz-transition: opacity .6s;    -webkit-transition: opacity .6s;    -o-transition: opacity .6s;}.jssort04 .p:hover .c, .jssort04 .pav .c {    filter: alpha(opacity=0);    opacity: 0;}.jssort04 .p:hover .c {    transition: none;    -moz-transition: none;    -webkit-transition: none;    -o-transition: none;}* html .jssort04 .w {    width /**/: 62px;    height /**/: 32px;}
        
    </style>

  	<div class="Slidebar">
  			    <div id="jssor_1" style="border-radius:25px;position:relative;margin:0 auto;top:0px;left:0px;width:980px;height:400px;overflow:hidden;visibility:hidden;background:url('img/.jpg') 50% 50% no-repeat;">
        <!-- Loading Screen -->
        <div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
            <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
            <div style="position:absolute;display:block;background:url('img/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
        </div>
        <div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: 980px; height: 400px; overflow: hidden;">
            <div data-p="172.50" style="display: none;">
                <div style="position: absolute; top: 10px; left: 10px; width: 480px; height: 300px; font-family: Arial, Verdana; font-size: 12px; text-align: left;"><br />
                    <span style="display: block; line-height: 1em; text-transform: uppercase; font-size: 52px; color: #FFFFFF;">results driven</span><br /><br /><br />
                    <span style="display: block; line-height: 1.1em; font-size: 2.5em; color: #FFFFFF;">
                                                        iT Solutions & Services
                                                    
                    </span><br />
                    <span style="display: block; line-height: 1.1em; font-size: 1.5em; color: #FFFFFF;">
                                                        Our professional services help you address the ever evolving business and technological
                                                        challenges.
                                                    
                    </span><br /><br />
                    <a href="http://www.jssor.com">
                        <img src="img/find-out-more-bt.png" border="0" alt="auction slider" width="215" height="50" />
                    </a>
                </div>
                <img src="img/s2.png" style="position: absolute; top: 23px; left: 480px; width: 500px; height: 300px;" />
                <img data-u="thumb" src="img/s2t.jpg" />
            </div>
            <div data-p="172.50" style="display: none;">
                <div style="position: absolute; top: 10px; left: 10px; width: 480px; height: 300px; font-family: Arial, Verdana; font-size: 12px; text-align: left;">
                    <span style="display: block; line-height: 1em; text-transform: uppercase; font-size: 52px;
                                color: #FFFFFF;">web design & development</span><br /><br />
                    <span style="display: block; line-height: 1.1em; font-size: 2.5em; color: #FFFFFF;">
                        Visually Compelling & Functional
                        
                    </span><br /><br />
                    <a href="http://www.jssor.com">
                        <img src="img/find-out-more-bt.png" border="0" alt="ebay slideshow" width="215" height="50" />
                    </a>
                </div>
                <img src="img/s3.png" style="position: absolute; top: 23px; left: 480px; width: 500px; height: 300px;" />
                <img data-u="thumb" src="img/s3t.jpg" />
            </div>
            <div data-p="172.50" style="display: none;">
                <div style="position: absolute; top: 10px; left: 10px; width: 480px; height: 300px; font-family: Arial, Verdana; font-size: 12px; text-align: left;">
                    <span style="display: block; line-height: 1em; text-transform: uppercase; font-size: 52px;
    color: #FFFFFF;">Online marketing</span><br />
                    <span style="display: block; line-height: 1.1em; font-size: 2.5em; color: #FFFFFF;">
                            We enhance your brand, your website traffic and your bottom line online.
                        
                    </span><br /><br />
                    <a href="http://www.jssor.com">
                        <img src="img/find-out-more-bt.png" border="0" alt="listing slider" width="215" height="50" />
                    </a>
                </div>
                <img src="img/s4.png" style="position: absolute; top: 23px; left: 480px; width: 500px; height: 300px;" />
                <img data-u="thumb" src="img/s4t.jpg" />
            </div>
            <div data-p="172.50" style="display: none;">
                <div style="position: absolute; top: 10px; left: 10px; width: 480px; height: 300px; font-family: Arial, Verdana; font-size: 12px; text-align: left;"><br />
                    <span style="display: block; line-height: 1em; text-transform: uppercase; font-size: 52px;
    color: #FFFFFF;">web hosting</span><br /><br />
                    <span style="display: block; line-height: 1.1em; font-size: 2.5em; color: #FFFFFF;">
                            we offer the web's best hosting plans for every site.
                        
                    </span><br /><br />
                    <a href="http://www.jssor.com">
                        <img src="img/find-out-more-bt.png" border="0" alt="ebay store slider" width="215" height="50" />
                    </a>
                </div>
                <img src="img/s5.png" style="position: absolute; top: 23px; left: 480px; width: 500px; height: 300px;" />
                <img data-u="thumb" src="img/s5t.jpg" />
            </div>
            <div data-p="172.50" style="display: none;">
                <div style="position: absolute; top: 10px; left: 10px; width: 480px; height: 300px; font-family: Arial, Verdana; font-size: 12px; text-align: left;">
                    <span style="display: block; line-height: 1em; text-transform: uppercase; font-size: 52px;
    color: #FFFFFF;">domain name registration</span><br />
                    <span style="display: block; line-height: 1.1em; font-size: 2.5em; color: #FFFFFF;">
                            Secure your online identity and register your domain now.
                        
                    </span><br /><br />
                    <a href="http://www.jssor.com">
                        <img src="img/find-out-more-bt.png" border="0" alt="listing template slider" width="215" height="50" />
                    </a>
                </div>
                <img src="img/s6.png" style="position: absolute; top: 23px; left: 480px; width: 500px; height: 300px;" />
                <img data-u="thumb" src="img/s6t.jpg" />
            </div>
            <div data-p="172.50" style="display: none;">
                <div style="position: absolute; top: 10px; left: 10px; width: 480px; height: 300px; font-family: Arial, Verdana; font-size: 12px; text-align: left;"><br />
                    <span style="display: block; line-height: 1em; text-transform: uppercase; font-size: 52px;
    color: #FFFFFF;">video production</span><br />
                    <span style="display: block; line-height: 1.1em; font-size: 2.5em; color: #FFFFFF;">
                            Make a greater impact on your clients through interactive Video Production.
                        
                    </span><br /><br />
                    <a href="http://www.jssor.com">
                        <img src="img/find-out-more-bt.png" border="0" alt="auction template slider" width="215" height="50" />
                    </a>
                </div>
                <img src="img/s7.png" style="position: absolute; top: 23px; left: 480px; width: 500px; height: 300px;" />
                <img data-u="thumb" src="img/s7t.jpg" />
            </div>
            <div data-p="172.50" style="display: none;">
                <div style="position: absolute; top: 10px; left: 10px; width: 480px; height: 300px; font-family: Arial, Verdana; font-size: 12px; text-align: left;">
                    <span style="display: block; line-height: 1em; text-transform: uppercase; font-size: 52px;
color: #FFFFFF;">Dank Memes</span><br /> <!-- Text Till höger om bilden -->
                    <span style="display: block; line-height: 1.1em; font-size: 2.5em; color: #FFFFFF;">
                        Stay fresh to death with these gains bro. Aww yeah man, Go Green, Go Green, Go Green, Go Green, Go Green<!-- Text Till höger under om bilden -->
                        <br /><br />
                        <a href="http://localhost/Slutproject/Register.php">
                            <img src="img/find-out-more-bt.png" border="0" alt="ebay slider" width="215" height="50"/>
                        </a>
                    </span>
                </div>
                <img src="img/Vape.jpg" style="position: absolute; top: 23px; left: 500px; width: 400px; height: 280px;" />
                <img data-u="thumb" src="img/Vape.jpg" />
            </div>
            <a data-u="ad" href="http://www.jssor.com" style="display:none">jQuery Slider</a>
        
        </div>
        <!-- Thumbnail Navigator -->
        <div data-u="thumbnavigator" class="jssort04" style="position:absolute;left:0px;bottom:0px;width:980px;height:60px;" data-autocenter="1">
            <!-- Thumbnail Item Skin Begin -->
            <div data-u="slides" style="cursor: default;">
                <div data-u="prototype" class="p">
                    <div class="w">
                        <div data-u="thumbnailtemplate" class="t"></div>
                    </div>
                    <div class="c"></div>
                </div>
            </div>
            <!-- Thumbnail Item Skin End -->
        </div>
        <!-- Arrow Navigator -->
        <span data-u="arrowleft" class="jssora07l" style="top:0px;left:8px;width:50px;height:50px;" data-autocenter="2"></span>
        <span data-u="arrowright" class="jssora07r" style="top:0px;right:8px;width:50px;height:50px;" data-autocenter="2"></span>
    </div>
  	</div>

</body>

<?php

$mysql_host = 'localhost';
$mysql_user = 'root';
$mysql_pass = '';
$mysql_db = 'webshop';

$conn_error = "The Conection Failed";

$mysqli = new mysqli($mysql_host, $mysql_user, $mysql_pass, $mysql_db);

if($mysqli->connect_errno) {
	die($conn_error." ".$mysqli->connect_error);
} 

else {
	echo "Connection established";
}

?>
