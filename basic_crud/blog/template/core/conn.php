<?php
$conn=mysqli_connect("localhost","root","","my_list");
if(!$conn){
    echo "Connection Fail :".mysql_connect_error();
}
?>