<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8' />
<title><?php echo $title ?></title>
 <link rel="stylesheet" href="/css/different.css" />
 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 <link rel="stylesheet" href="css/bootstrap.css">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 <link rel="stylesheet" type="text/css" href="css/styles2.css">
 <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
 <link rel="manifest" href="manifest.webmanifest">
</head>
<body>
  <header class="header-nav" id="header-nav-admin">
  <h2>CDU Waste Management- ADMIN<span>&#9842;</span></h2>
</header>

<div id="main">
<div id='content'>
<?php
  if(!empty($flash)){
    echo "<p class='flash'>{$flash}</p>";
  }
  if(!empty($error)){
    echo "<p class='flash'>{$error}</p>";
  }
  require $content;
?>
</div> <!-- end content -->

</div> <!-- end main -->
<section class="quickicon">
  <div class="footer-nav" id="footer-nav-admin">
    <a href="/" style="width: 85%; color: white;"><span class="material-icons" style="font-size: 3rem; color: white;">home</span><p style="margin: auto;">Home</p></a>
    <!--<a href="/map/index" style="width: 85%;"><span class="material-icons" style="font-size:3rem;">location_on</span><p style="margin: auto;">Bins</p></a>-->
    <a href="/map_admin" style="width: 85%; color: white;"><span class="material-icons" style="font-size:3rem; color: white;">location_on</span><p style="margin: auto;">Bins</p></a>
    <a href="/leaderboard" style="width: 85%; color: white;"><span class="material-icons" style="font-size: 3rem; color: white;">equalizer</span><p style="margin: auto;">Leaderboard</p></a>
    <a href="/rubbish_items" style="width: 85%; color: white;"><span class="material-icons" style="font-size: 3rem; color: white;">auto_delete</span><p style="margin: auto;">Waste Items</p></a>
    <a href="/myaccount" style="width: 85%; color: white;"><span class="material-icons" style="font-size: 3rem; color: white;">home</span><p style="margin: auto;">Account</p></a>
  </div>
</section>

</body>
</html>
