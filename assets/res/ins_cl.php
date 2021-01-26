<?php
$name=$_POST['name'];
$phone=$_POST['phone'];
$uni=$_POST['uni'];
$room=$_POST['room'];
$msg=$_POST['msg'];

$con=@mysqli_connect("localhost","root","","client");
$sql="INSERT INTO clean(name,phone,uni,room,msg) VALUES('$name','$phone','$uni','$room','$msg')";
mysqli_query($con,$sql);
header("location:../../cl.php");
?>
?>
?>