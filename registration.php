<?php
session_start();
header('location:login.php');
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
$eml=$_POST["email"];
$mob=$_POST["mob"];
$q="SELECT * FROM  signup where  email='$eml' or  mobilenumber='$mob'";
$r=mysqli_query($conn,$q);
$num=mysqli_num_rows($r);
if($num==1)
{
    echo "duplicate value";
}
else
{
    $qy = " insert into signup(username , password1 , email , mobilenumber) values ('$uname','$pass','$eml','$mob')";
    $qw=mysqli_query($conn,$qy);
    
    if(!$qw)
    {
        echo "not inserted";
    }
    else
    {
        echo "regisration  successfully";
    }
}
?>