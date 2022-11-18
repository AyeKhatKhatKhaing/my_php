<?php
$conn=mysqli_connect("localhost","root","","my_list");

$file=$_FILES['upload'];
$fileNameArr=$file['name'];
$fileTmpArr=$file['tmp_name'];
$saveFolder="store/";

foreach($fileNameArr as $key=>$fn){
    if($fn!=""){
        $newName=$saveFolder.$fileNameArr[$key].uniqid();

        move_uploaded_file($fileTmpArr[$key],$newName);
        $sql="INSERT INTO photos (photo_link) VALUES ('$newName.')";
        mysqli_query($conn,$sql);
    }
}
header("Location:index.php");