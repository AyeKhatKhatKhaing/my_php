<?php
$conn=mysqli_connect("localhost","root","","my_list");
if($conn){
    echo "Success";
}
else{
    die("Can't connect");
}