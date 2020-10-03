<?php
/* Database credentials. Pls don't abuse */
define('DB_SERVER', 'z8dl7f9kwf2g82re.cbetxkdyhwsb.us-east-1.rds.amazonaws.com');
define('DB_USERNAME', 's2j1nc0cwmiyk1ds');
define('DB_PASSWORD', 'wrih75ysww2o76c3');
define('DB_NAME', 'onsigltezg12crks');

/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>
