<?php
$username="root";
$password="";
$hostname="localhost";
$dbname="reservation";
$connection=mysqli_connect($hostname,$username,$password,$dbname) or die("db not connected");
echo"connection established<br/>";

$name=$_POST['name'];
$checkin=$_POST['datein'];
$checkout=$_POST['dateout'];
$adult=$_POST['adult'];
$children=$_POST['children'];
$total=$_POST['total'];
echo"$name";
echo"$checkin";
if($submit=$_POST['submit'])
{
$submit="INSERT INTO blackthunder VALUES('$name','$checkin','$checkout','$adult','$children','$total')";
$rs=mysqli_query($connection,$submit);
if($rs)
{
echo"Contact records Inserted!";
}
else
{
    echo"contact records not inserted!";
}
}
?>