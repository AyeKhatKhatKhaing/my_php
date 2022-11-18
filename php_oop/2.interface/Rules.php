<?php

interface Rules{

    public function play();
    public function stop();
    public function next();
    public function delete();
    public function playlist();

}