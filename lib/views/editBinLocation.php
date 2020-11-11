<?php
require_once 'config.php';

// Escape user inputs for security
$bName = mysqli_real_escape_string($link, $_REQUEST['bName']);
$ltdVal = mysqli_real_escape_string($link, $_REQUEST['ltdVal']);
$lngVal = mysqli_real_escape_string($link, $_REQUEST['lngVal']);
$rec = mysqli_real_escape_string($link, $_REQUEST['rec']);
$co = mysqli_real_escape_string($link, $_REQUEST['co']);
$gen = mysqli_real_escape_string($link, $_REQUEST['gen']);
$spe = mysqli_real_escape_string($link, $_REQUEST['spe']);
// Perform query
$sql = "UPDATE map SET ltdVal='$ltdVal', lngVal='$lngVal', rec='$rec', co='$co', gen='$gen', spe='$spe' WHERE bName ='$bName'";
// Return status
if(mysqli_query($link, $sql)){
    echo "200";
} else{
    echo "ERROR: Unable to execute $sql. " . mysqli_error($link);
}
// close connection
mysqli_close($link);
?>
