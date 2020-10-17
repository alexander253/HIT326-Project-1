<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8' />
<title><?php echo $title ?></title>
<link rel="stylesheet" href="/css/standard.css" />

<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/styles.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="manifest" href="manifest.webmanifest">
<meta name="Description" content="CDU">

</head>
<body>
  <header class="header-nav">
  <h2 style="font-size: 25px;">CDU Waste Management<span>&#9842;</span></h2>
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
    <a href="/" style="width: 85%; color: #007a87;"><span class="material-icons" style="font-size: 3rem;">home</span><p style="margin: auto; font-size: 1.2rem;">Home</p></a>
    <a href="/map_main" style="width: 85%; color: #007a87;"><span class="material-icons" style="font-size: 3rem;">location_on</span><p style="margin: auto; font-size: 1.2rem;">Bins</p></a>
    <a href="/leaderboard" style="width: 85%; color: #007a87;"><span class="material-icons" style="font-size: 3rem;">equalizer</span><p style="margin: auto; font-size: 1.2rem;">Leaderboard</p></a>
    <a href="/all_rubbish" style="width: 85%; color: #007a87;"><span class="material-icons" style="font-size: 3rem;">auto_delete</span><p style="margin: auto; font-size: 1.2rem;">Waste Items</p></a>
    <a href="/myaccount" style="width: 85%; color: #007a87;"><span class="material-icons" style="font-size: 3rem;">account_circle</span><p style="margin: auto; font-size: 1.2rem;">Account</p></a>
  </div>
</section>


</body>
</html>
