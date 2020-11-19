<?php
session_start();

$conn= mysqli_connect('localhost',"root","","book-resell");
if(!$conn)
{
    die("not connect".mysqli_error($conn));
}
else{
    echo"connected";
}
$uname=$_POST["user"];
$pass=$_POST["pass"];
 
$q="SELECT * FROM  signup where  username='$uname'  and password1='$pass'";
$r=mysqli_query($conn,$q);
$num=mysqli_num_rows($r);
if($num==1)
{
     $_SESSION['username']=$uname;
     header('location:home.php');
}
else
{
 
  header('location:logout.php')  ;
}

 
 ?>