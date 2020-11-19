 
<!DOCTYPE html>
<html lang="en">
<head>
  <title>signup</title>
  <script src="js1.js"></script>
 
<style>


.outer {
	display: table;
	position: absolute;
	top: 0;
	left: 0;
	height: 100%;
  
	width: 100%;
	
  }
  
  .middle {
	display: table-cell;
	vertical-align: middle;
	
  }
  
  .inner {
	margin-left: auto;
	margin-right: auto;
	width: 600px;
		box-align: right center;
		background-color: #EEEEEE;
  }
.col-lg-6
{
	margin-right: auto;
	margin-left:auto;
}
.recent
  {
    
  }
h2 
{
  font-size: 28px;
background-color: #020407;
color: #dddddd;
}
.form-control
{
	float=left;
}
#float
{
	float=left;
}
#button
{
  padding= 100px;
}

</style>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="js1,js"></script>
  <style>

</style>
<link rel="stylesheet" type="text/css" media=" " href="master.css" />
<!--[if lt ie 7]><link rel="stylesheet" type="text/css" media="screen,projection" href="ie-win.css" /><![endif]-->
<link rel="start" title="SimplyGold" href="#" />
</head>
<body>
<div id="header">
  <h1><a href="#00">Book resell</a></h1>
</div>
<div id="navigation">
  <ul>
  <li><a href="home.php">Home</a></li>
    <li ><a href="login.php">login</a></li>
    <li class="active"><a href="signup.php">signup</a></li>
     
    <li><a href="contact.php">Contact</a></li>
  </ul>
</div>

<body bg-color="blue">
 <div class="outer">
  <div class="middle">
    <div class="inner">
     
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h2>signup form</h2>
                <form action="registration.php" method="post">
                    <div class="form-group">
                        <label for="" id="float">username</label>
                        <input type="text" id="user" name="user" class="form-control"  onblur="valid()">
                        <span id="i1" style="color:red"></span>
                    </div>
                    <div class="form-group">
                        <label for="" id="float">password</label>
                        <input type="password" id="pass" name="pass" class="form-control" onblur="valid()">
                        <span id="i2" style="color:red"></span>
                    </div>
                    <div class="form-group">
                        <label for="" id="float">email</label>
                        <input  id="email" type="email" name="email" class="form-control" onblur="valid()">
                        <span id="i3" style="color:red"></span>
                    </div>
                    <div class="form-group">
                        <label for="" id="float">mobile number</label>
                        <input  id="mob" name="mob" class="form-control" onblur="valid()">
                        <span id="i4" style="color:red"></span>
                    </div>
                    <button type = "submit" id="button" class="btn btn-primary">signup</button>
                    <a href="http://localhost/php/book%20resell/login.php">
                    <button class="btn btn-primary" id="button"> login</button></a>
                </form>
            </div>
        </div>
    </div>

        </div>
        </div>
    </div>

</body>
</html>

