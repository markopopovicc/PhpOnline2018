<!DOCTYPE html>
<html>
    <head>
        <title>Zadatak 3.11, stranica 52.</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
<body>
<h1>Zadatak 3.11</h1>
<h2>Napišite program koji se spaja na bazu fakultet i iz tablice stud dohvatite sve studente koji se zovu Ivan. Zatim treba ispisati matične brojeve i prezimena tih studenata.
</h2>
<h3><p>Rješenje je:</p>
<body>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fakultet";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT imeStud, prezStud, mbrStud FROM stud WHERE imeStud LIKE 'Ivan'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br> Prezime: ". $row["prezStud"]." - Matični broj: " . $row["mbrStud"].  "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();
?> 
</h3>
</body>
</html>