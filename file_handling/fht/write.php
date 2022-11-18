<?php

$userName=$_POST['name'];
$password=$_POST['password'];
$dir="store/";
$file=fopen($dir.$userName.uniqid().".txt","w");
fwrite($file,"username:$userName \n");
fwrite($file,"password:$password");
fclose($file);

header("location:index.php");


?>