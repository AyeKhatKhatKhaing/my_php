<?php
$conn=mysqli_connect("localhost","root","","my_list");
$name=$_GET['name'];

$sql="DELETE FROM photos WHERE photo_link='$name'";
$query=mysqli_query($conn,$sql);
unlink($name);
// header("location:index.php");