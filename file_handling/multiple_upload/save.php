<?php
// echo "<pre>";
// print_r($_FILES);
// $tempFile=$_FILES["upload"]["tmp_name"];
// $fileName=$_FILES["upload"]["name"].uniqid();

// echo $tempFile;
// $saveFolder="store/";
// if(move_uploaded_file($tempFile,$saveFolder.$fileName)){
//     header("Location:index.php");
// };
print_r($_FILES);
// $file=$_FILES['upload'];
// $fileNameArr=$file['name'];
// $fileTmpArr=$file['tmp_name'];

// foreach($fileNameArr as $key=>$fn){
//     move_uploaded_file($fileTmpArr[$key],$saveFolder.$fileNameArr[$key].uniqid());
// }
// header("Location:index.php");