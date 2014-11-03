<?php 

// connect to db here
$mysqli = new mysqli($host, $user, $pword, $db);

// now do important stuff
$query = "get my data";
$results = $mysqli->query($query);

// added more stuff 



 ?>