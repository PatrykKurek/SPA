<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=768px, initial-scale=1.0">
    <title>Red Rock SPA</title>
	<meta name="description" content="Red Rock Spa, Wólka Kosowska. Czynne codziennie od 8 do 22 ">
<meta name="keywords" content="spa, redrock, red rock, fryzjer, spa foto, spa galeria, Wólka Kosowska">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <link href='http://fonts.googleapis.com/css?family=Archivo+Black&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
  <script src="js/face.js"></script>
    <link href="css/Reset.css" rel="stylesheet" />
    <link href="css/Base.css" rel="stylesheet" />
</head>
<body>
<div id="menu">
     <ul class="nav">
	<li><a href="indexeng.php"><img class="logo" alt="logo" src="img/logo.png" height="70" width="140"></a></li>       
        <li><a  href="ofertaeng.php" class="link">GALLERY</a></li>
        <li><a class="link" href="cennikeng.php">OFFER</a></li>
		<li><a class="link" href="rezerwacjaeng.php">BOOKING</a></li>	
        <li><a class="link" href="kontakteng.php">CONTACT US</a></li>	
		<li><a href="indexvn.php"><img class="kraj" alt="service" src="img/vietnam.jpg"></a>
		<a href="index.php"><img class="kraj" alt="service" src="img/poland.png"></a>
		<a href="indexcn.php"><img class="kraj" alt="service" src="img/china.jpg"></a>
		<a href="indexeng.php"><img class="kraj" alt="service" src="img/UK.png"></a>	</li>
	</ul>	   
</div>

 <!-- #region Jssor Slider Begin -->
    <script src="js/jquery-1.11.3.min.js" type="text/javascript"></script>
    <script src="js/jssor.slider-24.1.5.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        jQuery(document).ready(function ($) {

            var jssor_1_SlideoTransitions = [
              [{b:900,d:2000,x:-379,e:{x:7}}],
              [{b:900,d:2000,x:-379,e:{x:7}}],
              [{b:-1,d:1,o:-1,sX:2,sY:2},{b:0,d:900,x:-171,y:-341,o:1,sX:-2,sY:-2,e:{x:3,y:3,sX:3,sY:3}},{b:900,d:1600,x:-283,o:-1,e:{x:16}}]
            ];

            var jssor_1_options = {
              $AutoPlay: 1,
              $SlideDuration: 800,
              $SlideEasing: $Jease$.$OutQuint,
              $CaptionSliderOptions: {
                $Class: $JssorCaptionSlideo$,
                $Transitions: jssor_1_SlideoTransitions
              },
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$
              }
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            /*responsive code begin*/
            /*remove responsive code if you don't want the slider scales while window resizing*/
            function ScaleSlider() {
                var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
                if (refSize) {
                    refSize = Math.min(refSize, 1920);
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
            /*responsive code end*/
        });
    </script>
    <style>
        /* jssor slider bullet navigator skin 05 css */
        /*
        .jssorb05 div           (normal)
        .jssorb05 div:hover     (normal mouseover)
        .jssorb05 .av           (active)
        .jssorb05 .av:hover     (active mouseover)
        .jssorb05 .dn           (mousedown)
        */
        .jssorb05 {
            position: absolute;
        }
        .jssorb05 div, .jssorb05 div:hover, .jssorb05 .av {
            position: absolute;
            /* size of bullet elment */
            width: 16px;
            height: 16px;
            background: url('img/b05.png') no-repeat;
            overflow: hidden;
            cursor: pointer;
        }
        .jssorb05 div { background-position: -7px -7px; }
        .jssorb05 div:hover, .jssorb05 .av:hover { background-position: -37px -7px; }
        .jssorb05 .av { background-position: -67px -7px; }
        .jssorb05 .dn, .jssorb05 .dn:hover { background-position: -97px -7px; }

        .jssora031 {display:block;position:absolute;cursor:pointer;}
        .jssora031 .a {fill:#fff;}
        .jssora031:hover {opacity:.8;}
        .jssora031.jssora031dn {opacity:.5;}
        .jssora031.jssora031ds { opacity: .3; pointer-events: none; }
    </style>
    <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:1300px;height:500px;overflow:hidden;visibility:hidden;">
        <!-- Loading Screen -->
        <div data-u="loading" style="position:absolute;top:0px;left:0px;background:url('img/loading.gif') no-repeat 50% 50%;background-color:rgba(0, 0, 0, 0.7);"></div>
        <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:1300px;height:500px;overflow:hidden;">
            <div>
                <img data-u="image" src="img/y0.JPG" alt="service1" />
                <div style="position:absolute;top:30px;left:30px;width:480px;height:120px;z-index:0;font-size:50px;color:#ffffff;line-height:60px;">RED ROCK SPA</div>
                <div style="position:absolute;top:300px;left:30px;width:480px;height:120px;z-index:0;font-size:30px;color:#ffffff;line-height:38px;">OTWARTE CODZIENNIE<br>OD 7:00 DO 22:00<br>NADRZECZNA 3i<br>WÓLKA KOSOWSKA</div>
               
            </div>
            <div>
                <img data-u="image" src="img/y1.JPG" alt="service1"/>
				 <div style="position:absolute;top:30px;left:30px;width:480px;height:120px;z-index:0;font-size:50px;color:#ffffff;line-height:60px;">SAUNA</div>
                <div style="position:absolute;top:300px;left:30px;width:480px;height:120px;z-index:0;font-size:30px;color:#ffffff;line-height:38px;">SUCHA (FIŃSKA)<br>PAROWA<br>NA PODCZERWIEŃ</div>
               
            </div>
            <div>
                <img data-u="image" src="img/y2.JPG" alt="service1"/>
				 <div style="position:absolute;top:30px;left:30px;width:480px;height:120px;z-index:0;font-size:50px;color:#ffffff;line-height:60px;">ZABIEGI HI-TEC</div>
                <div style="position:absolute;top:300px;left:30px;width:480px;height:120px;z-index:0;font-size:30px;color:#ffffff;line-height:38px;">REDUKCJA CELLULITU<br>UJĘDRNIANIE SKÓRY</div>
               
            </div>
			<div>
                <img data-u="image" src="img/y3.JPG" alt="service1"/>
				 <div style="position:absolute;top:30px;left:30px;width:480px;height:120px;z-index:0;font-size:50px;color:#ffffff;line-height:60px;">SALON KOSMETYCZNY</div>
                <div style="position:absolute;top:300px;left:30px;width:480px;height:120px;z-index:0;font-size:30px;color:#ffffff;line-height:38px;">PEDICURE<br>MANICURE<br>FRYZJER<br>MAKIJAŻ</div>
               
            </div>
			<div>
                <img data-u="image" src="img/y4.JPG" alt="service1"/>
				 <div style="position:absolute;top:30px;left:30px;width:480px;height:120px;z-index:0;font-size:50px;color:#ffffff;line-height:60px;">GROTA SOLNA</div>
                <div style="position:absolute;top:300px;left:30px;width:480px;height:120px;z-index:0;font-size:30px;color:#ffffff;line-height:38px;"></div>
               
            </div>
			<div>
                <img data-u="image" src="img/y5.JPG" alt="service1"/>
				 <div style="position:absolute;top:30px;left:30px;width:480px;height:120px;z-index:0;font-size:50px;color:#ffffff;line-height:60px;">SALON SUKIEN ŚLUBNYCH</div>
                <div style="position:absolute;top:300px;left:30px;width:480px;height:120px;z-index:0;font-size:30px;color:#ffffff;line-height:38px;">WYPOŻYCZALNIA<br>TRADYCYJNE<br>NOWOCZESNE</div>
               
            </div>
			<div>
                <img data-u="image" src="img/y6.JPG" alt="service1"/>
				 <div style="position:absolute;top:30px;left:30px;width:480px;height:120px;z-index:0;font-size:50px;color:#ffffff;line-height:60px;">SIŁOWNIA I FITNESS</div>
                <div style="position:absolute;top:300px;left:30px;width:480px;height:120px;z-index:0;font-size:30px;color:#ffffff;line-height:38px;">WOLNE CIĘŻARY<br>MASZYNY<br>CROSSFIT</div>
               
            </div>
          
        </div>
        <!-- Bullet Navigator -->
        <div data-u="navigator" class="jssorb05" style="bottom:16px;right:16px;" data-autocenter="1">
            <!-- bullet navigator item prototype -->
            <div data-u="prototype" style="width:16px;height:16px;"></div>
        </div>
        <!-- Arrow Navigator -->
        <div data-u="arrowleft" class="jssora031" style="width:50px;height:50px;top:0px;left:20px;" data-autocenter="2">
            <svg viewbox="-12986 -2977 16000 16000" style="width:100%;height:100%;">
                <polygon class="a" points="-1182.1,12825.5 -792,12435.4 -8204.5,5023 -792,-2389.4 -1182.1,-2779.5 -8984.8,5023"></polygon>
            </svg>
        </div>
        <div data-u="arrowright" class="jssora031" style="width:50px;height:50px;top:0px;right:20px;" data-autocenter="2">
            <svg viewbox="-12986 -2977 16000 16000" style="width:100%;height:100%;">
                <polygon class="a" points="-8594.7,12825.5 -8984.8,12435.4 -1572.3,5023 -8984.8,-2389.4 -8594.7,-2779.5 -792,5023"></polygon>
            </svg>
        </div>
    </div>
    <!-- #endregion Jssor Slider End -->     
   <div class="info">
   <h1>RED ROCK SPA </h1>
   </div>  
  
  
   <div class="openhandler">
     <div class="open">
   <a href="cennik.php"><img  class="foto" alt="service" src="img/oferta3.jpg" width="204" height="204"></a>
   </div>
    <br>
   <h3>SPA</h3>
     
   </div>  
   
   <div class="openhandler">
    <div class="open">
 <a href="cennik.php"><img class="foto" alt="service" src="img/oferta2.jpg" width="204" height="204">  </a>
 </div>
  <br>
  <h3>GYM</h3>
   
	
   </div>
   
   
   <div class="openhandler">
    <div class="open">
 <a href="cennik.php"><img class="foto" alt="service" src="img/oferta1.jpg" width="204" height="204">  </a>
 </div>
  <br>
  <h3>BEAUTY SALON</h3>
   
   </div>
   <div class="openhandler">
    <div class="open">
 <a href="cennik.php"><img class="foto" alt="service" src="img/oferta5.jpg" width="204" height="204">  </a>
 </div>
  <br>
  <h3>WEDDING DRESSES</h3>
   
   </div>
   <div id="face">
  <img id="facefoto" src="img/face.jpg" alt="service1">
  <div id="face2">
  <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/pl_PL/sdk.js#xfbml=1&version=v2.9";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div class="fb-page" data-href="https://www.facebook.com/redrockspaPL" data-tabs="timeline" data-width="300" data-height="220" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/redrockspaPL" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/redrockspaPL">RED ROCK SPA</a></blockquote></div>

</div>
</div>
</body>
</html>