<?php
class Myself
{

    var $name="AKKK";
    var $age=26;
    public function eat(){
        return $this->name."can eat";
    }
    public function sleep(){
        return "I can sleep";
    }

}

$obj = new Myself();
echo $obj->name;
echo "<br>";
echo $obj->eat();
