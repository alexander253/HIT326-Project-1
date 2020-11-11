<?php
// Include config file
require_once 'config.php';
// Perform query
$sql = "SELECT bName, ltdVal, lngVal, rec, co, gen, spe, bColor, bNum, bIndex FROM map";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        // set array
        $array = array();
        while($row = mysqli_fetch_array($result)){
            $array[] = $row;
        }
        class markerLocation
        {
            public $bName;
            public $ltdVal;
            public $lngVal;
            public $rec;
            public $co;
            public $gen;
            public $spe;
            public $bColor;
            public $bNum;
            public $bIndex;

        }
        $parsedResult = array();
        $arrLength = count($array);
        for ($i=0; $i < $arrLength; $i++) {
            $loc = new markerLocation();
            $loc->bName = $array[$i][0];
            $loc->ltdVal = $array[$i][1];
            $loc->lngVal = $array[$i][2];
            $loc->rec = $array[$i][3];
            $loc->co = $array[$i][4];
            $loc->gen = $array[$i][5];
            $loc->spe = $array[$i][6];
            $loc->bColor = $array[$i][7];
            $loc->bNum = $array[$i][8];
            $loc->bIndex = $array[$i][9];

            array_push($parsedResult,$loc);
        }
        echo json_encode($parsedResult);

        mysqli_free_result($result);

    } else{
        echo "<div class='alert alert-warning' role='alert'>No places were found in the database!</div>";
    }
} else{
    echo "ERROR: Unable to execute $sql. " . mysqli_error($link);
}
// Close connection
mysqli_close($link);
?>
