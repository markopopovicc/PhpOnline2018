<?php

include_once 'db_conn.php';

$query = "SELECT oznDvorana FROM dvorana ORDER BY oznDvorana ASC";

$result = $mysqli -> query($query);

if ($result) {
    
    while ($row = $result -> fetch_assoc()) {
    
       echo '<a href="rezervacija.php?oznDvorana=' .
       urlencode($row['oznDvorana']). '">' . htmlspecialchars($row['oznDvorana']) . 
           '</a><br/>';
     }
}  $mysqli -> close();
