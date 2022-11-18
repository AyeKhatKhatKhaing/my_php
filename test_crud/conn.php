<?php
$conn=mysqli_connect("localhost","root","","my_list");
if(!$conn){
    echo "Connection error:" . mysqli_connect_error();
}
?>