<?php
require_once 'config.php';

// Escape user inputs for security
$bName = mysqli_real_escape_string($link, $_REQUEST['bName']);
// Perform query
$sql = "DELETE FROM map WHERE bName='$bName'";
// Return status
if(mysqli_query($link, $sql)){
    echo "200";
} else{
    echo "ERROR: Unable to execute $sql. " . mysqli_error($link);
}
// close connection
mysqli_close($link);
?>
