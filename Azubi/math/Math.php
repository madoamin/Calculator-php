<?php

namespace Azubi\math;

// Class Math with operators as methods
class Math implements MathInterface{
	public $value1;
    public $value2;

    public function __construct(){
  
     }

    public function add(float $value1,  float $value2): float{

        $result = $value1+$value2;
        return $result;
       
    }
    
    public function subtract( float $value1, float  $value2): float{
        $result = $value1-$value2;
        return $result;
       
    }
    
    public function multiply( float $value1, float  $value2): float {
        $result = $value1*$value2;
        return $result;
       
    }
    
    public function divide( float $value1, float  $value2): float {
        
        if($value2==0){
            $result = 0;
            return $result;       

        }else {
            $result = $value1/$value2;
            return $result;       

        }
    }
}
