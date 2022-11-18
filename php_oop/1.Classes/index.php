<?php

$name="aye khat";
$age=21;

function drive(){
    global $name;
    return $name."can drive";
}
echo drive();

$fruits=["apple","orange","mango"];
$myself=(Object)[
    "name"=>"Akkk",
    "age"=>21,
];

echo "<pre>";
var_dump($myself);
echo "<hr>";
echo $myself->name;