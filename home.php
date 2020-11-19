<?php
session_start();
if(!isset($_SESSION['username']))
 {
     header('location:login.php')  ;
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>book resell</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
.recent
  {
    
  }
h2 
{
  font-size: 28px;
background-color: #020407;
color: #dddddd;
}
</style>
<link rel="stylesheet" type="text/css" media="screen,projection" href="master.css" />
<!--[if lt ie 7]><link rel="stylesheet" type="text/css" media="screen,projection" href="ie-win.css" /><![endif]-->
<link rel="start" title="SimplyGold" href="#" />
</head>
<div id="header">
  <h1><a href="#00">Book resell</a></h1>
</div>
<div id="navigation">
  <ul>
    <li class="active"><a href="">Home</a></li>
    <li ><a href="login.php">login</a></li>
    <li><a href="signup.php">signup</a></li>
     
    <li><a href="contact.php">Contact</a></li>
  </ul>
</div>

<body size="width:100%">
 
<div class="container">
<h2 class="text-center text-success"> welcome <?php echo $_SESSION['username'] ;?></h2>
<div>
<h2> You want to</h2>
<form action="buy.php">
<button class="btn btn-primary" type="submit">buy</button>
</form>
<h2>or</h2>
<form action="sell.php">
<button class="btn btn-primary" type="submit">sell</button>
</form>
<a href="login.php">logout</a>
</div>    
 
<div id="footer">
  <div id="meta">
    <div class="recent">
      <h3>Recently Reviewed</h3>
      <ul>
        <li><a href="#">300 by Frank Miller</a></li>
        <li><a href="#">A Big Fat Supernatural Wedding by Sherrilyn Kenyon</a></li>
        <li><a href="#">Strange Candy by Laurell K. Hamilton</a></li>
        <li><a href="#">The Time Traveler's Wife by Audrey Niffenegger</a></li>
        <li><a href="#">Wicked by Gregory Maguire</a></li>
         
      </ul>
    </div>
    <div class="upcoming">
      <h3>To Be Read Still</h3>
      <ul>
        <li><a href="#">The Mephisto Club by Tess Gerritsen</a></li>
        <li><a href="#">The Husband by Dean Koontz</a></li>
        <li><a href="#">The DaVinci Code by Dan Brown</a></li>
        <li><a href="#">Angels Fall by Nora Roberts</a></li>
         
      </ul>
    </div>
    <div class="authors">
      <h3>Favorite Authors</h3>
      <ul>
        <li><a href="#">Suzanne Brockmann</a></li>
        <li><a href="#">Dan Brown</a></li>
        <li><a href="#">J. K. Rowling</a></li>
        <li><a href="#">Tess Gerritsen</a></li>
        
      </ul>
    </div>
    <hr />
  </div>
  <div id="copyright"> Design copyright &copy; 2020-21 design by mukhtar seta </div>
</div>
</body>