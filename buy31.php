<?php
session_start();
$_SESSION["price1"]=$_SESSION["price"] ;
$_SESSION["bookname1"]=$_SESSION["bookname"] ;
header('location:order.php');
?>
<?php
 
$conn= mysqli_connect('localhost',"root","","book-resell");
if(!$conn)
{
    die("not connect".mysqli_error($conn));
}
else{
    echo"connected";
}
$uname=$_POST["name"];
$ad=$_POST["ad"];
$city=$_POST["ct"];
$bname=$_SESSION["bookname"];
$price=$_SESSION["price"];
$pm=$_POST["paymentmethod"];
 
    $qy = " insert into address(name , address , city ,bookname,price,paymentmethod) values ('$uname','$ad','$city','$bname','$price','$pm')";
    $qw=mysqli_query($conn,$qy);
    
    if(!$qw)
    {
        echo "not inserted";
    }
    else
    {
        echo "ordered   successfully";
    }

?>