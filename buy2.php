<?php
session_start();
 
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>books available</title>
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
  </ul>
</div>
<?php
$m=$_POST["bname"];
$conn= mysqli_connect('localhost',"root","","book-resell");
if(!$conn)
{
    die("not connect".mysqli_error($conn));
}
else{
   $e="select * from  sell where bookname='$m'";
   $que= mysqli_query($conn,$e);
   if (mysqli_num_rows($que) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($que)) {
      echo "<img src='".$row['image']."' height='200' width='200'/>"."<br>";
      echo "bookname: " . $row["bookname"]."<br>". "  originalprice: " . $row["originalprice"]."<br>". "  expected price: " . $row["expectedprice"]. "<br>";
      
      echo " <form action='buy3.php' method='post' >";
      echo "<input type='submit' value='buy' name='buy'>";
      echo "</form>";
      $_SESSION["price"]=$row['expectedprice'];
      $_SESSION["bookname"]=$row['bookname'];
    }
   
  }
  if (mysqli_num_rows($que) == 0)
  {
    echo "<h2>ypur searched books not available</h2>";
  }
  
  
}

mysqli_close($conn);
?>

 
 
</body>
