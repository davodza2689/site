<?php

class One {

    public $public = "public";
    private $private = "private";
    protected $protected = "protected";

    public function my() {
        return "Hello!" . ' ' . $this->private;
    }
    
    private function a1() {
        return "Hello!" . ' ' . $this->private;
    }
    
    protected function a2() {
        return "Hello!" . ' ' . $this->private;
    }
    
    public function __construct() {
        echo "Создание";
    }
    
    public function __destruct() {
        echo "<br /> Завершение <br />";
    }

}
