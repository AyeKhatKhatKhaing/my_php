<?php
function textFilter($text)
{
    $text = trim($text);
    $text = htmlentities($text, ENT_QUOTES);
    $text = stripcslashes($text);
    return $text;
}
function register(){
    global $skillArr;
    $errorStatus=0;
    $name="";
    $email="";
    $phone="";
    $address="";
    $gender="";
    $skill="";
    if(empty($_POST['name'])){
        setError('name','Name is required');
        $errorStatus=1;
    }
    else{
        if(strlen($_POST['name'])<5){
            setError('name','Name must be larger than five');
            $errorStatus=1;
        }
        else{
            if(strlen($_POST['name'])>20){
                setError('name','Name must be less than 20');
                $errorStatus=1;
            }
            else{
                if (!preg_match("/^[a-zA-Z-' ]*$/",$_POST['name'])) {
                    setError('name','Only letters and characters are allowed');
                    $errorStatus=1;
                }
                else{
                    $name=textFilter($_POST['name']);
                }
            }
        }
    }

    if(empty($_POST['email'])){
        setError('email','Email is required');
        $errorStatus=1;
    }
    else{
        if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            setError('email','Email format incorrect');
            $errorStatus=1;
        }
        else{
            $email=textFilter($_POST['email']);
        }
    }
    if(empty($_POST['phone'])){
        setError('phone','Phone is required');
        $errorStatus=1;
    }
    else{
        if (!preg_match("/^[0-9 ]*$/",$_POST['phone'])) {
            setError('phone','Only numbers are allowed');
            $errorStatus=1;
        }
        else{
            $phone=textFilter($_POST['phone']);
        }
    }
    if(empty($_POST['address'])){
        setError('address','address is required');
        $errorStatus=1;
    }
    else{
        if(strlen($_POST['address'])<10){
            setError('address','Address must be larger than 10');
            $errorStatus=1;
        }
        else{
            if(strlen($_POST['address'])>50){
                setError('address','Address must be less than 50');
                $errorStatus=1;
            }
            else{
                $address=$_POST['address'];
            }
    }
}
    if(empty($_POST['gender'])){
        setError('gender','gender is required');
        $errorStatus=1;
    }
    else{
        if(!in_array($_POST['gender'],['male','female','gay','tom'])){
            setError('gender','Gender is incorrect');
            $errorStatus=1;
        }
    }
    if(empty($_POST['skill'])){
        setError('skill','skill is required');
        $errorStatus=1;
    }
    else{
        $skillError=0;
        foreach($_POST['skill'] as $s){
            if(!in_array($s,$skillArr)){
                setError('skill','skill is incorrect');
                $skillError=1;
            }
        }
        if(!$skillError){
            $skill=$_POST['skill'];
        }
    }


    $supportFileType=['image/png'];
    if(isset($_FILES["upload"]["name"])){
        $tempFile=$_FILES["upload"]["tmp_name"];
        $fileName=$_FILES["upload"]["name"].uniqid();
        print_r($_FILES);
        if(in_array($_FILES["upload"]["type"],$supportFileType)){
            $saveFolder="store/";
//            if(move_uploaded_file($tempFile,$saveFolder.$fileName)){
//                header("Location:index.php");
//            };
        }
        else{
            setError('upload','upload is incorrect');
            $errorStatus=1;
        }
    }
    else{
        setError('upload','upload is required');
        $errorStatus=1;
    }

}

    

function old($inputName){
    if(isset($_POST[$inputName])){
        return $_POST[$inputName];
    }
    else{
        return "";
    }
}
function setError($inputName,$message){
    $_SESSION['error'][$inputName]=$message;
}
function clearError(){
    $_SESSION['error']=[];

}
function getError($inputName){
    if(isset($_SESSION['error'][$inputName])){
        echo $_SESSION['error'][$inputName];
    }
    else{
        echo "";
    }
}

?>