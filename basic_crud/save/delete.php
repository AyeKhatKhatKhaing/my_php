<?php
require_once "conn.php";
$id=$_GET['id'];
$sql="DELETE FROM to_do WHERE id={$id}";
if(!mysqli_query($conn,$sql)){
    echo "delete fail!".mysqli_error();
}
else{
    header("Location:read.php");
}
?>