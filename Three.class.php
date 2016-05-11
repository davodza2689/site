<?php


class Three extends Two { 
    
    
    public $id = 10;

//    public function __construct() {
//        parent::__construct();
//        
//        echo "</br> Переоприлеление <br />";
//    }
    
    const MY = 1;
    
     public static function stat2(){
            
            return self::stat() + self::MY;
        }
        
        public function __clone() {
            $this->id = 1000;
        }


}
