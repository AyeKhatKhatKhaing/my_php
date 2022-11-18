<?php
error_reporting(0);
$error="";
$con=mysqli_connect("localhost","root","","myblog");
$error .= mysqli_connect_error();
// $sql="SELECT * FROM aa";

// $query=mysqli_query($sql,$con);
// echo mysqli_error($con);
$sql="INSERT INTO categories (title,user_id,aa) VALUSE ('Hello','1','i am aa')";
$query=mysqli_query($con,$sql);
if($query){
    echo "ok";
}
else{
    $error.= mysqli_error($con);
}

error_log($error,3,"error1.log");
?>