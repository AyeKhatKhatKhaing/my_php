<?php
$tempFile=$_FILES["upload"]["tmp_name"];
$fileName=$_FILES["upload"]["name"].uniqid();
$supportFileType=['image/png'];
if($_FILES["upload"]["name"]){
    print_r($_FILES);
    if(in_array($_FILES["upload"]["type"],$supportFileType)){
        $saveFolder="store/";
        if(move_uploaded_file($tempFile,$saveFolder.$fileName)){
            header("Location:index.php");
        };
    }
    else{
        echo "not match";
    }   
}
else{
echo "ma shi buu";
}