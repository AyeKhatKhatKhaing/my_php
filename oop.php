<?php 
$arr =array("a","b","c","d","e","f","g","h","i");
$fruits=array("apple","banana","mango");
print_r($arr);

$assoc=array(
    "name"=>"Khat",
    "age"=>"22",
    "skills"=>array("html","css","js")
);
echo("<pre>");
print_r($assoc["skills"][0]);

$obj=(object)$assoc;
print_r($obj->name);
echo "<br>";
echo (in_array("fgdf",$fruits)?"Shi tal":"Ma shi buu");
shuffle($fruits);
print_r($fruits);