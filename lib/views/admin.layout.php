<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8' />
<title><?php echo $title ?></title>
 <link rel="stylesheet" href="/css/different.css" />
 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 <link rel="stylesheet" href="css/bootstrap.css">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 <link rel="stylesheet" type="text/css" href="css/styles.css">
 <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
 <link rel="manifest" href="manifest.webmanifest">
</head>
<body>
  <header class="header-nav" id="header-nav-admin">
  <h2>CDU Waste Management- ADMIN<span>&#9842;</span></h2>
</header>

<div id="main">
<nav>
<ul>
    <!--
  <li><a href='/'>Home</a></li>
  <li><a href='/bins'>Bins</a></li>
  <li><a href='/addbin'>Add a Bin</a></li>
<li><a href='/cart'>My Cart</a></li>
      <li><a href='/myaccount'>My Account</a></li>
      <li><a href='/signin'>Sign in</a></li>
      <li><a href='/signup'>Sign up</a></li>
      <li><a href='/points'>Points</a></li>


  <li><a href='/leaderboard'>Leader Board</a></li>

  <li><a href='/signout'>Sign out</a></li>

  <li><a href='/addrubbish_item'>Add rubbish item</a></li>
  <li><a href='/rubbish_items'>Rubbish items</a></li>
  -->


</ul>
</nav>


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
    <a href="/" style="width: 85%;"><span class="material-icons" style="font-size: 3rem;">home</span><p style="margin: auto;">Home</p></a>
    <!--<a href="/map/index" style="width: 85%;"><span class="material-icons" style="font-size:3rem;">location_on</span><p style="margin: auto;">Bins</p></a>-->
    <a href="/map_admin" style="width: 85%;"><span class="material-icons" style="font-size:3rem;">location_on</span><p style="margin: auto;">Bins</p></a>
    <a href="/leaderboard"><span class="material-icons" style="font-size: 3rem;">equalizer</span><p style="margin: auto;">Leaderboard</p></a>
    <a href="/rubbish_items"><span class="material-icons" style="font-size: 3rem;">auto_delete</span><p style="margin: auto;">Waste Items</p></a>
    <a href="/myaccount" style="width: 85%;"><span class="material-icons" style="font-size: 3rem;">home</span><p style="margin: auto;">Account</p></a>
  </div>
</section>

</body>
</html>
