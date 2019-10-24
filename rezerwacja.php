<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Red Rock SPA - rezerwacja</title>
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
		<li><a href="rezerwacjavn.php"><img class="kraj" alt="service" src="img/vietnam.jpg"></a>
		<a href="rezerwacja.php"><img class="kraj" alt="service" src="img/poland.png"></a>
		<a href="rezerwacjacn.php"><img class="kraj" alt="service" src="img/china.jpg"></a>
		<a href="rezerwacjaeng.php"><img class="kraj" alt="service" src="img/UK.png"></a>	</li>
	</ul>	   
</div>

 <script src="connect.php"></script> 
 
 <center><h3>ZADZWOŃ I ZAPISZ SIĘ JUŻ DZIŚ <br>
 
  +48 605 242 806 (PL)  <br> +48 601 253 768 (VN)</h3>
  <span>lub</h3><br>
 <h3>WYŚLIJ SWOJĄ REZERWACJĘ ONLINE</h3></center>
 <div id="rezerwacja">
 <form action="rezerwuj.php" method="post" class="form-style-9">
<ul>
<li>
    <input type="text" name="imie1" class="field-style field-split align-left" placeholder="Imię" required />
    <input type="text" name="nazwisko1" class="field-style field-split align-right" placeholder="Nazwisko" required />

</li>
<li>
    <input type="text" name="telefon1" class="field-style field-split align-left" placeholder="Telefon" required />
   <tr><td></td><td><input type="text" name="data1" id="datepicker" class="field-style field-split align-right" placeholder="Data rezerwacji" required></td></tr>
   <script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  </script> 
</li>
<li>

<select name="zabieg1" class="field-style field-split align-left"/>
<option disabled selected value>  Wybierz rodzaj zabiegu </option>
<option value="Manicure">Manicure</option>
<option value="Pedicure">Pedicure</option>
<option value="Stylizacja paznokci">Stylizacja paznokci</option>
<option value="Makijaż">Makijaż</option>
<option value="Masaż">Masaż</option>
<option value="Zabiegi relaksacyjne">Zabiegi Relaksacyjne</option>
<option value="Zabiegi pielęgnacyjne - twarz">Zabiegi pielęgnacyjne - twarz</option>
<option value="Zabiegi pielęgnacyjne - ciało">Zabiegi pielęgnacyjne - ciało</option>
<option value="Zabiegi HI-TEC">Zabiegi HI-TEC</option>
<option value="Henna">Henna</option>
<option value="Depilacja">Depilacja</option>
 
</select>
 <tr><td></td><td><input type="text" name="godzina1" class="field-style field-split align-right" placeholder="Podaj godzinę, np. 17:30" required></td></tr>
</li>
<li>
<textarea name="komentarz1" class="field-style" placeholder="Tutaj napisz szczegóły swojej wizyty, lub zadaj nam pytanie!"></textarea>
</li>
<li>
<input type="submit" value="Rezerwuj" />
</li>
</ul>
</form>
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