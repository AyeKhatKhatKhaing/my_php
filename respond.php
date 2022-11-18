<?php
// echo "<pre>";
// print_r ($_GET);
// print_r ($_POST);
// print_r ($_FILES);

$name="aye khat khat khaing";
// $age=22;
// $arr=["x","y","z"];
// $assoc=[
//     "first_name"=>"aye",
//     "last_name"=>"khat",
// ];
// echo "My name is " . $name ." and I am " . $age." years old";
// echo "this is {$assoc['first_name']}";

function run(){
    global $name;
    return $name ;
}
echo run();