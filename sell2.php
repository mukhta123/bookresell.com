<?php
session_start();
header("location:home.php")
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
$year=$_POST["year"];
$bnc=$_POST["braanch"];
$bn=$_POST["bookname"];
$op=$_POST["oprice"];
$ep=$_POST["eprice"];
$folder="imagess/";
$t=$_FILES["img"]["name"];
$r=$_FILES["img"]["tmp_name"];
$folder="imagess/".$t;
move_uploaded_file($r,$folder);

 
 
    $qy = " insert into sell(year,branch, bookname , originalprice,expectedprice,image) values ('$year','$bnc','$bn','$op','$ep','$folder')";
    $qw=mysqli_query($conn,$qy);
    
    if(!$qw)
    {
        echo "not inserted";
    }
    else
    {
        echo "your file uploaded";
    }
   

 

?>
