<html>
<header>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<?php
$servername = "localhost";
$username = "srv17798_spa";
$password = "040895Ho";
$dbname = "srv17798_spa";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$imie=$_POST["imie1"];
$nazwisko=$_POST["nazwisko1"];
$telefon=$_POST["telefon1"];
$data=$_POST["data1"];
$godzina=$_POST["godzina1"];
$zabieg=$_POST["zabieg1"];
$komentarz=$_POST["komentarz1"];

$sql = "INSERT INTO rezerwacje (imie, nazwisko,telefon,data,godzina,zabieg,komentarz) VALUES ('$imie','$nazwisko','$telefon','$data','$godzina','$zabieg','$komentarz')";

if ($conn->query($sql) === TRUE) {
    echo "ZGŁOSZENIE REZERWACJI ZOSTAŁO PRZYJETE";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
</body>
</html>