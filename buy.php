 
  
 
<!DOCTYPE html>
<html lang="en">
<head>
  <title>buy books</title>
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
 
<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myList li").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>

<link rel="stylesheet" type="text/css" media="screen,projection" href="master.css" />
<!--[if lt ie 7]><link rel="stylesheet" type="text/css" media="screen,projection" href="ie-win.css" /><![endif]-->
<link rel="start" title="SimplyGold" href="#" />
</head>
<body>
  
 
<div id="header">
  <h1><a href="#00">Book resell</a></h1>
</div>
<div id="navigation">
  <ul>
  <liclass="active"><a href="">Home</a></li>
    <li ><a href="login.php">login</a></li>
    <li><a href="signup.php">signup</a></li>
     
    <li><a href="contact.php">Contact</a></li>act</a></li>
  </ul>
</div>

 
<h2>which book you want to buy </h2>
<p>search by book name</p> 
<form action="buy2.php" method="post" enctype="multipart/form-data">
<input  size="50" name="bname"id="myInput" type="text" placeholder="enter book name here">
<input type="submit" value="search" name="submit">
</form> 
<br>

<ul id="myList">
  <li>wings  of fire</li>
  <li>chankya</li>
  <li> avengers </li>
  <li> basic of civil</li>
 

 
  
</body>
</html>