<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
tr {
   margin-top:10px;
}

td {
    padding:10px;
} 
</style>
</head>
<body>
<form action="test.php" method="post"">
    <input type="password" name="haslo" placeholder="Wpisz haslo" />
    
<input type="submit" value="POKAZ WIZYTY" />

</form>
<?php
$_POST["haslo"];

?>
<table border="1">
<tr>
<td> ID </td> <td>IMIE </td><td>NAZWISKO</td><td>TELEFON</td><td>ZABIEG</td><td>DATA</td><td>GODZINA</td><td>KOMENTARZ</td>
</tr>
<?php
$servername = "localhost";
$username = "srv17798_spa";
$password =$_POST["haslo"];
$dbname = "srv17798_spa";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql1= "SELECT *, DATE_FORMAT(date,'%d/%m/%Y') AS niceDate FROM table ORDER BY date DESC";

$sql = "SELECT * FROM rezerwacje";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		
      echo "<tr><td>". $row["id"]. "</td> <td>". $row["imie"]. "</td> <td>" . $row["nazwisko"]. "</td> <td>" .$row["telefon"]. "</td><td>". $row["zabieg"]. " </td><td>". $row["data"]. "</td><td>" . $row["godzina"]. " </td><td>" . $row["komentarz"]. "</td></tr>";
       
	}
} else {
    echo "0 results";
}

$conn->close();
?> 
</table>
</body>
</html>