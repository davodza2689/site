<?php

class Magic{
    
    public function __set($name, $value) {
        echo 'Name: '.$name , ' Value: ' . $value;
    }
    
    public function __get($name) {
        return  -10;
    }
    
    public function __call($name, $arguments) {
        return -20  ;
        }
    
}

