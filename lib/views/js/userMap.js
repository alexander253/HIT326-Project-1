//dataStorage = window.localStorage;

var coordinatePickingMode = false;

var map;

var locationsFromDB = [];

var userPos;

var userLoc;

// Get added places locations from database and place them on map
function fetchMarkersFromDB(){
  $.ajax({
    type: "GET",
    url: "getBinInfo.php",
    dataType: 'json',
    success: function(response){
        locationsFromDB = response;
        console.log(locationsFromDB);
        // Init map
        initMap();
    },
    error: function(response){
      window.alert('response: ' + response, 'Fetching map markers from database failed :(');
      // Init map anyways
      initMap();
  }
  });
}

// Call fetchMarkersFromDB() when page has loaded
window.onload = function () {
        fetchMarkersFromDB();
    }

// Initialize and add the map
function initMap() {
  //lat and lng of cdu campus
  var cduCasCampus = {lat: -12.372, lng: 130.869};
  // The map, centered at Casuarina Campus
  //-12.371766, 130.868918

  var cduCasuarinaCampusLIB = {lat: -12.371610, lng: 130.869377};
  //Library longitude -12.371610 and latitude 130.869377

  map = new google.maps.Map(
      document.getElementById('userMap'), {zoom: 17, center: cduCasCampus});


  //var cduCasCampusMarker = new google.maps.Marker({position: cduCasCampus, map: map});

  //var cduCasLibMarker = new google.maps.Marker({position:cduCasuarinaCampusLIB, map: map, animation:google.maps.Animation.BOUNCE});

  //define paths for cdu lib polygon
  var cduCasCoords = [
    {lat: -12.371339, lng: 130.869756}, //top right corner of lib -12.371339, 130.869756
    {lat: -12.371222, lng: 130.869624}, //moving anti-clockwise corner, -12.371222, 130.869624
    {lat: -12.371461, lng: 130.869405}, //-12.371461, 130.869405
    {lat: -12.371201, lng: 130.869109}, //-12.371201, 130.869109
    {lat: -12.371443, lng: 130.869118}, //-12.371443, 130.869118
    {lat: -12.371592, lng: 130.869284}, //-12.371592, 130.869284
    {lat: -12.371927, lng: 130.868976}, //-12.371927, 130.868976
    {lat: -12.372042, lng: 130.869107} //-12.372042, 130.869107
  ];

  //var cduLibPolygon= new google.maps.Polygon({
  //paths: cduCasCoords,
  //map: map,
  //strokeColor:"red",
  //strokeOpacity:0.8,
  //strokeWeight:2,
  //fillColor:"light red",
  //fillOpacity:0.4
  //});

  //cduLibPolygon.addListener('click', function (){
    //window.location.href = 'https://www.cdu.edu.au/library';
  //});

 for (var i = 0; i< locationsFromDB.length; i++){
    var ltd = parseFloat(locationsFromDB[i].ltdVal);
    var lng = parseFloat(locationsFromDB[i].lngVal);
    var locCoords = {lat: ltd, lng: lng};
    var locName = locationsFromDB[i].bName;
    var key = locName;
    var rec = parseInt(locationsFromDB[i].rec);
    var co = parseInt(locationsFromDB[i].co);
    var gen = parseInt(locationsFromDB[i].gen);
    var spe = parseInt(locationsFromDB[i].spe);

    var locName = new google.maps.Circle({
      title: key,
      center: locCoords,
      radius:1,
      map: map,
      strokeColor: 'grey',
      strokeOpacity: 0.8,
      strokeWeight: 2,
      fillColor: 'grey',
      fillOpacity: 0.35
    });


    google.maps.event.addListener( locName, 'click', function (evt){
      var key = this.get('title');
      window.location.href = '#'+key;
      var locNameTd = document.getElementById(key);
      locNameTd.classList.add("viewedTd");
      setTimeout(() => { locNameTd.classList.remove("viewedTd"); }, 3000);
    });

    if (rec == 1){
      recCoords = {lat: ltd + 0.000005, lng: lng}
      var locNameRec = new google.maps.Circle({
        center: recCoords,
        radius:0.25,
        map: map,
        strokeColor: 'yellow',
        strokeOpacity: 0.8,
        strokeWeight: 2,
        fillColor: 'yellow',
        fillOpacity: 0.35
      });
    }

    if (co == 1){
      coCoords = {lat: ltd, lng: lng - 0.000005}
      var locNameCo = new google.maps.Circle({
        center: coCoords,
        radius:0.25,
        map: map,
        strokeColor: 'red',
        strokeOpacity: 0.8,
        strokeWeight: 2,
        fillColor: 'yellow',
        fillOpacity: 0.35
      });
    }

    if (gen == 1){
      genCoords = {lat: ltd, lng: lng + 0.000005}
      var locNameGen = new google.maps.Circle({
        center: genCoords,
        radius:0.25,
        map: map,
        strokeColor: 'green',
        strokeOpacity: 0.8,
        strokeWeight: 2,
        fillColor: 'green',
        fillOpacity: 0.35
      });
    }

    if (spe == 1){
      speCoords = {lat: ltd - 0.000005, lng: lng}
      var locNamespe = new google.maps.Circle({
        center: speCoords,
        radius:0.25,
        map: map,
        strokeColor: 'blue',
        strokeOpacity: 0.8,
        strokeWeight: 2,
        fillColor: 'blue',
        fillOpacity: 0.35
      });
    }
  }
/*
  if (localStorage.length >= 1){
    for (var index = 0; index < localStorage.length; index++){
      var locName = localStorage.key(index);
      var key = locName;
      var locDetails = JSON.parse(localStorage.getItem(locName));
      var ltd = parseFloat(locDetails.ltd);
      var lng = parseFloat(locDetails.lng);
      var rec = locDetails.rec;
      var co = locDetails.co;
      var gen = locDetails.gen;
      var spe = locDetails.spe;
      var locCoords = {lat: ltd, lng: lng};

      var locName = new google.maps.Circle({
        title: key,
        center: locCoords,
        radius:1,
        map: map,
        strokeColor: 'grey',
        strokeOpacity: 0.8,
        strokeWeight: 2,
        fillColor: 'grey',
        fillOpacity: 0.35
      });

      google.maps.event.addListener( locName, 'click', function (evt){
        var key = this.get('title');
        window.location.href = '#'+key;
        var locNameTd = document.getElementById(key);
        locNameTd.classList.add("viewedTd");
        setTimeout(() => { locNameTd.classList.remove("viewedTd"); }, 3000);
      });

      if (rec == true){
        recCoords = {lat: ltd + 0.000005, lng: lng}
        var locNameRec = new google.maps.Circle({
          center: recCoords,
          radius:0.25,
          map: map,
          strokeColor: 'yellow',
          strokeOpacity: 0.8,
          strokeWeight: 2,
          fillColor: 'yellow',
          fillOpacity: 0.35
        });
      }

      if (co == true){
        coCoords = {lat: ltd, lng: lng - 0.000005}
        var locNameCo = new google.maps.Circle({
          center: coCoords,
          radius:0.25,
          map: map,
          strokeColor: 'red',
          strokeOpacity: 0.8,
          strokeWeight: 2,
          fillColor: 'yellow',
          fillOpacity: 0.35
        });
      }

      if (gen == true){
        genCoords = {lat: ltd, lng: lng + 0.000005}
        var locNameGen = new google.maps.Circle({
          center: genCoords,
          radius:0.25,
          map: map,
          strokeColor: 'green',
          strokeOpacity: 0.8,
          strokeWeight: 2,
          fillColor: 'green',
          fillOpacity: 0.35
        });
      }

      if (spe == true){
        speCoords = {lat: ltd - 0.000005, lng: lng}
        var locNamespe = new google.maps.Circle({
          center: speCoords,
          radius:0.25,
          map: map,
          strokeColor: 'blue',
          strokeOpacity: 0.8,
          strokeWeight: 2,
          fillColor: 'blue',
          fillOpacity: 0.35
        });
      }

    }
  }
  */

  listAllLocations();
  filterCheck();
  filterChangeColor();

  map.addListener('click', function(e) {
         if (coordinatePickingMode === true){
           GetCoordinatesFromMap(e.latLng, map);
         } else {
           // do nothing so that map can be operated normally
         }
       });

       if (userLoc == null){
         if (navigator.geolocation) {
                 navigator.geolocation.getCurrentPosition(function(position) {

                   var userIcon = {
                     url : 'https://img.icons8.com/dusk/16/000000/user-location.png', //LINK to icons: https://icons8.com/icons/set/user-16x16
                     size: new google.maps.Size(16, 16)
                   }

                   userPos = {
                     lat: position.coords.latitude,
                     lng: position.coords.longitude
                   };
                   userLoc = true;

                   var userLocationMarker = new google.maps.Marker({position: userPos, map: map, icon: userIcon});
                 }, function() {
                   handleLocationError(true, infoWindow, map.getCenter());
                 });
               } else {
                 // Browser doesn't support Geolocation
                 handleLocationError(false, infoWindow, map.getCenter());
               }
             function handleLocationError(browserHasGeolocation, infoWindow, pos) {
               infoWindow.setPosition(pos);
               infoWindow.setContent(browserHasGeolocation ?
                                     'Error: The Geolocation service failed.' :
                                     'Error: Your browser doesn\'t support geolocation.');
               infoWindow.open(map);
             }
       } else if(userLoc == true){
         navigator.geolocation.getCurrentPosition(function(position) {

           var userIcon = {
             url : 'https://img.icons8.com/dusk/16/000000/user-location.png', //LINK to icons: https://icons8.com/icons/set/user-16x16
             size: new google.maps.Size(16, 16)
           }

           userPos = {
             lat: position.coords.latitude,
             lng: position.coords.longitude
           };
           userLoc = true;

           var userLocationMarker = new google.maps.Marker({position: userPos, map: map, icon: userIcon});
         }, function() {
           handleLocationError(true, infoWindow, map.getCenter());
         });
       } else {
         // Browser doesn't support Geolocation
         handleLocationError(false, infoWindow, map.getCenter());
       }
     function handleLocationError(browserHasGeolocation, infoWindow, pos) {
       infoWindow.setPosition(pos);
       infoWindow.setContent(browserHasGeolocation ?
                             'Error: The Geolocation service failed.' :
                             'Error: Your browser doesn\'t support geolocation.');
       infoWindow.open(map);
       }

}

//get all bin locations
function listAllLocations(){
  document.getElementById("outputTable").innerHTML = "";
  if (localStorage.length >= 1) {

    const binLocations = [];

    for (var i = 0; i< locationsFromDB.length; i++){
       binLocations.push(locationsFromDB[i]);
    }

    binLocations.forEach((location) => {
        listLocations(location);
      });

  };

}

//filter bin locations
function filterCheck(){
  var recFilCheck = document.getElementById("recFilter").checked;
  var coFilCheck = document.getElementById("coFilter").checked;
  var genFilCheck = document.getElementById("genFilter").checked;
  var speFilCheck = document.getElementById("speFilter").checked;

  var bColorFilterInput = document.getElementById("bColorFilter");
  var bColorFilter = bColorFilterInput.options[bColorFilterInput.selectedIndex].text;

  var bNumberFilterInput = document.getElementById("bNumberFilter");
  var bNumberFilter = bNumberFilterInput.options[bNumberFilterInput.selectedIndex].text;

  var bIndexFilterInput = document.getElementById("binIndexFilter");
  var bIndexFilter = bIndexFilterInput.value;

  var bFilterName = bColorFilter + " " + bNumberFilter + " B" + bIndexFilter;

  if (recFilCheck==false && coFilCheck==false && genFilCheck==false && speFilCheck==false && bColorFilter == "---" && bNumberFilter == "---" && bIndexFilter == ""){
    listAllLocations();
  } else{

    if (localStorage.length >= 1) {

      const binLocations = [];
      document.getElementById("outputTable").innerHTML = "";
      for (var i = 0; i< locationsFromDB.length; i++){
         var ltd = parseFloat(locationsFromDB[i].ltdVal);
         var lng = parseFloat(locationsFromDB[i].lngVal);
         var locName = locationsFromDB[i].bName;
         var rec = parseInt(locationsFromDB[i].rec);
         var co = parseInt(locationsFromDB[i].co);
         var gen = parseInt(locationsFromDB[i].gen);
         var spe = parseInt(locationsFromDB[i].spe);

        if (bColorFilter == "---" || bNumberFilter == "---" || bIndexFilter == ""){
          if (bIndexFilter == ""){
            if (bNumberFilter == "---"){
              if (locationsFromDB[i].bColor == bColorFilter){
                binLocations.push(locationsFromDB[i]);
              }
            }
            else if (locationsFromDB[i].bColor == bColorFilter && locationsFromDB[i].bNum == bNumberFilter){
              binLocations.push(locationsFromDB[i]);
            }
          }else if (locationsFromDB[i].bColor == bColorFilter || locationsFromDB[i].bNum == bNumberFilter || locationsFromDB[i].bName == bFilterName){
            binLocations.push(locationsFromDB[i]);
          }
        }
        if (locationsFromDB[i].rec == true && recFilCheck == true
          || locationsFromDB[i].co == true && coFilCheck == true
          || locationsFromDB[i].gen == true && genFilCheck == true
          || locationsFromDB[i].spe == true && speFilCheck == true
          || locationsFromDB[i].bName == bFilterName){
          binLocations.push(locationsFromDB[i]);
        }

      }

      binLocations.forEach((location) => {
          listLocations(location);
        });
    };
  }
}


function filterChangeColor(){
  var bColorFilterInput = document.getElementById("bColorFilter");
  var bColorFilter = bColorFilterInput.options[bColorFilterInput.selectedIndex].value;
  if (bColorFilter=="---"){
    bColorFilterInput.style.backgroundColor = "white";
    bColorFilterInput.style.color = "black";
  } else {
    bColorFilterInput.style.backgroundColor = bColorFilter;
    bColorFilterInput.style.color = bColorFilter;
  }

}

function clearFilter(){
  var bColFilInput = document.querySelector("#bColorFilter");
  var bNumFilInput = document.querySelector("#bNumberFilter");
  var bIndexFilter = document.querySelector("#binIndexFilter");
  var recFilInput = document.querySelector("#recFilter");
  var coFilInput = document.querySelector("#coFilter");
  var genFilInput = document.querySelector("#genFilter");
  var speFilInput = document.querySelector("#speFilter");

  bColFilInput.value = "---";
  bNumFilInput.value = "---";
  bIndexFilter.value = "";

  recFilInput.checked = false;

  coFilInput.checked = false;

  genFilInput.checked = false;

  speFilInput.checked = false;
  filterChangeColor();
  filterCheck();

}

function viewOnMap(evt) {
  evt.preventDefault();

  locNameToView = evt.target.dataset.key;
  for (var i = 0; i< locationsFromDB.length; i++){
     var ltd = parseFloat(locationsFromDB[i].ltdVal);
     var lng = parseFloat(locationsFromDB[i].lngVal);
     var locCoords = {lat: ltd, lng: lng};
     var locName = locationsFromDB[i].bName;
     if (locNameToView == locName){
       map.setCenter(locCoords);
       map.setZoom(25);
     }
  }
};


function listLocations(location){

  var row = document.createElement('tr');

  var locNameTd = document.createElement('td');
  locNameTd.innerHTML = location.bName;
  locNameTd.setAttribute("id", location.bName);

  //var ltdTd = document.createElement('td');
  //ltdTd.innerHTML = parseFloat(value.ltd).toFixed(2);

  //var lngTd = document.createElement('td');
  //lngTd.innerHTML = parseFloat(value.lng).toFixed(2);

  var recTd = document.createElement('td');
  if (location.rec == true){
    recTd.style.backgroundColor = "lightgreen";
  } else {
    recTd.style.backgroundColor = "grey";
  }

  var coTd = document.createElement('td');
  if (location.co == true){
    coTd.style.backgroundColor = "lightgreen";
  } else {
    coTd.style.backgroundColor = "grey";
  }

  var genTd = document.createElement('td');
  if (location.gen == true){
    genTd.style.backgroundColor = "lightgreen";
  } else {
    genTd.style.backgroundColor = "grey";
  }

  var speTd = document.createElement('td');
  if (location.spe == true){
    speTd.style.backgroundColor = "lightgreen";
  } else {
    speTd.style.backgroundColor = "grey";
  }

  var viewButtonTd = document.createElement('td');
  var viewButton = document.createElement('button');
  viewButton.className = 'listButtons';
  viewButton.dataset.key = location.bName;
  viewButtonTd.appendChild(viewButton);
  viewButton.innerHTML = 'View';
  viewButton.addEventListener('click', viewOnMap);

  row.appendChild(locNameTd);
  //col.appendChild(ltdTd);
  //col.appendChild(lngTd);
  row.appendChild(recTd);
  row.appendChild(coTd);
  row.appendChild(genTd);
  row.appendChild(speTd);
  row.appendChild(viewButtonTd);

  document.getElementById('outputTable').appendChild(row);
  return row;

}

function focusOnUser(){
  if (userLoc == false){
    alert("Your location is not yet found, please enable location or wait to try again");
  } else if (userLoc == true){
    map.setCenter(userPos);
    map.setZoom(25);
  }
}

function resetSelfLocation(){
  initMap();
}
