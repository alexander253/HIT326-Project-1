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
  <h2 style="font-size: 20px;">CDU Waste Management- ADMIN<span>&#9842;</span></h2>
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
        <div class="footer-nav">
            <a href="/" style="width: 85%; color: #a90329;"><span class="material-icons" style="font-size: 3rem; color: #a90329;">home</span><p style="margin: auto; font-size: 1.2rem;">Home</p></a>
            <a href="/map_admin" style="width: 85%; color: #a90329;"><span class="material-icons" style="font-size: 3rem; color: #a90329;">location_on</span><p style="margin: auto; font-size: 1.2rem;">Bins</p></a>
            <a href="/leaderboard" style="width: 85%; color: #a90329;"><span class="material-icons" style="font-size: 3rem; color: #a90329;">equalizer</span><p style="margin: auto; font-size: 1.2rem;">Leaderboard</p></a>
            <a href="/rubbish_items" style="width: 85%; color: #a90329;"><span class="material-icons" style="font-size: 3rem; color: #a90329;">auto_delete</span><p style="margin: auto; font-size: 1.2rem;">Waste Items</p></a>
            <a href="/myaccount" style="width: 85%; color: #a90329;"><span class="material-icons" style="font-size: 3rem; color: #a90329;">account_circle</span><p style="margin: auto; font-size: 1.2rem;">Account</p></a>
        </div>
</section>

</body>
</html>
