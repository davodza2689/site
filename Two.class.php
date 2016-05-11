<?php


class Two extends One { 

	public $a = "PHP" ;
	
	
	function my(){
            $b = parent::my();
		return "Hello!! " . $b . ' ' .$this->protected;
	
	}
        
        public static function stat(){
            
            return 123;
        }
        
       



}
