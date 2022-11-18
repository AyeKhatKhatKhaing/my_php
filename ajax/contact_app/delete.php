<?php
require_once 'base.php';
$id=$_GET['id'];
$con=con();
$sql="DELETE FROM contact WHERE id=$id";
if(mysqli_query($con,$sql)){
    echo "success";
}
else{
    echo mysqli_error($con);
}
