<!DOCTYPE html>
<html lang="en-US">
<html>
  <head>
    <meta charset="utf-8"/>
    <style>
    body {
    padding: 0;
    margin: 0;
    }
 #map {
        width: 400px;
        height: 800px;
        background-color: grey;


      }
    </style>
  </head>
  <body>
    <!--The div element for the map -->
    <div id="map"></div>

    <button id = "pickFromMapBtn" onclick = "checkPicking();">Pick coordinate from map</button>

    <label for="locName"> Location/Bin Name </label>
    <input type="text" placeholder="Bin Name" id="locNameInput">

    <label for="latitude">Latitude</label>
    <input type="number" placeholder="latitude" id="ltdInput">

    <label for="longitude"> Longtitude: </label>
    <input type="number" placeholder="longitude" id="lngInput">

   <div>
    <label for="recycle">Recycle</label>
    <input type="checkbox" id="recycle" name="wasteType" value="recycle">

    <label for="comingled">Co-Mingled</label>
    <input type="checkbox" id="comingled" name="wasteType" value="comingled">

    <label for="special">Special</label>
    <input type="checkbox" id="special" name="wasteType" value="special">

    <label for="general">General</label>
    <input type="checkbox" id="general" name="wasteType" value="general">

   </div>

    <button type="button" onclick="getInputValue();">Add location</button>

  </body>
  <script type="text/javascript" src="js/scripts.js"></script>
  <script defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA72fO19fgBMBh0DeOR6e9f9-QCdtJo5Jw&callback=initMap">
    </script>

</html>
