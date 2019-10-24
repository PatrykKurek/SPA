<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Red Rock SPA - kontakt</title>
	<meta name="description" content="Red Rock Spa, Wólka Kosowska. Czynne codziennie od 8 do 22 ">
<meta name="keywords" content="spa, redrock, red rock, fryzjer, spa foto, spa galeria, Wólka Kosowska">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	 <script src="js/face.js"></script>
	 <link href='http://fonts.googleapis.com/css?family=Archivo+Black&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="js/jquery-ui.js"></script>
	
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
     <link rel="stylesheet" href="/resources/demos/style.css">

	
    <link href="css/Reset.css" rel="stylesheet" />
    <link href="css/Base.css" rel="stylesheet" /> 


</head>
<body>
<div id="menu">
     <ul class="nav">
	<li><a href="index.php"><img class="logo" alt="logo" src="img/logo.png" height="70" width="140"></a></li>       
        <li><a  href="oferta.php" class="link">GALERIA</a></li>
        <li><a class="link" href="cennik.php">CENNIK</a></li>
		    <li><a class="link" href="rezerwacja.php">REZERWACJA</a></li>	
        <li><a class="link" href="kontakt.php">KONTAKT</a></li>	
		    <li><a href="kontaktvn.php"><img class="kraj" alt="service" src="img/vietnam.jpg"></a>
		<a href="kontakt.php"><img class="kraj" alt="service" src="img/poland.png"></a>
		<a href="kontaktcn.php"><img class="kraj" alt="service" src="img/china.jpg"></a>
		<a href="kontakteng.php"><img class="kraj" alt="service" src="img/UK.png"></a>	</li>
	</ul>	   
</div>
   <div id="mapa">  

  <!-- <a href="https://www.facebook.com/redrockspaPL/?fref=ts"><img id="face" alt="facebook" src="img/face1.png" width="120" height="55"></a><br><br><br> --> 
  
    <div id="map"></div>
	 <script>
      function initMap() {
        var uluru = {lat: 52.057628, lng: 20.860989};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 15,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
    </script>
	<div id="test">	
	</div>
	</div>
	<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAmBqmx9GTt6-jVXsylzIefL3QU-sXVMvk&callback=initMap"
  type="text/javascript"></script>

 <div>
 <center><h3>Wólka Kosowska <br> Nadrzeczna 3i</center>
 <center><h3>ZADZWOŃ<br> 
  +48 605 242 806 (PL)  <br> +48 601 253 768 (VN)</h3></center>
  </div>
 
  <div id="face">
  <img id="facefoto" src="img/face.jpg">
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