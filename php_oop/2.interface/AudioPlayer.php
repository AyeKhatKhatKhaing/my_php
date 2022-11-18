<?php


class AudioPlayer extends DB implements Rules
{

    public function play()
    {
        // TODO: Implement play() method.
    }

    public function stop()
    {
        // TODO: Implement stop() method.
    }

    public function next()
    {
        // TODO: Implement next() method.
    }

    public function delete()
    {
        // TODO: Implement delete() method.
    }

    public function playlist()
    {
        // TODO: Implement playlist() method.
        return "we need db connection".$this->con;
    }
    public function repeat(){

    }
}