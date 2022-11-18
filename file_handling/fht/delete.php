<?php
$name=$_GET['name'];
unlink("store/".$name);
header("location:index.php");