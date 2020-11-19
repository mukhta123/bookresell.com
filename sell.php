 

 

 
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
  <title>sell</title>
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
  <li ><a href="">Home</a></li>
    <li ><a href="login.php">login</a></li>
    <li><a href="signup.php">signup</a></li>
     
    <li><a href="contact.php">Contact</a></li>
  </ul>
</div>


 
<body bg-color="blue">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h2>fill details of book that you want to sell</h2>
                <form action="sell2.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="">year</label>
                        <input type="number" id="year" name="year" class="form-control"  onblur="valid()">
                        <span id="i11" style="color:red"></span>
                    </div>
                    <div class="form-group">
                        <label for="">branch</label>
                        <input type="text" id="branch" name="braanch" class="form-control" onblur="valid()">
                        <span id="i12" style="color:red"></span>
                    </div>
                    <div class="form-group">
                        <label for="">Book Name</label>
                        <input  id="bookname" type="text" name="bookname" class="form-control" onblur="valid()">
                        <span id="i13" style="color:red"></span>
                    </div>
                    <div class="form-group">
                        <label for="">Original Price </label>
                        <input type="number"  id="oprice" name="oprice" class="form-control" onblur="valid()">
                        <span id="i14" style="color:red"></span>
                    </div>
		    <div class="form-group">
                        <label for="">Expected Price</label>
                        <input type="Number" id="eprice" name="eprice" class="form-control"  onblur="valid()">
                        <span id="i15" style="color:red"></span>
                    </div>
                    <div class="form-group">
                        <label for=""> image of book</label>
                        <input type="file" id="imge" name="img" class="form-control"  >
                         
                    </div>
                   
                    <a href="home.php"><button class="btn btn-primary">submit</button></a>
                </form>
            </div>
        </div>
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
</html>