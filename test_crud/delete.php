<?php
require_once "conn.php";
$id=$_GET['id'];
$sql="DELETE FROM to_do WHERE id=$id";
$query=mysqli_query($conn,$sql);
if($query){
    header("location:read.php");
}
?>