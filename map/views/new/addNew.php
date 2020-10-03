<?php
require_once '../../config.php';

// Escape user inputs for security
$title = mysqli_real_escape_string($link, $_REQUEST['title']);
$description = mysqli_real_escape_string($link, $_REQUEST['description']);
$lat = mysqli_real_escape_string($link, $_REQUEST['lat']);
$lng = mysqli_real_escape_string($link, $_REQUEST['lng']);

// Perform query
$sql = "INSERT INTO map (id, title, description, lat, lng) VALUES (NULL, '$title', '$description', '$lat', '$lng')";
// Return status
if(mysqli_query($link, $sql)){
    echo "200";
} else{
    echo "ERROR: Unable to execute $sql. " . mysqli_error($link);
}
// close connection
mysqli_close($link);
?>
