<?php


class Counter
{
    private $views = 15;

    public function getViews(){
        echo $this -> views;
    }
}