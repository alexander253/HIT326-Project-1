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
$bColor = mysqli_real_escape_string($link, $_REQUEST['bColor']);
$bNum = mysqli_real_escape_string($link, $_REQUEST['bNum']);
$bIndex = mysqli_real_escape_string($link, $_REQUEST['bIndex']);
// Perform query
$sql = "INSERT INTO map (id, bName, ltdVal, lngVal, rec, co, gen, spe, bColor, bNum, bIndex) VALUES (NULL, '$bName', '$ltdVal', '$lngVal', '$rec', '$co', '$gen', '$spe', '$bColor', '$bNum', '$bIndex')";
// Return status
if(mysqli_query($link, $sql)){
    echo "200";
} else{
    echo "ERROR: Unable to execute $sql. " . mysqli_error($link);
}
// close connection
mysqli_close($link);
?>
