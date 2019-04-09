<a href='index.php'>Back to Start</a><br/>

<?php

include_once 'db_conn.php';

$query1 = "SELECT * FROM rezervacija";

$dvorana = $mysqli -> query($query1);

if ($dvorana) {
    
    while ($row = $dvorana -> fetch_assoc()) {
    
       echo 'Dvorana '.$row ['oznDvorana'] . '<br>';
       echo '<br>';
        
     }
 
}  
else {
         echo 'Odabrana dvorana nema rezervacija';
     }
$mysqli -> close();

echo '<br>';
print_r($dvorana);
    
/*if(isset($_GET['oznDvorana'])) {
    while ($row = $result -> fetch_assoc()) {

        echo $row ['oznDvorana'] . '<br>';
    }
   
    }
 else {echo 'Odabrana dvorana '.$_GET.' nema rezerviranih termina<br>';
 }
 */